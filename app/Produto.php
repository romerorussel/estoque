<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Code

    protected $table = 'produtos';

    protected $guarded = ['id'];
}
