<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\File;
use Illuminate\Support\Facades\DB;

class FileuploadController extends Controller
{
    public function storecategory(Request $request){

        $request->validate([
            'categoryname' => 'required',
        ]);
        $task=new Category([

            'categoryname'=>$request->get('categoryname'),

        ]);
        $task->save();
        return redirect()->back()->with('message', 'Category Successfully added!');

    }
    public function storesubcategory(Request $request){

        $request->validate([
            'category_id' => 'required',
            'subcategoryname' => 'required',

        ]);
        $task=new Subcategory([

            'category_id'=>$request->get('category_id'),
            'subcategoryname'=>$request->get('subcategoryname'),

        ]);
        $task->save();
        return redirect()->back()->with('message', 'Subcategory successfully added!');

    }
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'filename' => 'required',
            'filedescription' => 'required',
            'fileimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

                    $imagename="";
            if($request->fileimage){
            $imagename= time().'.'.$request->fileimage->getClientOriginalExtension();
            $request->fileimage->move(public_path('images'),$imagename);
            }
                        $signature="";
            if ($request->file){
            $signature= time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('files'),$signature);
            }
            $Add= new File();
            $Add->category_id=$request->category_id;
            $Add->subcategory_id=$request->subcategory_id;
            $Add->filename=$request->filename;
            $Add->filedescription=$request->filedescription;
            $Add->amount=$request->amount;
            $Add->file=$signature;
            $Add->fileimage=$imagename;
            if($Add->save()){
            return back()->with('message','Successfully File uploaded ');}
            else{
            return back()->with('message','please try again carefully');

        }





    }
    public function managefile(){


              $users = DB::table('files')
            ->join('categories', 'files.category_id', '=', 'categories.id')
            ->join('subcategories', 'files.subcategory_id', '=', 'subcategories.id')
            ->select('files.*','categories.categoryname','subcategories.subcategoryname')
            ->get();
              return view('admin.managefile')->with('users',$users);
}
     public function fetch(){
        $users = DB::table('files')
        ->join('categories', 'files.category_id', '=', 'categories.id')
        ->join('subcategories', 'files.subcategory_id', '=', 'subcategories.id')
        ->select('files.*','categories.categoryname','subcategories.subcategoryname')
        ->get();
          return view('home1')->with('users',$users);
     }
}


