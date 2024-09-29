<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\Barangay\BarangayRequest;
use App\Models\Barangay;
use App\Models\Municipality;

class BarangayController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            return DataTables::of(Barangay::with('municipality')->get())
                   ->addIndexColumn()
                   ->addColumn('actions', function($row) {

                    $route_edit = route('admin.barangays.edit', $row);

                    $btn = "
                        <div class='dropdown'>
                            <a class='btn btn-sm btn-icon-only ' href='#' role='button' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <i class='fas fa-ellipsis-v'></i>
                            </a>
                            <div class='dropdown-menu dropdown-menu-right dropdown-menu-arrow'>

                                <a class='dropdown-item' href='$route_edit'>Edit</a>

                                <a class='dropdown-item' href='javascript:void(0)' onclick='c_destroy($row->id,`admin.barangays.destroy`,`.barangays`)'>Delete</a>
                            </div>
                        </div> ";
    
                    return $btn;
    
                   })
                   ->rawColumns(['actions'])
                   ->make(true);
        }

        return view('admin.barangay.index');
    }

    public function create()
    {
        return view('admin.barangay.create', [
            'municipalities' => Municipality::pluck('name', 'id'),
        ]);
    }

    public function store(BarangayRequest $request)
    {
        Barangay::create($request->validated());

        return to_route('admin.barangays.index')->with(['success' => 'Barangay Added Successfully']);
    }
    
    public function edit(barangay $barangay)
    {
        return view('admin.barangay.edit', [
            'barangay' => $barangay,
            'municipalities' => Municipality::pluck('name', 'id'),
        ]);
    }

    public function update(BarangayRequest $request, Barangay $barangay)
    {
        $barangay->update($request->validated());

       return to_route('admin.barangays.index')->with(['success' => 'Barangay Updated Successfully']);
    }
    public function destroy(Barangay $barangay)
    {
        $barangay->delete();

       return $this->res(['success' => 'Barangay Deleted Successfully']);
    }
}