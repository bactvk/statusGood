<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'status';

    static public function findStatusByName($name)
    {
    	$result = self::where('name','like','%'.$name.'%')->first();

    	return $result;
    }
}
