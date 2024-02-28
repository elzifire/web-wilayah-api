<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Galerivideo extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     * @var array
     */
    protected $table = 'galerivideo';
    protected $fillable = [
        'judul',
        'cover',
        'embed',
        'ket'
    ];

    /**IMAGE
     * 
     * @return attribute
     */
    protected function image() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/strorage/galerivideo/' ,$value)  
        );
    }
    public static function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value)=> \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        ); 
            
    }

    public static function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value)=> \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
    }
}
