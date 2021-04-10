<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\User;
use App\Models\Message;
use App\Models\File;
use DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function category()
    {
        return view('admin.category');
    }
    public function managecategory()
    {
       
        $users = Category::all();
        return view('admin.managecategory',compact('users'));
    }
    public function subcategory()
    {
        $users = Category::all();
        return view('admin.subcategory',compact('users'));
      
    }
    public function managesubcategory()
    { 
        $users = DB::table('subcategories')
        ->join('categories', 'subcategories.category_id', '=', 'categories.id')
        ->select('subcategories.*','categories.categoryname')
        ->get();
          return view('admin.managesubcategory')->with('users',$users);
    }
    public function upload()
   
    {
        $data = DB::table('categories')->get();
        return view('admin.upload')->with('data', $data);
       
    }
    public function user()
    {
        $users = User::all();
        return view('admin.user',compact('users'));
    }
    public function download()
    {
        return view('admin.download');
    }
    public function categorydelete($id){
        $users=Category::find($id);
        $users->delete();
        return back();
    }
    public function subcategorydelete($id){
        $users=Subcategory::find($id);
        $users->delete();
        return back();
    }
    public function categoryedit($id){
        $users=Category::find($id);
       
        return view('admin.categoryedit',compact('users','id'));
    }
    public function subcategoryedit(){
        $users=Subcategory::join('categories', 'categories.id', '=', 'subcategories.category_id')
                            ->get(['subcategories.*', 'categories.categoryname']);
                            
                        
        return view('admin.subcategoryedit',compact('users'));
    }
    public function updatecategory(Request $request){
           
        $users=Category::find($request->id);   
        $users->categoryname=$request->get('categoryname');
       
       
        
        $users->save();
     

       
      return back();
   
    }
    public function updatesubcategory(Request $request){
           
        $users=Subcategory::find($request->id);   
        $users->subcategoryname=$request->get('subcategoryname');
       
       
        
        $users->save();
     

        $users = Subcategory::all();
        return view('admin.managecategory',compact('users'));
   
    }
    public function message(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $task=new Message([
        
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'subject'=>$request->get('subject'),
            'message'=>$request->get('message'),
            
        ]);
        $task->save();
        return redirect()->back()->with('message', 'Message sent');

    }
    public function usermessage(){
        $users=Message::all();
        return view('admin.usermessage',compact('users'));

    }
    public function filedelete($id){
        $users=File::find($id);
        $users->delete();
        return back();
    }
}