<?php

namespace App\Jobs;

class SendChequeNotify implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Podcast $podcast,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(AudioProcessor $processor): void
    {
        // Process uploaded podcast...
        $cheques = [];

        foreach ($cheques as $cheque) {
            //send notification

            //email
            //sms

            //database
            //migration: notifications ('id', 'title', 'body', 'viewed_at')

            //cheque payments : 1- due date to 3 day 2-notified_at = null

            // store message in notifications
            //title: 'موعد چک ها'
            //body : "چک با شناسه 105 در تاریخ 1402/12/7 موعد سررسید آن است."
            //viewed_at: null | show => if null then update to now()
            //notified_at = now()

        }
    }
}
