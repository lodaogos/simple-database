<?php

namespace App\Http\Module\Jobs\Domain\Model;

class Jobs
{
    /**
     * @param string $position
     * @param string $company
     * @param int $salary
     */
    public function __construct(
        public string $position,
        public string $company,
        public int $salary,
    )
    {
    }
}