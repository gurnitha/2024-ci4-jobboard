<?php

namespace App\Controllers;
use App\Models\Job\Job;

class Home extends BaseController
{
    public function index(): string
    {
        # Instantiate the model
        $jobs = new Job();
        $allJobs = $jobs->findAll();
        return view('home', compact('allJobs'));
    }
}
