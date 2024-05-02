<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class EdamamAPIService
{
    private $httpClient;
    private $apiAppId;
    private $apiAppKey;
    private $baseUri;

    public function __construct(HttpClientInterface $httpClient, string $apiAppId, string $apiAppKey, string $baseUri)
    {
        $this->httpClient = $httpClient;
        $this->apiAppId = $apiAppId;
        $this->apiAppKey = $apiAppKey;
        $this->baseUri = $baseUri;
    }


    public function getNutritionalInfo(string $foodName, string $quantity): array
{
    $response = $this->httpClient->request('GET', $this->baseUri . '/nutrition-data', [
        'query' => [
            'app_id' => $this->apiAppId,
            'app_key' => $this->apiAppKey,
            'ingr' => $quantity . ' ' . $foodName // Ajoutez la quantité à l'aliment dans la requête
        ]
    ]);

    $data = $response->toArray();
    
    // Traitement pour extraire les informations nécessaires
    $foodInfo = [
        'name' => $foodName,
        'quantity' => $quantity,
        'calories' => $data['calories'] ?? 'N/A', // Exemple d'information à extraire
    ];

    return $foodInfo;
}

    

}
