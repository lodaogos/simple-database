<?php

namespace App\Http\Module\Jobs\Domain\Services\Repository;

use App\Http\Module\Product\Domain\Model\Jobs;

interface JobsRepositoryInterface
{
    public function save(Jobs $jobs);

}
