<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function stockLogs()
    {
        return $this->hasMany(StockLog::class);
    }
}
