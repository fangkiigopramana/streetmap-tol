<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiskLevel extends Model
{
    protected $fillable = ['name', 'color'];

    /**
     * Get the color attribute.
     *
     * @return string
     */
    public function getColorAttribute($value)
    {
        return $value ?: '#000000'; // Default to black if no color is set
    }
}
