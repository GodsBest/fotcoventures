<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Customer extends Eloquent 
{

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

}