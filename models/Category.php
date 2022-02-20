<?php

namespace Sntools\Assets\Models;

use Winter\Storm\Database\Model;
use Winter\Storm\Database\Traits\Validation;

/**
 * Model
 */
class Category extends Model
{
    use Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'sntools_assets_category';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    /**
     * @var array Attached elements
     */
    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $hasMany = [
        'assets' => ['Sntools\Assets\Models\Asset', 'delete' => true],
    ];
}
