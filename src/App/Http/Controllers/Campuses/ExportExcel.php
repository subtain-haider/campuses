<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Tables\Builders\CampusTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = CampusTable::class;
}
