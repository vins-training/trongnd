<?php

namespace Devdojo\Calculator;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table='news';
    protected $fillable = ['name', 'title','description'];
}
