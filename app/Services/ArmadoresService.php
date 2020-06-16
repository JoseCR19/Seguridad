<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class ArmadoresService
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

    public function list_arma()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_arma');
    }
    


    public function regi_arma($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/regi_arma', $data);
    }


    

    public function vali_arma($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/vali_arma', $data);
    }


    

    public function actu_arma($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/actu_arma', $data);


    }

    public function elim_arma($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/elim_arma', $data);


    }

}