<?php

namespace App\Repositories;

use App\Models\Sms;
use InfyOm\Generator\Common\BaseRepository;

class SmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sms::class;
    }
}
