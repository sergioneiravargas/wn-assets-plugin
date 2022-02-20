<?php

namespace Butils\Assets\Models;

use \Winter\Storm\Database\Model;
use Winter\Storm\Database\Traits\Validation;
use Winter\Storm\Database\Traits\Sortable;

/**
 * Model
 */
class Asset extends Model
{
    use Validation;
    use Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'butils_assets_asset';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    protected $jsonable = [
        'images'
    ];

    public $belongsTo = [
        'category' => ['Butils\Assets\Models\Category'],
    ];

    public function beforeCreate()
    {
        $count = Asset::all()->count();
        $this->sort_order = ++$count;
    }
}
