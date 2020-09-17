<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function home(Request $request)
    {
        
        $data = [
            'result' => '',
            'name' => ''
        ];

    	if($request->isMethod("POST")){
            $data = [
                'name' => $request->key_search
            ];

    		$content = Status::findStatusByName($data['name']);
    		if(!empty($content)){
    			$data['result'] = $content->content;
                
    		}
    	}
    	return view('frontend.status.index',$data);
    }
}
