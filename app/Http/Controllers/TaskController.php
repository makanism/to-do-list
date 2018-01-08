<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller{
    public function __construct(){
        //security check apakah user sudah login aap belum
        //jika belum akan di drag ke login page
        $this->middleware('auth');
    }
    function index(){
        $task = DB::select("select * from to_do");
        $data =[ 
            'to_do'=>$task
        ];
        //view di bawah di maksud buat folder di resources/view bernama Task lalu file index.
        return view('task/index',$data);
    }

    function details($task_id, Request $request){
        $task= DB::select('SELECT*FROM to_do where id=?',[$task_id]);
        //cek data
        //dd($product)
        //var_dump($products);
        //ambil first element
        $task=reset($task);
        $data = [
            'to_do'=>$task
        ];
        return view('task/details',$data);
    }

    function add(Request $request){
        $data = [
            'success'=>false
        ];
        if ($request->isMethod('post')){
            //validasi
            $request->validate([
                'task_name'=>'required|alpha', 
                //alpha hrs aphabet, numeric harus angka
            ]);
            $taskName = $request->input('task_name');
            $returnValue = DB::insert('insert into to_do(Name) values(?)',
            [$taskName]);

         if($returnValue){
            $data = [
                'success'=>1
            ];
            }
        }
        return view('task/add',$data);
    }

    function edit($product_id, Request $request){
        $product= DB::select('SELECT*FROM products where id=?',[$product_id]);
        $success = false;
        if($request->isMethod('post')){
            $productName = $request->input('product_name');
            $productPrice = $request->input('product_price');
            $rating = $request->input('rating');

            $returnValue = DB::update('UPDATE products SET name=?, price=?, rating=? WHERE id=?',
            [$productName, $productPrice, $rating, $product_id]);
            if($returnValue){
                $success= true;
            }
        }
        $product=reset($product);
        $data = [
            'product'=>$product,
            'success'=>$success
        ];
        return view('product/edit',$data);
    }

    function delete(Request $request){
        $productId = $request->input('product_id');
        $returnValue = DB::delete('DELETE from products WHERE id=?',[$productId]);
        if($returnValue){
            return "Data Deleted";
        }else{
            return "error";
        }
    }
}