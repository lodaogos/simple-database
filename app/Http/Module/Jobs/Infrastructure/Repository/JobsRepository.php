<?php

namespace App\Http\Module\Jobs\Infrastructure\Repository;

use App\Http\Module\Jobs\Domain\Model\Jobs;
use App\Http\Module\Jobs\Domain\Services\Repository\JobsRepositoryInterface;
use Illuminate\Support\Facades\DB;

class JobsRepository implements JobsRepositoryInterface
{
    public function save(Jobs $jobs)
    {
        DB::table('jobs')->upsert(
            [
                'position' => $jobs->position,
                'company' => $jobs->company,
                'salary' => $jobs->salary,
            ],
        );
    }
}