<?php

namespace App\Http\Controllers;
use App\Models\PaymentMethod;
use App\Models\Investment;
use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index(Request $request)
    {
        $plan_id = $request->route('id'); // get the plan_id from the URL
        $pmethods = PaymentMethod::all();
    
        // pass the plan_id variable to the view
        return view('deposit', ['pmethods' => $pmethods, 'plan_id' => $plan_id]);
    }

    public function depositplan($pmethod_id, $plan_id = null)
    {
        // get the payment method by id
        $pmethod = PaymentMethod::find($pmethod_id);
        if (!$pmethod) {
            return redirect()->route('deposit')->withErrors(['pmethod_id' => 'Invalid payment method.']);
        }
    
        // get investment plan if plan_id is provided
        $plan = null;
        if ($plan_id) {
            $plan = Investment::find($plan_id);
        }
    
        // return the view with the variables
        return view('deposit-plan', [
            'pmethod' => $pmethod,
            'plan' => $plan,
        ]);
    }
    
    

    public function investplans()
    {
        $investments = Investment::all();
        return view('/investment-plans', compact('investments'));

    }

    public function depositshow()
    {   $user_id = auth()->id();
        $user = auth()->user();
        $deposits = Deposit::where('uid', $user_id)->get();        
        return view('/deposit-show',  ['user' => $user, 'deposits'=> $deposits]);

    }


    public function storedeposit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:6250.00',
            'phone_number' => 'required|string',
            'pmethod_id' => 'required|exists:payment_methods,id',
            'transaction_id' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $investment = Investment::where('investment', $request->input('amount'))->first();
        if (!$investment) {
            return redirect()->back()->withErrors(['error' => 'Invalid Investment Plan.'])->withInput();
        }
    
        $pmethod = PaymentMethod::find($request->input('pmethod_id'));
    
        $transaction_id = $request->input('transaction_id');
        $existing_deposit = Deposit::where('trxid', $transaction_id)->first();
        if ($existing_deposit) {
            return redirect()->back()->withErrors(['error' => 'Transaction ID already used.'])->withInput();
        }
    
        $invoice_num = 'INV' . Str::random(8);
    
        $payment = new Deposit();
        $payment->planid = $investment->id;
        $payment->uid = auth()->id();
        $payment->invoice_num = $invoice_num;
        $payment->amount = $request->input('amount');
        $payment->method = $pmethod->name;
        $payment->rc_number = $pmethod->number;
        $payment->sn_number = $request->input('phone_number');
        $payment->trxid = $transaction_id;
        $payment->save();
    
        return redirect()->route('deposit.success');
    }
    
}
