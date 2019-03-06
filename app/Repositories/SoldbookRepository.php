<?php

namespace App\Repositories;

use App\Models\Soldbook;
use InfyOm\Generator\Common\BaseRepository;

class SoldbookRepository extends BaseRepository
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
        return Soldbook::class;
    }
}
