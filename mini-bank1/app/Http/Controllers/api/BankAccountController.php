<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankAccount;
use Illuminate\Model\UserCompanie;

class BankAccountController extends Controller
{
    public function index()
    {
        //
        return BankAccount::All();
    }

    public function store(Request $request)
    {
        //dd($request->all());
        BankAccount::create($request->all());
    }

    public function show($id)
    {
        //
        return BankAccount::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
        $bankaccount = BankAccount::findOrFail($id);
        $bankaccount->update($request->all());
    }

    public function destroy($id)
    {
        //
        $bankaccount = BankAccount::findOrFail($id);
        $bankaccount->delete();
    }
}
