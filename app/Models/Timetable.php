<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'timetable';

    protected $fillable = [
        'clientID',
        'slotID',
        'date',
        'coachID',
        'review'
    ];
}