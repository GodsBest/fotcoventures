<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Order extends Eloquent 
{

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

}