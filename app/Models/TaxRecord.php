<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxRecord extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];

    protected function serializeDate(\DateTimeInterface $date): ?string
    {

        return $date instanceof \DateTimeImmutable ? CarbonImmutable::instance($date)->toJSON() : Carbon::instance($date)->toISOString(true);
    }
}
