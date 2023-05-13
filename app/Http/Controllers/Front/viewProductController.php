<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewProductController extends Controller
{
    public function index($id){
        $searchPage =0;
        $product =Product::find($id);
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.view_product',compact('contactInfo','product','searchPage'));
    }
    public function autoComplete(Request $request){
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('products')
           ->where('ar_name', 'LIKE', "%{$query}%")
           ->get();

            $output = '<ul class="dropdown-menu search_ul_list" style="display:block; position:relative">';
            foreach($data as $row)
            {
             $output .= '
             <li class="search_li_list">'.$row->ar_name.'</li>
             ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function search(Request $request){
            $search = $request->input('search');
            $products = Product::query()->where('ar_name', 'LIKE', "%{$search}%")->get();
            $check =  count($products);
            $searchPage = 1;
            $contactInfo = ContactInfo::all()->first();
            if($check == 1){
                return view('frontend.pages.view_product', compact('products','contactInfo','searchPage'));
            }else{
                return view('frontend.pages.search_result', compact('products','check','contactInfo','searchPage','check'));
            }

        }

}
