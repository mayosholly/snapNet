<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCitizenRequest;
use App\Models\Citizen;
use App\Models\Ward;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $citizens = Citizen::where('full_name', 'like', '%' . $request->search . '%')
                ->latest()
                ->paginate(10)->withQueryString();
        } else {
            $citizens = Citizen::latest()->get();
        }
        return view(
            'admin/citizen/index',
            [
                'citizens' => $citizens
            ]
        );
    }

    public function create()
    {
        $wards = Ward::latest()->get();
        return view('admin/citizen/create', [
            'wards' => $wards
        ]);
    }

    public function store(StoreCitizenRequest $request)
    {
        $citizen = new Citizen($request->validated());
        $citizen->save();
        return back()->with('success', 'Citizen Successfully Added');
    }

    public function show(Citizen $citizen)
    {
        return view(
            'admin/citizen/show',
            [
                'citizen' => $citizen
            ]
        );
    }
}
