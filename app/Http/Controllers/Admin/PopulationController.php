<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopulationController extends Controller
{
    public function index()
    {
        $population_Districts = DB::table('population_district')->get();
        return view('admin.sheets.population_district', compact('population_Districts'));
    }
}
