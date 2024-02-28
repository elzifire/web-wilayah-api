<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     * @var array
     */
    protected $table = 'banner';
    protected $fillable = [
        'kategori',
        'judul',
        'file',
        'url',
        'published'
    ];

    /**IMAGE
     * 
     * @return attribute
     */
    protected function file():Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/strorage/banner/' ,$value)  
        );
    }

    protected function url():Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/strorage/banner/' ,$value)  
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
