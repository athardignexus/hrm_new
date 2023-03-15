<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    // const PRIMARYKEY = 'id';

    // protected $primaryKey = self::PRIMARYKEY;

    // public function setAckNoAttribute($value)
    // {
    //     $this->attributes['ack_no'] = 'Ack-' . $value->id;
    // }

    /**
     * Interact with the user's first name.
     */
    // protected function id(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => $value,
    //         set: fn (string $value) => 'Ack-' . $value,
    //     );
    // }

    public function insPolicy()
    {
        return $this->hasOne(InsurancePolicy::class);
    }

    public function insDocument()
    {
        return $this->hasOne(InsuranceDocument::class);
    }
}
