<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'id', 'cat_name', 'cat_desc',
    ];
    protected $hidden = [
        'created_at' , 'updated_at'
    ];
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
