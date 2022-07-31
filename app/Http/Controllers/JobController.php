<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    // Show all job listings
    public function index() {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show single job listing
    public function show(Job $job){
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    //Show Create Form
    public function create() {
        return  view('jobs.create');
    }

    //STORE JOB LISTING DATA
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        Job::create($formFields);

        return redirect('/')->with('message', 'Job listing created successfully!');
    }
}
