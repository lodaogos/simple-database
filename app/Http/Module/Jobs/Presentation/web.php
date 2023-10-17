<?php

use Illuminate\Support\Facades\Route;

Route::get('ping', function(){
    return csrf_token();
});

Route::post('create_jobs', [\App\Http\Module\Jobs\Presentation\Controller\JobsController::class, 'createJobs']);