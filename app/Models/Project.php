<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'project_code',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function stockLogs()
    {
        return $this->hasMany(StockLog::class);
    }


}
