<?php

namespace App\Listeners\Submission;

use App\Events\Submission\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSavedSubmission
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionSaved $event): void
    {
        Log::channel('submission')->info('Submission saved', [
            'name'  => $event->submission->name,
            'email' => $event->submission->email,
        ]);
    }
}
