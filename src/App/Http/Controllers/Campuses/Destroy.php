<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Campus;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Campus $campus)
    {
        $campus->delete();

        return [
            'message' => __('The campus was successfully deleted'),
            'redirect' => 'campuses.index',
        ];
    }
}
