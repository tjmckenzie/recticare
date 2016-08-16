<?php

namespace App\Jobs;

use App\Contact;
use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $contact;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.contact', ['contact' => $this->contact], function ($m) {
            $m->from(env('EMAIL_FROM'));
            $m->sender($this->contact->email);
            $m->replyTo($this->contact->email);
            $m->to(env('EMAIL_TO'));
            $m->subject('RectiCare Contact: ' . $this->contact->name);
        });
    }
}
