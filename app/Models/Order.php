<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";
    protected $fillable = ['id', 'member_id', 'date', 'status', 'total_amount', 'shipping_name', 'shipping_mobile', 'shipping_email', 'shipping_address', 'payment_term', 'staff_id', 'delivered_date', 'shipping_fee'];
}
