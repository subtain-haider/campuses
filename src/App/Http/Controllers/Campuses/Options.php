<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Campus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Campus::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return Campus::query();
    //}
}
