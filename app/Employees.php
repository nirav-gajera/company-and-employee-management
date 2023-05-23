<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'Employees';
    protected $primaryKey = 'id';
    protected $foreignkey = 'companies_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'companies_id',
        'email',
        'phone',
    ];

    public function companies()
    {
        return $this->belongsTo(Companies::class);
    }
}
