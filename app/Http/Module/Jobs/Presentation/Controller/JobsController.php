<?php

namespace App\Http\Module\Jobs\Presentation\Controller;

use App\Http\Module\Jobs\Application\Services\CreateJobs\CreateJobsRequest;
use App\Http\Module\Jobs\Application\Services\CreateJobs\CreateJobsService;
use Illuminate\Http\Request;

class JobsController
{
    public function __construct(
        private CreateJobsService $create_jobs_service
    )
    {
    }

    public function createJobs(Request $request){
        // dd($request);
        $request = new CreateJobsRequest(
            $request->input('nama'),
            $request->input('price'),
            $request->input('description'),
        );

        return $this->create_jobs_service->execute($request);
    }
}