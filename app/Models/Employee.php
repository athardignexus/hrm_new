<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'guardian_name',
        'dob',
        'gender',
        'alternate_contact',
        'id_proof',
        'id_proof_no',
        'account_holder_name',
        'account_no',
        'bank_name',
        'ifsc_code',
        'tax_pay_id',
        'basic_pay',
        'pancard'
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function emp_allowance()
    {
        return $this->hasMany(EmpAllowanceDetails::class,'emp_id');
    }
    public function getEmpidAttribute()
    {
        return str_pad($this->id,'5',"0",STR_PAD_LEFT);
    }

}
