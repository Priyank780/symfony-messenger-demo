<?php

namespace App\MessageHandler;

use App\Message\Notification;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class NotificationHandler implements MessageHandlerInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(Notification $message)
    {
        $this->logger->info("Hello world", [$message->getContent()]);
    }
}