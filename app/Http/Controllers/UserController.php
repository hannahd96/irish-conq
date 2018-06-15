<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\User;

class UserController extends Controllers
{
	
	
	public function profile_update(Request $request) {
    $request->validate([
        'username' => 'required'
    ]);
    $user = Auth::user();
    $user->username = $request->input('username');
    $user->save();
    
    $session = $request->session()->flash('message', 'Username updated successfully!');

    return redirect()->route('home');​

}
}

?>