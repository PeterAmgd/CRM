<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $fillable = [
        'Gold',
        'Silver',
        'BankAccount1',
        'BankAccount2',
        'SavingAccount',
        'Cash_in_Hand',
        'Committee',
        'other_savings',
        'investments',
        'money_owned_to_you',
        'serviceuser_id',

    ];
}
