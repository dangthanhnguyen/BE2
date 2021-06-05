<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;
use App\Models\Companies;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function category(Request $rq) {
    //     $value = $rq->get('search');
    //     $id = $rq->get('category_id');

    //     $obj = new Category();
    //     $obj_companies = new Companies();
    //     $category = $obj->pluck('category_name','category_id');

    //     $companies = $obj_companies->search($value, $id);
        
        
    //     return view('category', ['category' => $category, 'search' => $companies]);
    // }
}
