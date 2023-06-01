<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_message',
        'status',

    ];
}
