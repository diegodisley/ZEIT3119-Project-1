<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function EditTransaction($invoice_number)
    {
        $transaction = transaction::findOrFail($invoice_number);
        return view('EditTransaction', compact('transaction'));
    }

    public function update(Request $request, $invoice_number)
    {
        $transaction = Transaction::findOrFail($invoice_number);
    
    
        // update the transaction
        $transaction->amount = $request->price;
        $transaction->date = $request->date;
        $transaction->category = $request->category;
    
        $transaction->save();
    
        // redirect to some view, with a success message
        return redirect()->route('PreviousTransaction')->with('success', 'Transaction updated successfully');
    }

    public function NewTransaction(){
        return view('NewTransaction');
    }
    public function store(Request $request)
    {
        // Create a new transaction
        $transaction = new Transaction;
        $transaction->user_id = Auth::id();
        $transaction->invoice_number = $request->input('invoiceNumber');
        $transaction->amount = $request->input('price');
        $transaction->date = $request->input('date');
        $transaction->category = $request->input('category');


        $transaction->save();

        // Redirect to a success page or perform any additional actions

        return redirect()->route('PreviousTransaction');
    }
    
    public function PreviousTransaction(){
        $userId = Auth::id();
        $transactions = Transaction::where('user_id', $userId)->get();
        return view('PreviousTransaction', ['transactions' => $transactions]);

    }

    public function DeleteTransaction($invoice_number)
    {
        $transaction = transaction::findOrFail($invoice_number);
        return view('DeleteTransaction', compact('transaction'));
    }
    public function destroy($invoice_number)
    {
        $transaction = Transaction::where('invoice_number', $invoice_number)->first();

        if (!$transaction) {
            return redirect()->back()->with('error', 'Transaction not found.');
        }

        $transaction->delete();

        return redirect()->route('PreviousTransaction')->with('success', 'Transaction deleted successfully.');
    }
}