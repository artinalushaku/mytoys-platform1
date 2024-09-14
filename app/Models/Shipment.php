<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $table = 'shippings';

    protected $fillable = [
        'order_id',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'phone_number',
        'shipping_method',
        'tracking_number',
        'status',
        // Add more fields if necessary
    ];

    // Define the relationship with the Order model
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
