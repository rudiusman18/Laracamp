<?php

namespace App\Models;

use App\Models\CampBenefit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Camp extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'price',
    ];

    public function campBenefits() : HasMany{
        return $this->HasMany(CampBenefit::class);
    }
}
