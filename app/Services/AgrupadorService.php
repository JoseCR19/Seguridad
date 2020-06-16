<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class AgrupadorService
{
    use ConsumesExternalService;
    /**
     * The base uri to be used to consume the authors service
     * @var string
     */
    public $baseUri;
    /**
     * The secret to be used to consume the authors service
     * @var string
     */
    public $secret;
    public function __construct()
    {
        $this->baseUri = config('services.mantenimiento.base_uri');
        $this->secret = config('services.mantenimiento.secret');
    }
    
    /**
     * Validar un usuario login
     * @return string
     */

    public function list_agru()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_agru');
    }
    


    public function regi_agru($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/regi_agru', $data);
    }

    
    public function vali_agru($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/vali_agru', $data);
    }
    /**
     *Validar un cliente login
     * @return string
     */
    
    public function actu_agru($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/actu_agru', $data);
    }
    
}