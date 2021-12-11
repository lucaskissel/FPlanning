<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

use App\Entities\Input;

/**
 * Class InputRepository.
 *
 * @package namespace App\Repositories;
 */
class InputRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Input::class;
    }
}
