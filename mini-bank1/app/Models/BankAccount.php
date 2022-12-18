<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    //
    protected $fillable = [
        'bassls', 'user_id', 'companie_id', 'number_account'
    ];
}
