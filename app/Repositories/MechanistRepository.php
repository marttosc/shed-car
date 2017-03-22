<?php

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\Mechanist;


class MechanistRepository extends BaseRepository
{
	public function __construct(Mechanist $mechanist)
	{
		$this->model = $mechanist;
	}

	/**
	 * Método abstrato retorna o caminho da model de oficinas
	 */
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