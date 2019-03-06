<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Sms extends Model
{
    use SoftDeletes;

    public $table = 'smss';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cell_no',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cell_no' => 'integer',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cell_no' => 'required',
        'message' => 'required'
    ];
}
