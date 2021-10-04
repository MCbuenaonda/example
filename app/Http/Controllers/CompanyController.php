<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompany;
use App\Http\Requests\UpdateCompany;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $companies = Company::orderBy('id')->paginate(5);
        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('companies.create', [ 'company' => new Company]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompany $request) {
        $requestData = $request->validated();
        Company::create($requestData);
        return redirect()->action([CompanyController::class, 'index'])->with('status', 'Data saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company) {
        return view('companies.show', [ 'company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit(Company $company) {
        return view('companies.edit', [ 'company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompany $request, Company $company) {
        $requestData = $request->validated();
        $company->update($requestData);
        return redirect()->action([CompanyController::class, 'index'])->with('status', 'Data updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company) {
        $company->delete();
        return redirect()->action([CompanyController::class, 'index'])->with('status', 'Data deteted!');
    }
}
