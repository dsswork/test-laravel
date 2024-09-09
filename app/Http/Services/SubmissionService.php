<?php

namespace App\Http\Services;

use App\Http\DTO\SubmissionData;
use App\Jobs\Submission\StoreSubmissionJob;
use Illuminate\Http\JsonResponse;

class SubmissionService
{
    public function create(SubmissionData $submissionData): JsonResponse
    {
        StoreSubmissionJob::dispatch($submissionData);
        return response()->json(['status' => 'created'], 201);
    }
}
