<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForCampuses extends Migration
{
    protected $permissions = [
        ['name' => 'campuses.index', 'description' => 'Show index for campuses', 'is_default' => false],

        ['name' => 'campuses.create', 'description' => 'Create campus', 'is_default' => false],
        ['name' => 'campuses.store', 'description' => 'Store a new campus', 'is_default' => false],
        ['name' => 'campuses.show', 'description' => 'Show campus', 'is_default' => false],
        ['name' => 'campuses.edit', 'description' => 'Edit campus', 'is_default' => false],
        ['name' => 'campuses.update', 'description' => 'Update campus', 'is_default' => false],
        ['name' => 'campuses.destroy', 'description' => 'Delete campus', 'is_default' => false],
        ['name' => 'campuses.initTable', 'description' => 'Init table for campuses', 'is_default' => false],

        ['name' => 'campuses.tableData', 'description' => 'Get table data for campuses', 'is_default' => false],

        ['name' => 'campuses.exportExcel', 'description' => 'Export excel for campuses', 'is_default' => false],

        ['name' => 'campuses.options', 'description' => 'Get campus options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Campuses', 'icon' => 'cogs', 'route' => 'campuses.index', 'order_index' => 200, 'has_children' => false,
    ];

    protected $parentMenu = null;
}

