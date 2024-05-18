<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Investment;


class ProfileController extends Controller
{
    public function index()
    {
        // Retrieve the currently authenticated user's data
        $user = auth()->user();
        
        // Make sure that the $user variable is not null before querying the database
        if ($user) {
            $deposit = Deposit::where('uid', $user->id)->where('status', '>', 0)->first();
            if($deposit){
                $investment = Investment::where('id', $deposit->planid)->first();
            }else{
                $investment = null;
            }
            // Pass the user data and investment plan to the view
            return view('profile', ['user' => $user, 'investment'=> $investment]);
        } else {
            // Redirect the user to a different page or display an error message
            return redirect()->route('login');
        }
    }
    
}
