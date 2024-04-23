<?php

// src/Controller/BotManController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // Import the AbstractController class
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\DoctrineCache;
use Symfony\Component\Cache\DoctrineProvider;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class BotManController extends AbstractController

    {
        #[Route('/botman', name: 'botman_handle')]
        public function handle(Request $request): Response
        {
            $botman = BotManFactory::create([]);
    
            // Ajoutez un écouteur pour le message "hello"
            $botman->hears('hello', function (BotMan $bot) {
                $bot->reply('Hello there!');
            });
    
            // Ajoutez un écouteur pour le message "time"
            $botman->hears('time', function (BotMan $bot) {
                $time = date("h:i:sa");
                $bot->reply("Current time is: $time");
            });
    
            // Écoutez les messages entrants
            $botman->listen();
    
            // Pas besoin de renvoyer de réponse car BotMan gère cela pour vous
    
            return new Response();
        }
    }
