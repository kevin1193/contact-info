<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/07/2018
 * Time: 10:45 AM
 */

namespace App\Modules\Contact\Models;

use App\Essentials\Abstracts\AbstractModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends AbstractModel
{
    use SoftDeletes;

    protected $resourceName = 'Contact';

    protected $table = 'contacts';

    protected $fillable = [
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'country',
        'city',
        'state',
        'zip'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
