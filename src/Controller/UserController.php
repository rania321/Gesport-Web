<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\UserType;
use App\Form\ResetPassType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;




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

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
        $form = $this->createForm(UserType::class, $user, [
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
     public function login(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, SessionInterface $session): Response
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
    
                // Vérifie si l'utilisateur existe et si le mot de passe est correct
                if ($user && $passwordEncoder->isPasswordValid($user, $password)) {
                    // Stocker les informations de l'utilisateur dans la session
                    $session->set('user_id', $user->getIdu());
                    $session->set('username', $user->getUsername());
    
                    // Rediriger l'utilisateur en fonction de son rôle
                    if ($user->getRoleu() === 'Admin') {
                        // Ajouter un message flash pour indiquer une connexion réussie
                        $this->addFlash('success', 'Vous êtes connecté en tant que ' . $user->getUsername());
                        // Redirection vers la page de profil
                        return $this->redirectToRoute('baseBack');
                    } else {
                        // Ajouter un message flash pour indiquer une connexion réussie
                        $this->addFlash('success', 'Vous êtes connecté en tant que ' . $user->getUsername());
                        // Redirection vers la page d'administration (ou autre page appropriée)
                        return $this->redirectToRoute('mon-compte');
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
    #[Route('/user/redirect', name: 'app_user_redirect')]
public function redirectAfterLogin(): Response
{
    // Récupérer l'utilisateur actuellement connecté
    $user = $this->getUser();

    // Rediriger en fonction du rôle de l'utilisateur
    if ($user->getRoleu() === 'Admin') {
        return $this->redirectToRoute('baseBack');
    } else {
        return $this->redirectToRoute('base');
    }
}
 #[Route("/oubli_pass", name:"forgotten_password")]
public function forgottenPass(Request $request, UserRepository $usersRepo, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator){
   // On crée le formulaire
   $form = $this->createForm(ResetPassType::class);

   // On traite le formulaire
   $form->handleRequest($request);

   // Si le formulaire est valide
   if($form->isSubmitted() && $form->isValid()){
       // On récupère les données
       $donnees = $form->getData();

       // On cherche si un utilisateur a cet email
       $user = $usersRepo->findOneByEmailu($donnees['emailu']);

       // Si l'utilisateur n'existe pas
       if(!$user){
           // On envoie un message flash
           $this->addFlash('danger', 'Cette adresse n\'existe pas');

           return $this->redirectToRoute('app_login');
       }

       // On génère un token
       $token = $tokenGenerator->generateToken();

       try{
           $user->setResetToken($token);
           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($user);
           $entityManager->flush();
       }catch(\Exception $e){
           $this->addFlash('warning', 'Une erreur est survenue : '. $e->getMessage());
           return $this->redirectToRoute('app_login');
       }

       // On génère l'URL de réinitialisation de mot de passe
       $url = $this->generateUrl('app_reset_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);

       // On envoie le message
       $message = (new \Swift_Message('Mot de passe oublié'))
       ->setFrom('travel.me.pridev@gmail.com')
       ->setTo($user->getEmail())
       ->setBody(
           "<p>Bonjour,</p><p>Une demande de réinitialisation de mot de passe a été effectuée pour le site Travel Me. Veuillez cliquer sur le lien suivant : " . $url .'</p>',
           'text/html'
           )
       ;

       // On envoie l'e-mail
       $mailer->send($message);

       // On crée le message flash
       $this->addFlash('message', 'Un e-mail de réinitialisation de mot de passe vous a été envoyé');

       return $this->redirectToRoute('app_login');
   }

   // On envoie vers la page de demande de l'e-mail
   return $this->render('user/forgotten_password.html.twig', ['emailForm' => $form->createView()]);
}



 #[Route("/reset_pass/{token}", name:"app_reset_password")]

public function resetPassword($token, Request $request, EntityManagerInterface $manager){
   // On cherche l'utilisateur avec le token fourni
   $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['reset_token' => $token]);

   if(!$user){
       $this->addFlash('danger', 'Token inconnu');
       return $this->redirectToRoute('app_login');
   }

   
   if($request->isMethod('POST')){
       
       $user->setResetToken(null);

       #$hash = $encoder->encodePassword($user, $user->getPassword());
       $user->setPassword($user->getPassword());
       
       $manager->persist($user);
       $manager->flush();

       $this->addFlash('message', 'Mot de passe modifié avec succès');

       return $this->redirectToRoute('app_login');
   }else{
       return $this->render('user/reset_password.html.twig', ['token' => $token]);
   }

}

    

    
#[Route('/mon-compte', name: 'mon_compte')]
public function monCompte(Request $request, EntityManagerInterface $entityManager): Response
{
    // Obtenez l'utilisateur connecté
    $user = $this->getUser();

    // Affiche l'e-mail de l'utilisateur connecté dans la console
    if ($user) {
        dump('User email:', $user->getEmailu());
    } else {
        dump('User not logged in.');
    }

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
    ]);
}

#[Route('/logout', name: 'app_logout')]
public function logout(LogoutUrlGeneratorInterface $logoutUrlGenerator): Response
{
    // Générer l'URL de déconnexion
    $logoutUrl = $logoutUrlGenerator->logout();

    // Rediriger l'utilisateur vers l'URL de déconnexion
    return $this->redirect($logoutUrl);
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
    
    
   
   
   



}
