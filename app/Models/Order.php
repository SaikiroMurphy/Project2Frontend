<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = ['total', 'field_id', 'time_id', 'admin_id', 'customer_id', 'status_id'];

    // Lấy khoá ngoại type_id
    public function fields() {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }

    public function times() {
        return $this->belongsTo(Time::class, 'time_id', 'id');
    }

    public function admins() {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function customers() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function statuses() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
