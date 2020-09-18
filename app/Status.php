<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'status';

    static public function findStatusByName($name)
    {
    	$C_name = ucfirst($name);
    	
    	$result = self::where('name','LIKE BINARY','%'.$C_name.'%')->first();

    	return $result;
    }

    static public function new($data)
    {
    	return self::insert($data);
    }
}
