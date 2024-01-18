<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')
            ->with(['articles' => function($query) {
                $query->orderBy('id', 'desc');
            }])
            ->paginate(10);

        return view('index', compact('categories'));
    }
    public function test(){
        $population_data=DB::table('districts_all_data_list')->get();
        // $population_Districts = DB::table('population_district')->get();
        return view('Test.test', compact('population_data'));
    }
    public function housing(){
        return view('Test.threeChart');
    }
    public function testpic(){
        return view('Test.test-pic');
    }
}
