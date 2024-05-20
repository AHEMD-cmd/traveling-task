<?php

namespace Modules\Program\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ProgramHotel\Entities\ProgramHotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'level',
        'program_type',
        'description'
    ];
    public function programHotels()
    {
        return $this->hasMany(ProgramHotel::class);
    }
}
