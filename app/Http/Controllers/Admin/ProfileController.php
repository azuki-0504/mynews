<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin.profile.edit');  
    }
    
    public function update(Request $request)
    {
        return redirct('admin/profile/edit');
    }
    
}
