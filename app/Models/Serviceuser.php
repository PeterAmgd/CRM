<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Serviceuser extends Model
{
    use HasFactory;
    protected $fillable = [
            'home_office_ref',
            'legal_status',
            'assessment_method',
            'assessor_name',
            'title',
            'first_name',
            'sur_name',
            'address',
            'phone_number',
            'postal_code',
            'ethnicity',
            'language',
            'is_interpreter_required',
            'dof',
            'nino',
            'gender',
            'marital_status',
            'spouse_in_uk',
            'religion',
            'total_no_in_house',
            'is_agree',
            'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
