<?php

namespace Sibtain\Campuses\App\Http\Controllers\Campuses;

use Sibtain\Campuses\App\Campus;
use Illuminate\Routing\Controller;
use Sibtain\Campuses\App\Http\Requests\ValidateCampusRequest;

class Store extends Controller
{
    public function __invoke(ValidateCampusRequest $request, Campus $campus)
    {
        $campus->fill($request->validated())->save();

        return [
            'message' => __('The campus was successfully created'),
            'redirect' => 'campuses.edit',
            'param' => ['campus' => $campus->id],
        ];
    }
}
