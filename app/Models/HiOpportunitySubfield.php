<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HiOpportunitySubfield extends Model
{
    use HasFactory;

    protected $fillable = [
        'hi_opportunity_section_id', 'label', 'value', 'order',
    ];

    public function section()
    {
        return $this->belongsTo(HiOpportunitySection::class, 'hi_opportunity_section_id');
    }
}
