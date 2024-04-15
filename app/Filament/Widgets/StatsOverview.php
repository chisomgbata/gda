<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected static ?int $sort = -3;
    protected static ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make('Courses', Course::count()),
            Stat::make('Users', User::count()),

        ];
    }
}
