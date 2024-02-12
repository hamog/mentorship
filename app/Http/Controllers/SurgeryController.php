<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurgeryStoreRequest;
use App\Models\DoctorRole;
use App\Models\Operation;
use App\Models\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    public function index()
    {
        $surgeries = Surgery::query()
            ->latest('id')
            ->paginate();

        return view('admin.surgery.index', compact('surgeries'));
    }

    public function create()
    {
        $doctorRoles = DoctorRole::query()
            ->with('doctors')
            ->where('status', 1)
            ->get(['id', 'title', 'required']);

        $operations = Operation::query()
            //->where('status', 1)
            ->pluck('name', 'id');

        return view('admin.surgery.create', compact('doctorRoles', 'operations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SurgeryStoreRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
