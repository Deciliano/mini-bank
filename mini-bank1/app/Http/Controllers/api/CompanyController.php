<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Index
    public function index()
    {
        //
        return Company::all();
    }

    // Store
    public function store(Request $request)
    {
        //
        Company::create($request->all());
    }

    // Show
    public function show($id)
    {
        //
        return Comapny::findOrFail($id);
    }

    // Edit
    public function edit($id)
    {
        //
    }

    // Update
    public function update(Request $request, $id)
    {
        //
        $company = Company::findOrFail($id);
        $company->update($request->all());
    }

    // Destroy
    public function destroy($id)
    {
        //
        $company = Company::findOrFail($id);
        $company->delete();
    }
}