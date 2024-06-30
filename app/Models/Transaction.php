<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Transaction extends Model
{
    use HasFactory;

    /**
    * GUARDED ATTRIBUTES
    */
    protected $guarded = [];

    /**
     * details
     *
     * @return void
     */
    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

     /**
     * customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * cashier
     *
     * @return void
     */
    public function cashier()
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }

    /**
     * profits
     *
     * @return void
     */
    public function profits()
    {
        return $this->hasMany(Profit::class);
    }

    /**
    * CREATED AT
    * TODO
    * use Illuminate\Database\Eloquent\Casts\Attribute; dan use Carbon\Carbon;
    * Pastikan kode diatas sudah di import!
    */
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y H:i:s'),
        );
    }
}
