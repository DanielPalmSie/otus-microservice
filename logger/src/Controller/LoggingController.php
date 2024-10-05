<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoggingController extends AbstractController
{
    /**
     * @Route("/log", name="log_request", methods={"POST"})
     */
    public function logRequest(Request $request, LoggerInterface $logger): JsonResponse
    {
        $requestId = $request->headers->get('x-request-id');

        if (!$requestId) {
            $logger->warning('Запрос без x-request-id');
            return new JsonResponse(['error' => 'x-request-id header is missing'], 400);
        }

        $logger->info('Received x-request-id: ' . $requestId);

        $message = $request->getContent();
        $logger->info('Request content: ' . $message);

        return new JsonResponse(['status' => 'Logged x-request-id successfully'], 200);
    }
}
