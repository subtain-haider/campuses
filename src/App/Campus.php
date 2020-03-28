<?php

namespace Sibtain\Campuses\App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\App\Traits\TableCache;

class Campus extends Model
{
	use TableCache;

    protected $guarded = [];
}
