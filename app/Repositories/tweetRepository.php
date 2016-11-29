<?php

namespace App\Repositories;

use App\Models\tweet;
use InfyOm\Generator\Common\BaseRepository;

class tweetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tweet::class;
    }
}
