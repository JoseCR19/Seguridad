<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class TipoEtapaService
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
       // $this->baseUri = config('services.usuario.base_uri');
       // $this->secret = config('services.usuario.secret');

        $this->baseUri = config('services.mantenimiento.base_uri');
        $this->secret = config('services.mantenimiento.secret');

    }
    
    /**
     * Validar un usuario login
     * @return string
     */

     //software

    public function list_tipo_etap()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_tipo_etap');
    }

    
    
    public function regi_tipo_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/regi_tipo_etap', $data);
    }

    
     
    public function vali_tipo_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/vali_tipo_etap', $data);
    }

   
  
   

    public function actu_tipo_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/actu_tipo_etap', $data);
    }

    


    



}