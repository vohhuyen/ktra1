<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function getIndex(){
        $product = Product::all();
        return view('page.trangchu', compact('product'));
    }
    public function getDetail(Request $request){
        $sanpham = Product::where('id',$request->id)->first();
        return view('page.chitiet_sanpham',compact('sanpham'));
    }
    public function search(Request $request) {
        $query = $request->input('name'); // Lấy từ khóa tìm kiếm từ input
        $pr = Product::where('name', 'like', '%' . $query . '%')->get();
    
        return view('page.search_sanpham', ['pr' => $pr, 'query' => $query]);
    }
}
