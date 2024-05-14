<?php
namespace App\Controller;

use App\Service\EdamamAPIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class EdamamApiController extends AbstractController
{
    #[Route('/api/edamam/{foodName}', name: 'edamam_api')]
    #[Route('/Edamam', name: 'Edamam')]
    public function index(EdamamAPIService $edamamService): Response
{
    // Appel du service pour obtenir les informations nutritionnelles de l'aliment "Apple" avec une quantité spécifiée
    $foodInfo = $edamamService->getNutritionalInfo('banana', '100g'); // Par exemple, 100g
    
        
    return $this->render('Edamam.html.twig', [
        'resultats' => $foodInfo,
    ]);
}

#[Route('/Edamamm/{foodName?}/{quantity?}', name: 'Edamamm', methods: ['GET', 'POST'])]
public function x(Request $request, EdamamAPIService $edamamService): Response
{
    // Get the values of foodName and quantity from the route parameters
    $foodName = $request->get('foodName');
    $quantity = $request->get('quantity');

    // Check if foodName and quantity are empty
    if (empty($foodName) || empty($quantity)) {
        // Set default values if foodName or quantity is empty
        $foodName = 'banana';
        $quantity = '100g';
    }

    // Call the service to get the nutritional information
    $foodInfo = $edamamService->getNutritionalInfo($foodName, $quantity);

    // Render the template
    return $this->render('Edamam.html.twig', [
        'resultats' => $foodInfo,
    ]);
}


}
