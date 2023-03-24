<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'wage',
        'Self-Employment',
        'income_support',
        'JSA',
        'ESA',
        'Universal_Credit',
        'Pension_Credit',
        'Tax-Credit',
        'Child_Benefit',
        'other_Charities',
        'Family_support',
        'other1',
        'other2',
        'serviceuser_id',
        'partner_id'
    ];
}
