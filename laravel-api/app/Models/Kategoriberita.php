<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Kategoriberita extends Model
{
    use HasFactory;
	protected $table = 'kategoriberita';
    protected $fillable = [
        'kategori', 'slug'
    ];

    public function beritas()
    {
        return $this->hasMany(Berita::class);
    }

}