<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationApplication extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['elderly_date_born'];
    protected $table = 'registration_application';
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getElderlyDateBornAttribute($value)
    {
        // Check if the value is null or empty
        if (empty($value)) {
            return null;
        }

        // Convert the attribute to a Carbon date object
        $carbonDate = Carbon::parse($value);

        // Format the date and return
        return $carbonDate->format('m/d/Y');
    }
}
