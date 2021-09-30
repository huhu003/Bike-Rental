<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
   
    protected $primaryKey = 'rental_id';

    protected $table = 'payments';

    protected $fillable = [
        'user_id',
        'bike_id',
        'rent_start_date',
        'rent_end_date',
        'total_amount',
        'rent_status',
        'remarks',
    ];
}
