<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Galerifoto extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     * @var array
     */
    protected $table = 'galerifoto';
    protected $fillable = [
        'kategori_id',
        'ket',
        'foto'
    ];

    /**IMAGE
     * 
     * @return attribute
     */
         
    
    protected function foto() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/strorage/galerifoto/' ,$value)  
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
