<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class whatsappController extends Controller
{
    public function whatsappMessage(Request $request){
        // dd($request);
        $message= preg_replace( "/\r|\n/", " ", $request->message );
        $name = $request->name;
        $myPhone = $request->myPhone;
        $url ="https://web.whatsapp.com/send?phone=".$myPhone."&text=*This Message From Queen Land Website*%0a*My Name* : ".$name."%0a*Message* : ".$message;
        return Redirect::to($url);
    }
}
