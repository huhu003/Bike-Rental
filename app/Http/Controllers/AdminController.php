<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;


class AdminController extends Controller
{
    //
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin/dashboard');
    }
  
    public function update(Request $request, User $users)
    {

        $data=$request->validate([
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required',
    
            ]);
            $users->update($data);
            return redirect(url('../index'));
     
    }
    
}