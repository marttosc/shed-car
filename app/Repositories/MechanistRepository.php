<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\Mechanist;


class MechanistRepository extends BaseRepository
{
    /**
     * @var
     */
    protected $model = Mechanist::class;

    /**
     * Método abstrato retorna o caminho da model de oficinas
     */
    public function __construct(Mechanist $mechanist)
    {
        parent::__construct();

        $this->mechanist = $mechanist;
    }

    /**
     * Método retorna oficinas paginados
     */
    public function paginateMechanistAll()
    {
        return $this->all(['*'], ['user']);
    }

}
