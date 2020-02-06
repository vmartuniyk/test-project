<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Contact extends Model
{
   use Sortable;
    protected $fillable = [
        'id','isActive', 'age', 'eyeColor','eyeColor','name','gender','company','email','phone','address',
    ];
    public $sortable = ['id','isActive', 'age', 'eyeColor','eyeColor','name','gender','company','email','phone','address'];
}
