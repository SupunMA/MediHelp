<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['mobile', 'dob', 'doctorName', 'gender', 'userID'];


    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }
}
