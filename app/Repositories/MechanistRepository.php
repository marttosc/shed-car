<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\Mechanist;


class MechanistRepository extends BaseRepository
{
    /**
     * Método abstrato retorna o caminho da model de oficinas
     */
    public function __construct(Mechanist $mechanist)
    {
        $this->mechanist = $mechanist;
    }

    function model()
    {
        return Shed\Entities\Mechanist::class;
    }

    /**
     * Método retorna oficinas paginados
     */
    public function paginateMechanistAll()
    {
        return $this->all();
    }

}