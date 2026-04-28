<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Camp;

class CampBenefit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'camp_id',
        'name',
    ];

    public function camp(): BelongsTo{
        return $this->belongsTo(Camp::class);
    }

}
