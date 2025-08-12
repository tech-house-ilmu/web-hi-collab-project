<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HiOpportunity extends Model
{
     use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'slug', 'category'
    ];

    // Relasi ke masing-masing kategori (optional bisa null)
    public function internship()
    {
        return $this->hasOne(OppInternship::class);
    }

    public function volunteer()
    {
        return $this->hasOne(OppVolunteer::class);
    }

    public function competition()
    {
        return $this->hasOne(OppCompetition::class);
    }

    public function exchange()
    {
        return $this->hasOne(OppExchange::class);
    }

    public function scholarship()
    {
        return $this->hasOne(OppScholarship::class);
    }

    // Relasi ke Section
    public function sections()
    {
        return $this->hasMany(HiOpportunitySection::class);
    }
}
