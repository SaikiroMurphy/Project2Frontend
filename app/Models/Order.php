<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
//    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = ['order_note', 'admin_id', 'customer_id', 'status', 'date'];

    public function admins() {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function customers() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

}
