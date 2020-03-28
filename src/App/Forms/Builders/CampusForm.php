<?php

namespace Sibtain\Campuses\App\Forms\Builders;

use Sibtain\Campuses\App\Campus;
use LaravelEnso\Forms\App\Services\Form;

class CampusForm
{
    protected const TemplatePath = __DIR__.'/../Templates/campus.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Campus $campus)
    {
        return $this->form->edit($campus);
    }
}
