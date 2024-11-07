<?php

// src/Controller/HelloController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController
{
    #[Route('/about')]
    public function helloWorld(): Response
    {
        return new Response(
            'Crée par moi meme  !'
        );
    }

    #[Route('/date')]
    public function date(): Response
    {
        $today = date("Y-m-d H:i:s");   
        return new Response(
            $today
        );
    }
}