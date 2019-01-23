<?php

namespace App\Http\Controllers;
use App\Product as Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   { 
      return view('products'); 
   }

   public function search(Request $request)
   {
     
      if($request->ajax()){
   
        $output="";
        $products = Product::where('title','LIKE','%'.$request->search."%")->get();
        
        if($products){
     
           foreach ($products as  $product) {
           
            $output.='<tr>'.
            
            '<td>'.$product->id.'</td>'.
            
            '<td>'.$product->title.'</td>'.
            
            '<td>'.$product->description.'</td>'.
            
            '<td>'.$product->price.'</td>'.
            
            '</tr>';
        
           }
           return $output;  

        }
  
      }

   }

   
}
