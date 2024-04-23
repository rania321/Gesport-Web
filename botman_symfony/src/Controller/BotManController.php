<?php

// src/Controller/BotManController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\DoctrineCache;

class BotManController extends AbstractController
{
    #[Route('/botman', name: 'botman_handle')]
    public function handle(Request $request): Response
    {
        // Directly instantiate the FilesystemCache class
        $cacheDriver = new \Doctrine\Common\Cache\FilesystemCache(sys_get_temp_dir());

        $botman = BotManFactory::create([
            'storage' => new DoctrineCache($cacheDriver), // Pass the FilesystemCache instance
        ]);

        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello there!');
        });

        $botman->listen();

        return new Response();
    }
}
