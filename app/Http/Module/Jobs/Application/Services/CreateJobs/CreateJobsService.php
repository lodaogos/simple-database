<?php

namespace App\Http\Module\Jobs\Application\Services\CreateJobs;

use App\Http\Module\Jobs\Domain\Model\Jobs;
use App\Http\Module\Jobs\Domain\Services\Repository\JobsRepositoryInterface;

class CreateJobsService
{

    public function __construct(
        private JobsRepositoryInterface $jobs_repository
    )
    {
    }

    public function execute(CreateJobsRequest $request){
        $jobs = new Jobs(
            $request->position,
            $request->company,
            $request->salary,
        );

        $this->jobs_repository->save($jobs);
    }
}

