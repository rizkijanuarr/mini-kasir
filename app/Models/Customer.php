<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
    * GUARDED ATTRIBUTES
    */
    protected $guarded = [];

    /**
    * ONE TO MANY
    * TABLE TRANSACTIONS
    * $table->foreignId('customer_id')->references('id')->on('customers')->cascadeOnDelete();
    */
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
