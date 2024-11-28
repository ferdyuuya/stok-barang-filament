<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function stockLogs()
    {
        return $this->hasMany(StockLog::class);
    }

    
}
