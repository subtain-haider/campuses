<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Campus;
use Illuminate\Routing\Controller;
use Sibtain\Campuses\App\Http\Requests\ValidateCampusRequest;

class Update extends Controller
{
    public function __invoke(ValidateCampusRequest $request, Campus $campus)
    {
        $campus->update($request->validated());

        return ['message' => __('The campus was successfully updated')];
    }
}
