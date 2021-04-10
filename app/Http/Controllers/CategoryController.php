<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{

    
    
        public function index() {
            $data = DB::table('categories')->get();
            return view('admin.file')->with('data', $data);
        }

        public function GetSubCatAgainstMainCatEdit($id){
            echo json_encode(DB::table('subcategories')->where('category_id', $id)->get());
        }
    }


