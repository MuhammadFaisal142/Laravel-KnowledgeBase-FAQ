<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')
            ->with(['articles' => function ($query) {
                $query->orderBy('id', 'desc');
            }])
            ->paginate(10);

        return view('index', compact('categories'));
    }
    public function home()
    {
        $population_data = DB::table('districts_all_data_list')->get();
        $provinces_all_data = DB::table('provinces_all_data_list')->get();
        $provinces_all_data_list_2007_2017 = DB::table('provinces_all_data_list_2007_2017')->get();
        return view('Home.home', compact('population_data','provinces_all_data','provinces_all_data_list_2007_2017'));
    }
    public function pyramid()
    {
        $population_data = DB::table('districts_all_data_list')->get();
        $provinces_all_data = DB::table('provinces_all_data_list')->get();

        return view('Home.pyramid', compact('population_data', 'provinces_all_data'));
    }
    public function tables()
    {
        $population_data = DB::table('districts_all_data_list')->get();
        // $population_Districts = DB::table('population_district')->get();
        return view('Home.tables', compact('population_data'));
    }


    public function housing()
    {
        return view('Home.threeChart');
    }
    public function testpic()
    {
        return view('Home.test-pic');
    }
}
