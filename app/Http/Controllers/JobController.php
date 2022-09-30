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
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(4) //simplePaginate //FOR NEXT AND PREV BUTTON ONLY
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

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Job::create($formFields);

        return redirect('/')->with('message', 'Job listing created successfully!');
    }

    // SHOW EDIT FORM
    public function edit(Job $job) {
        // dd($job);
        return view('jobs.edit', ['job' => $job]);
    }

    //UPDATE JOB LISTING DATA
    public function update(Request $request, Job $job) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $job->update($formFields);

        return back()->with('message', 'Job listing updated successfully!');
    }

    // DELETE JOB LISTING
    public function destroy(Job $job) {
        $job->delete();
        return redirect('/')->with('message', 'Job listing deleted successfully!');
    }
}
