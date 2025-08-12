<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HiOpportunitySection extends Model
{
    use HasFactory;

    protected $fillable = [
        'hi_opportunity_id', 'section_title', 'order',
    ];

    public function hiOpportunity()
    {
        return $this->belongsTo(HiOpportunity::class);
    }

    public function subfields()
    {
        return $this->hasMany(HiOpportunitySubfield::class);
    }
}
