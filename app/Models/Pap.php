<?php

namespace App\Models;

use App\Models\Scopes\PapScope;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pap extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuid;

    protected $fillable = [
        'strategy_id',
        'pap',
        'brief_description',
        'implementing_unit_id',
        'prexc_id',
        'commodity_id',
        'commodity_system_id',
        'location_id',
        'value_chain_segment_id',
        'indicator_id',
        'unit_of_measure',
        'unit_cost',
        'physical_target_2022',
        'physical_target_2023',
        'physical_target_2024',
        'physical_target_2025',
        'physical_target_2026',
        'physical_target_2027',
        'physical_target_2028',
        'physical_target_2029',
        'physical_target_2030',
        'submitted',
        'approved_regional',
        'approved_functional',
        'approved_national',
        'user_id',
    ];

    public function strategy()
    {
        return $this->belongsTo(Strategy::class);
    }

    public function implementing_unit()
    {
        return $this->belongsTo(ImplementingUnit::class);
    }

    public function prexc()
    {
        return $this->belongsTo(Prexc::class);
    }

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function commodity_system()
    {
        return $this->belongsTo(CommoditySystem::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function value_chain_segment()
    {
        return $this->belongsTo(ValueChainSegment::class);
    }

    public function indicator()
    {
        return $this->belongsTo(Indicator::class);
    }

    public function other_vc_segments()
    {
        return $this->belongsToMany(ValueChainSegment::class, 'pap_vc_segment', 'pap_id', 'vc_segment_id','id','id');
    }

    public function getTotalCostAttribute(): float|int
    {
        $sum = 0;

        $startYear = 2022;
        $currentYear = $startYear;

        while ($currentYear <= 2030) {
            $sum += $this->unit_cost * $this->{"physical_target_". $currentYear};
            $currentYear++;
        }

        return $sum;
    }
}
