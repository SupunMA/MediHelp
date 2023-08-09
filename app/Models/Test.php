<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'pid', 
        'tlid',
        'date',
        'doctorName',
        'done'
    
    ];
    
    
    protected $primaryKey = 'tid';
}
