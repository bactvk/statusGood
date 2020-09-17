<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function home(Request $request)
    {
    	if($request->isMethod("POST")){
    		$name = $request->key_search;

    		$content = Status::findStatusByName($name);
    		dd($content);
    		if(!empty($content)){
    			$result = $content->content;
    			return redirect()->route('status-home')->with('result',$result);
    		}
    	}
    	return view('frontend.status.index');
    }
}
