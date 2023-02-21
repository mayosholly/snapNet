<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CitizenResource;
use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index()
    {
        $citizen = Citizen::get();
        return CitizenResource::collection(Citizen::paginate());
    }

    public function show(Citizen $citizen)
    {
        return new CitizenResource($citizen);
    }
}
