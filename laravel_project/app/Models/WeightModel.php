<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightModel extends Model
{
    use HasFactory;
	
	public $table = 'weight';
	public $primaryKey = 'id';
}
