<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class ProyectoService
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

    public function list_proy()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_proy');
    }

    
    public function vali_proy($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/vali_proy', $data);
    }

    
    public function actu_proy($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/actu_proy', $data);
    }

    
    
  
    public function list_clie()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_clie');
    }


  
    public function list_cont()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_cont');
    }

    

    public function list_empr()
    {
         
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_empr');
    }

    



}