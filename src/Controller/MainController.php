<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Main Controller.
 *
 * @Route(name="main.")
 */
class MainController extends AbstractController
{
    /**
     * Example endpoint.
     *
     * @Route("", name="index", methods={"OPTIONS","GET"})
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'app_env' => getenv('APP_ENV'),
            'data' => "That's Great!",
        ]);
    }
}
