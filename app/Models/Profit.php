<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Profit extends Model
{
    use HasFactory;

    /**
    * GUARDED ATTRIBUTES
    */
    protected $guarded = [];

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

    /**
     * transaction
     *
     * @return void
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

}
