<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Illuminate\Routing\Controller;
use Sibtain\Campuses\App\Forms\Builders\CampusForm;

class Create extends Controller
{
    public function __invoke(CampusForm $form)
    {
        return ['form' => $form->create()];
    }
}
