<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Category;
use App\Models\Applications;
use App\Models\Contact;
use App\Models\Admins;
use Auth;
use Illuminate\Http\Request;

class AdminsController extends Controller
{


  public function login(Request $request)
  {   
    return view('admin.login');
  }

  public function loginPage(Request $request)
  {   
    $input = $request->all();

    $admin = Admins::where('email', $input['email'])->where('password', $input['password'])->first();
    if ($admin) {
     return redirect()->route('adminDashboard');
   } else{
     return redirect()->route('adminLogin');
   }
   
 }


  public function adminDashboard(Request $request)
  {   
       return view('admin.home');
  }

  public function categories(Request $request)
  {   
        $categories = Category::all();

       return view('admin.category-show', compact('categories'));
  }

  public function add_categories(Request $request)
  {   
    $input = $request->all();
    Category::create($input);
    return redirect()->route('categories')
    ->with(['success' =>'Added successfully!']);
  }

  public function edit_categories($id)
  {
    $category = Category::findorFail($id);
    $categories = Category::all();
    return view('employer.edit_job',compact('job','categories'));
  }


  public function job_list(Request $request)
  {   
        $jobs = Job::all();

       return view('admin.jobs', compact('jobs'));
  }


  public function admin_contacts(Request $request)
  {   
        $contacts = Contact::all();

       return view('admin.contacts', compact('contacts'));
  }


}
