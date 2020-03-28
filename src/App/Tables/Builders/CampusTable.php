<?php

namespace Sibtain\Campuses\App\Tables\Builders;

use Sibtain\Campuses\App\Campus;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class CampusTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/campuses.json';

    public function query(): Builder
    {
        return Campus::selectRaw('
            id,
            code,
            name,
            email,
            number,
            type,
            address,
            city,
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
