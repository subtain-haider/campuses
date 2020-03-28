<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Campus;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Campus $campus)
    {
        return ['campus' => $campus];
    }
}
