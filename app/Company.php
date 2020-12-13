<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['co_name', 'co_address'];
    # Company has many employees
    public function Employees() {
        return $this->hasMany('App\Employee');
    }
}
