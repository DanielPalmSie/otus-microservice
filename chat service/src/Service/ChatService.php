<?php

namespace App\Service;

use GuzzleHttp\ClientInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ChatService
{
    public function __construct(
        private readonly DatabaseService $databaseService,
        private readonly ClientInterface $httpClient,
        private readonly RequestStack $requestStack
    ) {}

    public function sendMessage(int $dialogId, int $senderId, string $content): void
    {
        $messageData = [
            'dialog_id' => $dialogId,
            'sender_id' => $senderId,
            'content' => $content,
            'timestamp' => date('Y-m-d H:i:s'),
        ];

        $currentRequest = $this->requestStack->getCurrentRequest();

        $requestId = $currentRequest?->headers->get('x-request-id') ?? bin2hex(random_bytes(16));

        $this->httpClient->post('http://receiver-service/log', [
            'headers' => [
                'x-request-id' => $requestId,
                'Content-Type' => 'application/json',
            ],
            'json' => $messageData,
        ]);
    }

    public function listMessages(int $dialogId)
    {
        $sql = 'SELECT * FROM messages WHERE dialog_id = :dialog_id ORDER BY timestamp';
        $parameters = [
            'dialog_id' => $dialogId,
        ];

        return $this->databaseService->fetchAll($sql, $parameters);
    }
}