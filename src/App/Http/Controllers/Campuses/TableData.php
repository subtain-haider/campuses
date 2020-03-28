<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Tables\Builders\CampusTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = CampusTable::class;
}
