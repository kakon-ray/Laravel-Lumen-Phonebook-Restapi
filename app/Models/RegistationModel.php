<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistationModel extends Model
{
    protected $table = 'registation';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
