<?php

namespace App\Command;

use App\Message\Notification;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class DemoCommand extends Command
{
    protected static $defaultName = 'app:send-message';
    /**
     * @var MessageBusInterface
     */
    private $bus;

    public function __construct( MessageBusInterface $bus, string $name = null)
    {
        parent::__construct($name);
        $this->bus = $bus;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->bus->dispatch(new Notification("Test"));
        return 0;
    }
}