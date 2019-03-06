<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Soldbook extends Model
{
    use SoftDeletes;

    public $table = 'soldbooks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'profit',
        'seller_id',
        'buyer_id',
        'bookings_id',
        'form_No'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'profit' => 'integer',
        'seller_id' => 'integer',
        'buyer_id' => 'integer',
        'bookings_id' => 'integer',
        'form_No' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'profit' => 'required',
        'seller_id' => 'required',
        'buyer_id' => 'required',
        'bookings_id' => 'required',
        'form_No' => 'required'
    ];

    public function booking(){
        return $this->belongsto(booking::class);
    }
    public function user(){
        return $this->belongsto(user::class);
    }

}
