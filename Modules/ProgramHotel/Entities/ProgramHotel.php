<?php

namespace Modules\ProgramHotel\Entities;

use Modules\City\Entities\City;
use Modules\Hotel\Entities\Hotel;
use Modules\Program\Entities\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'city_id',
        'hotel_id',
        'residence_type',
        'num_of_days'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
