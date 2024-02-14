<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurgeryStoreRequest;
use App\Http\Requests\SurgeryUpdateRequest;
use App\Models\DoctorRole;
use App\Models\Insurance;
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
            ->select(['id', 'title', 'required'])
            ->get();

        $operations = Operation::query()
            //->where('status', 1)
            ->pluck('name', 'id');

        $insurances = Insurance::query()->select(['id', 'name', 'type'])->get();
        $basicInsurances = $insurances->where('type', 'basic');
        $suppInsurances = $insurances->where('type', 'supplementary');

        return view('admin.surgery.create', compact('doctorRoles', 'operations', 'basicInsurances', 'suppInsurances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SurgeryStoreRequest $request)
    {
        $surgery = Surgery::query()->create($request->validated());
        //attach operations
        $attachOperations = [];
        foreach ($request->input('operations') as $operationId) {
            $operation = Operation::find($operationId);
            $attachOperations[$operationId] = ['amount' => $operation->price];
        }
        $surgery->operations()->attach($attachOperations);

        //attach doctors
        $attachDoctors = [];
        foreach ($request->input('doctors') as $roleId => $doctorId) {
            if ($doctorId) {
                $attachDoctors[$doctorId] = ['doctor_role_id' => $roleId];
            }
        }
        $surgery->doctors()->attach($attachDoctors);

        return redirect()->route('admin.surgeries.index');
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
    public function edit(Surgery $surgery)
    {
        $doctorRoles = DoctorRole::query()
            ->with('doctors')
            ->where('status', 1)
            ->get(['id', 'title', 'required']);

        $operations = Operation::query()
            //->where('status', 1)
            ->pluck('name', 'id');

        $insurances = Insurance::query()->select(['id', 'name', 'type'])->get();
        $basicInsurances = $insurances->where('type', 'basic');
        $suppInsurances = $insurances->where('type', 'supplementary');

        return view('admin.surgery.edit', compact('doctorRoles', 'operations', 'surgery', 'basicInsurances', 'suppInsurances'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SurgeryUpdateRequest $request, Surgery $surgery)
    {
        $surgery->update($request->validated());
        //attach operations
        $syncOperations = [];
        foreach ($request->input('operations') as $operationId) {
            $operation = Operation::find($operationId);
            $syncOperations[$operationId] = ['amount' => $operation->price];
        }
        $surgery->operations()->sync($syncOperations);

        //attach doctors
        $syncDoctors = [];
        foreach ($request->input('doctors') as $roleId => $doctorId) {
            if ($doctorId) {
                $syncDoctors[$doctorId] = ['doctor_role_id' => $roleId];
            }
        }
        $surgery->doctors()->sync($syncDoctors);

        return redirect()->route('admin.surgeries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surgery $surgery)
    {
        $surgery->delete();
        $surgery->operations()->detach();
        $surgery->doctors()->detach();

        return redirect()->route('admin.surgeries.index');
    }
}
