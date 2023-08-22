<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books'; // this is the table name
    protected $fillable = ['hotel_id', 'customer_id']; // these are the fields that can be filled
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
