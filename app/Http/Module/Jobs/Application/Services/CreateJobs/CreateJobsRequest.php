<?php

namespace App\Http\Module\Product\Application\Services\CreateJObs;

class CreateJobsRequest
{
    public function __construct(
        public string $position,
        public string $company,
        public int $salary,
    )
    {
    }
}