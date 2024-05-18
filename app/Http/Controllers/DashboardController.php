<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;

class DashboardController extends Controller
{
    public function index()
    {
        return view('forexadmin.dashboard');
    }

    public function usersindex()
    {
        $users = User::where('admin', '!=', 1)->orderBy('created_at', 'desc')->get(); // Fetch all users from the database except where admin = 1
    
        return view('forexadmin.users', compact('users')); // Pass the users to the view
    }
    public function inplansview()
    {
        $investments = Investment::all();
        return view('forexadmin.investment_plans', compact('investments'));
    }
    public function addplansview()
    {
        return view('forexadmin.addplans');

    }

    public function storeplans(Request $request)
    {
        $investment = new Investment();

        $investment->trade_category = $request->input('trade_category');
        $investment->investment = $request->input('investment');
        $investment->duration = $request->input('duration');
        $investment->total_profit = $request->input('total_profit');
        $investment->monthly_profit = $request->input('monthly_profit');
        $investment->weekly_profit = $request->input('weekly_profit');
        $investment->deposit_bonus = $request->input('deposit_bonus');
        $investment->refer_bonus = $request->input('refer_bonus');

        $investment->save();

        return redirect('/forexadmin/investment_plans')->with('success', 'Plan added successfully');
    }
    public function editplan($id)
    {
        $investment = Investment::find($id);
        return view('forexadmin.editplan', compact('investment'));
    }
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/forexadmin/users')->with('success', 'User deleted successfully');
    }

    public function deletePlan($id)
    {
        $investments = Investment::findOrFail($id);
        $investments->delete();

        return redirect('forexadmin/investment_plans')->with('success', 'Plan deleted successfully');
    }

    public function updateplan(Request $request, $id)
    {
        $investment = Investment::find($id);

        $investment->trade_category = $request->input('trade_category');
        $investment->investment = $request->input('investment');
        $investment->duration = $request->input('duration');
        $investment->total_profit = $request->input('total_profit');
        $investment->monthly_profit = $request->input('monthly_profit');
        $investment->deposit_bonus = $request->input('deposit_bonus');
        $investment->refer_bonus = $request->input('refer_bonus');

        $investment->save();
        
        return redirect('forexadmin/investment_plans')->with('success', 'Plan updated successfully');
    }
    
}
