<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tweet
 * @package App\Models
 * @version November 29, 2016, 2:27 pm UTC
 */
class tweet extends Model
{
    use SoftDeletes;

    public $table = 'tweets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'body' => 'required'
    ];

    
}
