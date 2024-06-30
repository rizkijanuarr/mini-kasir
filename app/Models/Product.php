<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
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
            get: fn ($value) => url('/storage/products/' . $value),
        );
    }

    /**
     * category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
