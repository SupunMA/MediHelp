<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'paymentID';
    protected $table = 'payments';

    protected $fillable = [
        'clientID',
        'planID',
        'payDate',
        'confirm'
    ];
}