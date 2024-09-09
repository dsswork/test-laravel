<?php

namespace App\Http\DTO;

readonly class SubmissionData extends CommonData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $message,
    ) {
    }
}
