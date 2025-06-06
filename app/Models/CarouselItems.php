<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselItems extends Model
{
    //The table associated with the model

    protected $table = 'carousel_items';

    //The primary key associated with the table
    protected $primaryKey = 'carousel_item_id';



    //The attributes that are mass assignable
    protected $fillable = [
        'carousel_name',
        'image_path',
        'description',
        'user_id',
    ] ;
}
