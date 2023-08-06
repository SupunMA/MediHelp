<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $primaryKey = 'planID';
    protected $table = 'plan';

    protected $fillable = [
        'planName',
        'planPrice',
        'planMonth'
    ];
}
