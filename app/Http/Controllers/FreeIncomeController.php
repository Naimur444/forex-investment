<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FreeIncome;
use App\Models\Sharelinks;

class FreeIncomeController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        $free_income = FreeIncome::where('uid', $user_id)->first();
        if ($free_income) {
        $sharelink = Sharelinks::where('assigned_to', $free_income->uid)->firstOrNew();
    
        return view('free-links', ['free_income' => $free_income, 'sharelink' => $sharelink]);
        }else {
            return view('free-income-request');
        }
    }
    
}
