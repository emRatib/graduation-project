<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailContact extends Notification
{
    use Queueable;

    private $name;
    private $subject;
    private $email;
    private $messageContent;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($name, $subject, $email ,$messageContent)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->email = $email;
        $this->messageContent = $messageContent;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = `http://127.0.0.1:8000/website/user/contact`.$this->name;
        return (new MailMessage)
                    ->subject($this->subject)
                    ->line($this->messageContent)
                    ->action('Return To Website', $url)
                    ->line('Thank you for using our Salamtic Diabetes!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
