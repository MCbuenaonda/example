<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBusiness;
use App\Http\Requests\UpdateBusiness;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $businesses = Business::orderBy('id')->paginate(5);
        return view('businesses.index', ['businesses' => $businesses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('businesses.create', [ 'business' => new Business]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusiness $request) {
        $requestData = $request->validated();
        Business::create($requestData);
        return redirect()->action([BusinessController::class, 'index'])->with('status', 'Data saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business) {
        return view('businesses.show', [ 'business' => $business]);
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit(Business $business) {
        return view('businesses.edit', [ 'business' => $business]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusiness $request, Business $business) {
        $requestData = $request->validated();
        $business->update($requestData);
        return redirect()->action([BusinessController::class, 'index'])->with('status', 'Data updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business) {
        $business->delete();
        return redirect()->action([BusinessController::class, 'index'])->with('status', 'Data deteted!');
    }
}
