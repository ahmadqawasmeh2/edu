<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;

class OfferPushNotifications extends Notification
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [OneSignalChannel::class];
    }

    public function toOneSignal($notifiable)
    {
        if($this->data['buttonChecked'] == 'yes'){

            return OneSignalMessage::create()
            ->setSubject($this->data['subject'])
            ->setBody($this->data['body'])
            ->setIcon($this->data['icon'] ?? '')
            ->setUrl($this->data['target_url'] ?? '#')
            ->setImageAttachments($this->data['image'] ?? '')
            ->setWebButton(
                OneSignalWebButton::create('btn-1')
                    ->text($this->data['button_text'])
                    ->url($this->data['button_url'] ?? '#')
            );

        }else{

            return OneSignalMessage::create()
            ->setSubject($this->data['subject'])
            ->setBody($this->data['body'])
            ->setIcon($this->data['icon'] ?? '')
            ->setUrl($this->data['target_url'] ?? '#')
            ->setImageAttachments($this->data['image'] ?? '');

        }

    }
}
