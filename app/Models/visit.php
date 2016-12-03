<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class visit
 * @package App\Models
 * @version November 29, 2016, 6:12 pm UTC
 */
class visit extends Model
{
    use SoftDeletes;

    public $table = 'visits';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'date',
        'time',
        'complaint',
        'diagnoses',
        'patient_id',
        'visit_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
        'time' => 'integer',
        'complaint' => 'string',
        'diagnoses' => 'string',
        'patient_id' => 'integer',
        'visit_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'time' => 'required',
        'complaint' => 'required'
    ];

    
}
