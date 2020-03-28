<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Campus;
use Illuminate\Routing\Controller;
use Sibtain\Campuses\App\Forms\Builders\CampusForm;

class Edit extends Controller
{
    public function __invoke(Campus $campus, CampusForm $form)
    {
        return ['form' => $form->edit($campus)];
    }
}
