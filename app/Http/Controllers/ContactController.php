<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Category;
use App\Models\Applications;
use App\Models\Contact;
use Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{


  public function store_message(Request $request)
  {   

    $input = $request->all();
    Contact::create($input);
    return redirect()->route('contact')
    ->with(['success' =>'Thanks for contacting!']);
  }

  public function edit_job($id)
  {
    $job = Job::findorFail($id);
    $categories = Category::all();
    return view('employer.edit_job',compact('job','categories'));
  }


  public function update_job(Request $request,$id )
  {

    $job = Job::findorFail($id);
    $input = $request->all();
    if (!empty($request->image)) {
      $imageName = time().'.'.$request->image->extension();  
      $input['image'] = $imageName;
      $request->image->move(public_path('images'), $imageName);
    }

    $update = $job->update($input);
    return redirect()->route('edit_job', $id)
    ->with(['success' =>'Updated successfully!']);
  }

  public function delete_job($id )
  {
    $job = Job::findorFail($id);
    $update = $job->delete($job);
    return redirect()->route('my_jobs', $id)
    ->with(['success' =>'Deleted successfully!']);
  }


  public function apply_job($jobId)
  {   
    $input['job_id'] = $jobId;
    $input['user_id'] = Auth::user()->id;
    Applications::create($input);
    return redirect()->back()
    ->with(['success' =>'Applied successfully!']);
  }

  public function applied_jobs(Request $request)
  {
    $input = $request->all();

    $jobs = \DB::table('jobs')
    ->select('*','jobs.id as id')
    ->join('applications', 'applications.job_id', '=', 'jobs.id')
    ->where('applications.user_id', Auth::user()->id)
    ->get();

    return view('employee.applied_jobs',compact('jobs'));
  }

  public function applicant_list($id)
  {
    $applicants = \DB::table('applications')
    ->select('*')
    ->join('users', 'users.id', '=', 'applications.user_id')
    ->where('applications.job_id', $id)->get();
    return view('employer.applicant_list',compact('applicants'));
  }

}
