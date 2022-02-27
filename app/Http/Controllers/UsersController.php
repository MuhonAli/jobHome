<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Category;
use App\Models\Applications;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{

	
	public function profile()
	{
		//echo Auth::user();
		return view('users.profile');
	}


	public function update_profile(Request $request)
	{

		$user = User::findorFail(Auth::user()->id);
		$input = $request->all();
		// echo $input['name'];
		// exit;
		if (!empty($request->cv)) {
			$ext = $request->cv->extension();
			echo $ext;
			if($ext == 'img' || $ext == 'png' || $ext == 'pdf'){
				$cv = time().'.'.$request->cv->extension();  
				$input['cv'] = $cv;
				$request->cv->move(public_path('assets/images/cv'), $cv);
			}
			else{
				return redirect()->route('profile')
				->with(['error' =>'CV must be an image or pdf']);
			}
		}

		$update = $user->update($input);
		return redirect()->route('profile')
		->with(['success' =>'Updated successfully!']);
	}

}
