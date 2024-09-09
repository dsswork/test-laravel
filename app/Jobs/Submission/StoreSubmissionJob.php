<?php

namespace App\Jobs\Submission;

use App\Events\Submission\SubmissionSaved;
use App\Http\DTO\SubmissionData;
use App\Http\Repositories\SubmissionRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class StoreSubmissionJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected SubmissionData $submissionData
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(SubmissionRepository $submissionRepository): void
    {
        $submission = $submissionRepository->create($this->submissionData);
        SubmissionSaved::dispatch($submission);
    }
}
