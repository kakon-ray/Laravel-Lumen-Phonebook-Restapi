<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneBookDetails extends Model
{
    protected $table = 'phone_book_details';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
