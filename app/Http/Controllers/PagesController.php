<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Category;
use App\Models\Applications;
use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
  public function index()
  {
    $jobs = Job::orderBy('id','desc')->limit(6)->get();
    $categories = Category::limit(12)->get();
        // print_r($categories);
        // exit;
    return view('home', compact('jobs','categories'));
  }

  public function jobs(Request $request)
  {
    $input = $request->all();
    $keyword ='';
    if (!empty($input['search'])) {
      $keyword = $input['search'];
      $jobs = Job::orderBy('id','desc')->where('title', 'like', '%' . $input['search'] . '%')->paginate(100);
    }else{
      $jobs = Job::orderBy('id','desc')->paginate(12);
    }

    
    return view('jobs',compact('jobs','keyword'));
  }

  public function Category($id)
  {
    $jobs = Job::where('category_id',$id)->paginate(12);
    return view('jobs',compact('jobs'));
  }

  public function job_details($id)
  {  
    $applied = false;
    if (!empty( Auth::user()->id)) {
      $appliedJob = Applications::where('job_id',$id)->where('user_id', Auth::user()->id)->first();
      if($appliedJob){
        $applied = true;
      }

    }
    $totalApplicants = Applications::where('job_id',$id)->count();
    

    $job = Job::findorFail($id);
    return view('job_details',compact('job','applied','totalApplicants'));
  }

  public function about_us()
  {
    return view('about');
  }

  public function contact()
  {
    return view('contact');
  }

}
