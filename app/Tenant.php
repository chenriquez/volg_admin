<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cas_tenant';

    protected $primaryKey = 'id_tenant';


}
