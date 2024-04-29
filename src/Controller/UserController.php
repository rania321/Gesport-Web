<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\UserType;
use App\Form\RegisterType;
use App\Form\ResetPassType;
use App\Form\NewPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;





#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/user/redirect', name: 'app_user_redirect')]
    public function redirectAfterLogin(Request $request, Swift_Mailer $mailer, SessionInterface $session): Response
    {
        // Récupérer l'utilisateur actuellement connecté
        $user = $this->getUser();
    
        // Vérifier si l'utilisateur est bloqué
        if ($this->isUserBlocked($user)) {
            // Rediriger l'utilisateur vers une page appropriée pour les utilisateurs bloqués
            return $this->redirectToRoute('mon_compte');
        }
    
        // Vérifier si le code de vérification est requis pour les utilisateurs de rôle "user"
        if ($user->getRoleu() === 'user') {
            // Vérifier si le code de vérification est déjà généré
            $verificationCode = $session->get('verification_code');
            $verificationCodeCorrect = $session->get('verification_code_correct');
    
            if (!$verificationCode && !$verificationCodeCorrect) {
                // Créer le formulaire de saisie de l'e-mail
                $form = $this->createForm(ResetPassType::class);
                $form->handleRequest($request);
    
                if ($form->isSubmitted() && $form->isValid()) {
                    // Si le formulaire est soumis et valide, appeler la fonction sendVerificationCode pour envoyer le code de vérification
                    $this->sendVerificationCode($request, $mailer, $session);
                    $this->addFlash('success', 'Un e-mail de vérification a été envoyé à votre adresse.');
    
                    // Redirection vers une autre page ou affichage d'un message de succès
                    //return $this->redirectToRoute('page_de_verification');
                }
    
                // Afficher le formulaire pour saisir l'e-mail
                return $this->render('user/twofactor.html.twig', [
                    'form' => $form->createView(),
                ]);
            } else {
                // Si le code de vérification est déjà généré et est correct, rediriger l'utilisateur vers une autre page
                return $this->redirectToRoute('enter_verification_code');
            }
        }
    
        // Si le code de vérification n'est pas requis et que l'utilisateur n'est pas bloqué,
        // rediriger en fonction du rôle de l'utilisateur
        if ($user->getRoleu() === 'Admin') {
            return $this->redirectToRoute('baseBack');
        } 
    }
   
    #[Route('/search', name: 'user_search', methods: ['POST'])]
    public function search(Request $request, UserRepository $userRepository): JsonResponse
    {
        $query = $request->request->get('query');

        $users = $userRepository->search($query);

        return $users;
    }
    
    

    #[Route('/block/{idu}', name: 'app_user_block', methods: ['POST'])]
    public function blockUser(User $user): Response
{
    // Récupérer l'identifiant de l'utilisateur
    $userId = $user->getIdu();
    
    // Vérifier si l'utilisateur est déjà bloqué
    if ($this->isUserBlocked($user)) {
        // Si l'utilisateur est déjà bloqué, ne rien faire
        return new Response('User is already blocked.', Response::HTTP_BAD_REQUEST);
    }
    
    // Ajouter l'identifiant de l'utilisateur bloqué dans le fichier .txt
    $this->addToBlacklist($userId);
    
    // Rediriger l'administrateur vers la page de gestion des utilisateurs
    return $this->redirectToRoute('app_user_index');
}

#[Route('/user/unblock/{idu}', name: 'app_user_unblock')]
public function unblockUser($idu): Response
{
    // Récupérer l'identifiant de l'utilisateur à débloquer

    // Définir le chemin absolu vers le fichier de liste noire
    $blacklistFile = realpath(__DIR__ . '/../../public/blacklist.txt');

    // Récupérer la liste des identifiants bloqués depuis le fichier
    $blacklistedIds = file($blacklistFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Supprimer l'identifiant de l'utilisateur de la liste noire
    $key = array_search($idu, $blacklistedIds);
    if ($key !== false) {
        unset($blacklistedIds[$key]);
    }

    // Écrire la nouvelle liste dans le fichier
    file_put_contents($blacklistFile, implode(PHP_EOL, $blacklistedIds));

    // Rediriger vers une page de confirmation ou une autre page appropriée
    return $this->redirectToRoute('base');
}

    
    // Méthode pour ajouter l'identifiant de l'utilisateur bloqué dans le fichier .txt
    private function addToBlacklist(int $userId): void
    {
        // Définir le chemin du fichier .txt
        $blacklistFile = 'blacklist.txt';
    
        // Ajouter l'identifiant de l'utilisateur bloqué dans le fichier
        file_put_contents($blacklistFile, $userId . PHP_EOL, FILE_APPEND);
    }
    private function isUserBlocked(User $user): bool
{
    if ($user === null) {
        return false; // Ou une autre logique selon vos besoins
    }
    // Définir le chemin absolu vers le fichier de liste noire
    $blacklistFile = realpath(__DIR__ . '/../../public/blacklist.txt'); 

    // Récupérer la liste des identifiants bloqués depuis le fichier
    $blacklistedIds = file($blacklistFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Vérifier si l'ID de l'utilisateur est dans la liste des identifiants bloqués
    $isBlocked = in_array($user->getIdu(), $blacklistedIds);

    var_dump($isBlocked); // Ajout pour le débogage

    return $isBlocked;
}
    
    

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoleu('user');
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/regi', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user, [
            'hide_role_field' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoleu('user');
            // Encodez le mot de passe
            $encodedPassword = $passwordEncoder->encodePassword(
                $user,
                $user->getMdpu()
            );
            $user->setMdpu($encodedPassword);

            // Enregistrez l'utilisateur
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // Rediriger l'utilisateur après l'inscription
            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/inscription2.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, SessionInterface $session, Swift_Mailer $mailer): Response
    {
        $error = null;

        // Vérifie si le formulaire de connexion a été soumis
        if ($request->isMethod('POST')) {
            // Récupère les données du formulaire
            $username = $request->request->get('email');
            $password = $request->request->get('password');

            // Vérifie si l'email est vide
            if (empty($username)) {
                $error = new \Exception('Email cannot be empty.');
            } else {
                // Récupère l'utilisateur depuis la base de données en fonction de l'adresse e-mail
                $userRepository = $this->getDoctrine()->getRepository(User::class);
                $user = $userRepository->findOneBy(['emailu' => $username]);

                // Vérifie si l'utilisateur existe
                if ($user) {
                    // Vérifie si le mot de passe est correct
                    if ($passwordEncoder->isPasswordValid($user, $password)) {
                        // Générer et envoyer le code de vérification par e-mail
                        $session->set('user_id', $user->getIdu());
                        $session->set('email', $username);
                       

                        // Rediriger l'utilisateur vers la page de saisie du code de vérification
                        
                        // Vous pouvez ajouter d'autres redirections ici si nécessaire
                    } else {
                        // Ajouter un message flash pour indiquer une erreur d'authentification
                        $this->addFlash('error', 'Identifiant ou mot de passe incorrect.');
                    }
                } else {
                    // Ajouter un message flash pour indiquer une erreur d'authentification
                    $this->addFlash('error', 'Identifiant ou mot de passe incorrect.');
                }
            }
        }

        // Affiche le formulaire de connexion avec éventuelle erreur
        return $this->render('user/login.html.twig', [
            'error' => $error,
        ]);
    }


// Fonction pour vérifier si un utilisateur est bloqué


    #[Route("/oubli_pass", name: "forgotten_password")]
    public function forgottenPass(
        Request $request, 
        UserRepository $userRepository, 
        Swift_Mailer $mailer, 
        TokenGeneratorInterface $tokenGenerator
    ): Response {
        // On crée le formulaire
        $form = $this->createForm(ResetPassType::class);
        
        // On traite le formulaire
        $form->handleRequest($request);
    
        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère les données du formulaire
            $formData = $form->getData();
            $emailu = $formData['emailu']; // Assurez-vous que le champ dans votre formulaire est nommé 'email'
    
            // On cherche l'utilisateur par son adresse email
            $user = $userRepository->findOneByEmailu($emailu);
    
            // Si l'utilisateur existe
            if ($user) {
                // Générer un token
                // Générer un token en incluant le champ 'emailu'
                $tokenData = ['emailu' => $emailu];

 
                $token = base64_encode(json_encode($tokenData));
    
                // Stocker le token dans un cookie
                $response = new Response();
                $response->headers->setCookie(
                    new Cookie('reset_password_token', $token)
                );
                $response->send();
    
                // Stocker le token dans l'URL de réinitialisation de mot de passe
                $resetUrl = $this->generateUrl('app_reset_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
    
                // Envoyer le message avec l'URL de réinitialisation de mot de passe
                $message = (new \Swift_Message('Réinitialisation de mot de passe'))
                    ->setFrom('your_email@example.com') // Remplacez par votre adresse e-mail
                    ->setTo($emailu)
                    ->setBody(
                        "<p>Bonjour,</p><p>Vous avez demandé une réinitialisation de mot de passe. Cliquez sur le lien suivant pour procéder à la réinitialisation : <a href='$resetUrl'>Réinitialiser le mot de passe</a></p>",
                        'text/html'
                    );
    
                // Envoyer l'e-mail
                $mailer->send($message);
    
                // Ajouter un message flash pour indiquer que l'e-mail de réinitialisation a été envoyé
                $this->addFlash('success', 'Un e-mail de réinitialisation de mot de passe a été envoyé à votre adresse.');
    
                // Redirection vers la page de connexion
                return $this->redirectToRoute('app_login');
            } else {
                // Message flash si l'email n'est pas trouvé
                $this->addFlash('danger', 'Aucun utilisateur trouvé avec cette adresse email.');
    
                // Redirection vers la page de demande d'email
                return $this->redirectToRoute('forgotten_password');
            }
        }
    
        // Afficher le formulaire
        return $this->render('user/forgotten_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    



#[Route("/reset_pass", name:"app_reset_password")]
public function resetPassword(Request $request, UserPasswordEncoderInterface $passwordEncoder, SessionInterface $session): Response
{
    $resetToken = $request->cookies->get('reset_password_token');

    if (!$resetToken) {
        $this->addFlash('danger', 'Token de réinitialisation de mot de passe invalide.');
        return $this->redirectToRoute('app_login');
    }

    $tokenData = json_decode(base64_decode($resetToken), true);
    $emailu = isset($tokenData['emailu']) ? $tokenData['emailu'] : null;

    $form = $this->createForm(NewPasswordType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $mdpu = $form->get('password')->getData();

        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->findOneByEmailu($emailu);

        if ($user) {
            $encodedPassword = $passwordEncoder->encodePassword($user, $mdpu);
            $user->setMdpu($encodedPassword);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // Supprimer le cookie de réinitialisation de mot de passe
            $response = new Response();
            $response->headers->clearCookie('reset_password_token');
            $response->sendHeaders();


            

            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès. Vous pouvez maintenant vous connecter.');
            return $this->redirectToRoute('app_login');
        } else {
            $this->addFlash('danger', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_login');
        }
    }

    return $this->render('user/reset_password.html.twig', [
        'form' => $form->createView(),
        'token' => $resetToken,
        'emailu' => $emailu,
    ]);
}

    

    
#[Route('/mon-compte', name: 'mon_compte')]
public function monCompte(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
{
    // Obtenez l'utilisateur connecté
    $user = $this->getUser();
    
    if (!$user) {
        // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
        return $this->redirectToRoute('app_login');
    }
    $isBlocked = $this->isUserBlocked($user);

    // Vérifiez si l'utilisateur est un administrateur
    if ($user->getRoleu() === 'Admin'||$isBlocked ) {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // Traitez le formulaire s'il est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Vos informations ont été mises à jour avec succès.');
            return $this->redirectToRoute('mon_compte');
        }

        // Afficher le compte de l'administrateur directement sans effectuer la vérification
        return $this->render('user/mon_compte.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'isBlocked' => $isBlocked, // L'administrateur n'est jamais bloqué
        ]);
    }

    // Vérifiez si le code de vérification est correct
    $verificationCodeCorrect = $session->get('verification_code_correct', false);
    if (!$verificationCodeCorrect) {
        // Rediriger l'utilisateur vers la page de saisie du code de vérification
        return $this->redirectToRoute('enter_verification_code');
    }

    // Vérifiez si l'utilisateur est bloqué
    $isBlocked = $this->isUserBlocked($user);

    // Créez un formulaire pour éditer les informations de l'utilisateur
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    // Traitez le formulaire s'il est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        $this->addFlash('success', 'Vos informations ont été mises à jour avec succès.');
        return $this->redirectToRoute('mon_compte');
    }

    // Affichez les informations de l'utilisateur
    return $this->render('user/mon_compte.html.twig', [
        'user' => $user,
        'form' => $form->createView(),
        'isBlocked' => $isBlocked,
    ]);
}


#[Route('/logout', name: 'app_logout')]
public function logout(LogoutUrlGeneratorInterface $logoutUrlGenerator): Response
{
    $session->set('verification_code_correct', false);
    // Générer l'URL de déconnexion
    $logoutUrl = $logoutUrlGenerator->logout();

    // Rediriger l'utilisateur vers l'URL de déconnexion
    return $this->redirect($logoutUrl);
}
#[Route('/enter-verification-code', name: 'enter_verification_code')]
public function enterVerificationCode(Request $request): Response
{
    // Vérifier si le formulaire de saisie du code de vérification est soumis
    if ($request->isMethod('POST')) {
        $verificationCodeFromEmail = $request->request->get('verification_code');
        $session = $this->get('session');
        $verificationCode = $session->get('verification_code');

        // Vérifier si le code saisi est correct
        if ($verificationCodeFromEmail === $verificationCode) {
            $session->set('verification_code_correct', true);
            // Rediriger l'utilisateur vers la page souhaitée après avoir saisi le bon code
            return $this->redirectToRoute('base'); // Remplacez 'base' par la route souhaitée
        } else {
            // Ajouter un message d'erreur pour indiquer que le code est incorrect
            $this->addFlash('error', 'Le code de vérification est incorrect.');
        }
    }

    // Afficher le formulaire de saisie du code de vérification
    return $this->render('user/enter_verification_code.html.twig');
}





  

    #[Route('/{idu}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{idu}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/{idu}/edituser', name: 'app_user_edituser', methods: ['GET', 'POST'])]
    public function edituser(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('base', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    

    #[Route('/{idu}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getIdu(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/delete-account/{idu}', name: 'delete_account', methods: ['POST'])]
    public function deleteAccount(Request $request, EntityManagerInterface $entityManager, User $user): Response
    {
        // Vérifiez que l'utilisateur est connecté
        if (!$user) {
            throw new AccessDeniedHttpException('User not authenticated.');
        }
    
        // Supprimez l'utilisateur de la base de données
        $entityManager->remove($user);
        $entityManager->flush();
    
        // Déconnectez l'utilisateur
        $this->get('security.token_storage')->setToken(null);
        $request->getSession()->invalidate();
    
        // Redirigez l'utilisateur vers une page de confirmation ou ailleurs après la suppression du compte
        $this->addFlash('success', 'Votre compte a été supprimé avec succès.');
        return $this->redirectToRoute('app_logout');
    }


   
    
    // Méthode pour générer un code de vérification aléatoire
    public function generateVerificationCode(): string
    {
        return rand(100000, 999999); // Génère un code à 6 chiffres
    }
    
    // Méthode pour envoyer le code de vérification par e-mail
    public function sendVerificationCode(Request $request, Swift_Mailer $mailer, SessionInterface $session): Response {
        // Créez le formulaire
        $form = $this->createForm(ResetPassType::class);
        
        // Traitez le formulaire
        $form->handleRequest($request);
    
        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérez les données du formulaire
            $formData = $form->getData();
            $emailu = $formData['emailu']; // Assurez-vous que le champ dans votre formulaire est nommé 'email'
    
            // Générez un code de vérification unique (vous devrez implémenter cette logique)
            $verificationCode = $this->generateVerificationCode();
    
            // Stockez le code de vérification dans la session
            $session->set('verification_code', $verificationCode);
    
            // Envoyez le code de vérification par e-mail à l'utilisateur
            $message = (new \Swift_Message('Code de vérification'))
                ->setFrom('your_email@example.com') // Remplacez par votre adresse e-mail
                ->setTo($emailu)
                ->setBody(
                    "Votre code de vérification est : $verificationCode"
                );
    
            // Envoyez l'e-mail
            $mailer->send($message);
    
            // Ajoutez un message flash pour indiquer que l'e-mail de vérification a été envoyé
            $this->addFlash('success', 'Un e-mail de vérification a été envoyé à votre adresse.');
    
            // Redirection vers une autre page ou affichage d'un message de succès
            //return $this->redirectToRoute('page_de_verification');
        }
    
        // Affichez le formulaire
        return $this->render('user/forgotten_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
}
    
    
   
   
   




