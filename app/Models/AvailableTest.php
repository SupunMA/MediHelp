<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'AvailableTestName', 
        'AvailableTestRange',
        'AvailableTestCost'
    ];
    
    
    protected $primaryKey = 'tlid';
}
