<?php 

namespace Shed\Repositories;

use Shed\Repositories\Eloquent\BaseRepository;
use Shed\Entities\Mechanist;


class MechanistRepository extends BaseRepository
{
	public function __construct(Mechanist $mechanist)
	{
		$this->mechanist = $mechanist;
	}

	/**
	 * Método abstrato retorna o caminho da model de oficinas
	 */
	function model()
    {
        return 'Shed\Entities\Mechanist';
    }

    /**
     * Método retorna oficinas paginados
     */    
    public function paginateMechanistAll()
    {
    	
    }

   

}