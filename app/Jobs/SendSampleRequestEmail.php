<?php

namespace App\Jobs;

use App\SampleRequest;
use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSampleRequestEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $sample;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(SampleRequest $sample)
    {
        $this->sample = $sample;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.sample-request', ['sample' => $this->sample], function ($m) {
            $m->from(env('EMAIL_FROM'));
            $m->to(env('EMAIL_TO'));
            $m->subject('RectiCare Sample Request: ' . $this->sample->name);
        });
    }
}
