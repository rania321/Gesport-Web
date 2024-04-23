<?php
namespace App\Service;

use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Notification\Notification;

class NotificationService
{
    private $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function sendDesktopNotification(string $title, string $body)
    {
        $notification = new Notification($title);
        $notification->content($body);

        $this->notifier->send($notification);
    }
}
