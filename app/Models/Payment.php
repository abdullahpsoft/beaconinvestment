<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Booking;


class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'booking_id',
        'booking_code',
        'payment',
        'payment_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'booking_id' => 'required|integer',
        'booking_code' => 'required',
        'payment' => 'required|integer',
        'payment_date' => 'required|date'
    ];

    public function booking(){

        return $this->belongsto(booking::class);
    }
}
