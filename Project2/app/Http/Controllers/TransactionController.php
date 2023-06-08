<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\models\transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return transaction::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return transaction::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return transaction::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = transaction::find($id);
        $transaction->update($request->all());
        return $transaction;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return transaction::destroy($id);
    }
}
