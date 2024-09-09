<?php

namespace App\Http\Repositories;

use App\Http\DTO\SubmissionData;
use App\Models\Submission;

class SubmissionRepository
{
    public function __construct(
        protected Submission $model,
    ) {
    }

    public function create(SubmissionData $submissionData): Submission
    {
        return $this->model
            ->query()
            ->create($submissionData->toArray());
    }
}
