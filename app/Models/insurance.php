<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    public function insPolicy()
    {
        return $this->hasOne(InsurancePolicy::class);
    }

    public function insDocument()
    {
        return $this->hasOne(InsuranceDocument::class);
    }
}
