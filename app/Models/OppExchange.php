<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OppExchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'hi_opportunity_id',
        'img_logo',
        'img_poster',
        'category', // disimpan dalam bentuk JSON multiselect
        'type',
        'deadline',
        'link_apply',
    ];

    public function hiOpportunity()
    {
        return $this->belongsTo(HiOpportunity::class);
    }
}
