<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Tables\Builders\CampusTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = CampusTable::class;
}
