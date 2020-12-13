<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['emp_name', 'emp_address', 'company_id'];
    # Employee has one company
    public function Company() {
        return $this->belongsTo('App\Company');
    }
}
