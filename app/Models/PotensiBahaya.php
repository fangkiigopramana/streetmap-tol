<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PotensiBahaya extends Model
{
    protected $guarded = ['id'];

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id', 'id');
    }

    public function jenisInfrastruktur(): BelongsTo
    {
        return $this->belongsTo(JenisInfrastruktur::class, 'infrastruktur_id', 'id');
    }

    public function riskLevel(): BelongsTo
    {
        return $this->belongsTo(RiskLevel::class, 'risk_level_id', 'id');
    }
}
