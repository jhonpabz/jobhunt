<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all job listings
    public function index() {
        return view('jobs', [
            'jobs' => Job::all()
        ]);
    }

    // Show single job listing
    public function show(Job $job){
        return view('job', [
            'job' => $job
        ]);
    }
}
