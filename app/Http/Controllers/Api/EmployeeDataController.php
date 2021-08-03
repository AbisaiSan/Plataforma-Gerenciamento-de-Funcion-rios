<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use Illuminate\Http\Request;

class EmployeeDataController extends Controller
{
    public function countries(){
        $countries = Pais::all();

        return response()->json($countries);
    }
}
