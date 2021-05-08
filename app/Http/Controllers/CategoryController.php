<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;

class CategoryController extends Controller
{
    public function category() {
        $obj = new Category();
        $category = $obj->pluck('category_name','category_id');
        
        return view('category', ['category' => $category]);
    }
}
