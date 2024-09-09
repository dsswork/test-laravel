<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\DTO\SubmissionData;
use App\Http\Requests\Submission\StoreSubmissionRequest;
use App\Http\Services\SubmissionService;
use Illuminate\Http\JsonResponse;

class SubmissionController extends Controller
{
    public function __construct(
        protected SubmissionService $service
    ) {
    }

    public function store(StoreSubmissionRequest $request): JsonResponse
    {
        $submissionData = new SubmissionData(...$request->validated());

        return $this->service->create($submissionData);
    }
}
