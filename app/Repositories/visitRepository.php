<?php

namespace App\Repositories;

use App\Models\visit;
use InfyOm\Generator\Common\BaseRepository;

class visitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date',
        'time',
        'complaint',
        'diagnoses',
        'patient_id',
        'visit_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return visit::class;
    }
}
