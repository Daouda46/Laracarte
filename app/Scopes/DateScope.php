<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateScopable
{
    public function scopeTwoMonthsOld(Build $query)
    {
        $query->where('created_at', '<=', now()->subMonths(2));
    }
}