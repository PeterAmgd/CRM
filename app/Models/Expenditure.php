<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;

    protected $fillable = [
           'rent',
           'mortgage',
           'Gas',
           'Electricity',
           'Water',
           'Council_Tax',
           'insurance',
           'Telephone',
           'Mobile',
           'TV_Licence',
           'Broadband',
           'Sky_package',
           'Credit_card',
           'Store_Cards',
           'Food',
           'Clothing',
           'Transport',
           'Loans',
           'Car_Payment',
           'Car_insurance',
           'Fuel',
           'Bank',
           'Solicitors',
           'Family_aboard',
           'other',
           'serviceuser_id',
    ];
}
