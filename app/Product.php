<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description'];/*Responsável pela permissão de inclusão de dados em massa*/
}
