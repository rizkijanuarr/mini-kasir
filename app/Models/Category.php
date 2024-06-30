<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends Model
{
    use HasFactory;

    /**
    * GUARDED ATTRIBUTES
    */
    protected $guarded = [];

    /**
    * IMAGE CAST
    * TODO
    * use Illuminate\Database\Eloquent\Casts\Attribute;
    * Pastikan kode diatas sudah di import!
    */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => url('/storage/categories/' . $value),
        );
    }

     /**
     * products
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
