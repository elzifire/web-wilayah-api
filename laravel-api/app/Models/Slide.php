<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $table = 'slide';
    protected $fillable = ['judul','file','published'
    ];

    /**IMAGE
     * 
     * @return attribute
     */
    protected function file(): Attribute
    {
        return Attribute::make(
            get: fn($value) => asset('/strorage/slide/' ,$value)  
        );
    }

    public static function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) =>\Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),);
    }

    public static  function updatedAt(): Attribute
    {
        return Attribute::make(
        get: fn($value) =>  \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
    }

}
