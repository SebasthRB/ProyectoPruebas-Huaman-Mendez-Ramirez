<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Employee extends Model
{
    use HasFactory;

    /**
     * Mutador para asegurarse de que el campo 'first_name' se almacene en minúsculas.
     */
    protected function firstName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtolower($value),
        );
    }

    /**
     * Mutador para asegurarse de que el campo 'last_name' se almacene en minúsculas.
     */
    protected function lastName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtolower($value),
        );
    }
}
