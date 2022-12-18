<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        //
        return Transaction::all();
    }

    public function store(Request $request)
    {
        //
        //dd($request->all());
        Transaction::create($request->all());
    }

    public function show($id)
    {
        //
        return Transaction::findOrFail($id);
    }
    
    public function update(Request $request, $id)
    {
        //
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
    }

    
}
