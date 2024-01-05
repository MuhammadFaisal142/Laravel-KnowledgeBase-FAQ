<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SheetsController extends Controller {
    public function population_District(){
        $population_Districts = DB::table('population_district')->get();
        return view('admin.sheets.population_district', compact('population_Districts'));
    }
    public function foreign_Population(){
        $foreign_Population = DB::table('foreign_population')->get();
        return view('admin.sheets.foreign_population', compact('foreign_Population'));
    }
    public function population_Density(){
        $population_Density = DB::table('population_density')->get();
        return view('admin.sheets.population_density', compact('population_Density'));

    }
    public function population_Growth(){
        $population_Growth = DB::table('population_growth')->get();
        return view('admin.sheets.population_growth', compact('population_Growth'));
    }
    public function population_Large_Groups_Age(){
        $pop_Large_Groups_Age = DB::table('population_large_groups_age')->get();
        return view('admin.sheets.population_large_groups_age', compact('pop_Large_Groups_Age'));
    }
}


