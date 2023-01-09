<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getActive(){
        return  $this -> status  == 0 ?  'غير مفعل'   : 'مفعل لروئته' ;
    }
}
