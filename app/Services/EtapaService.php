<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class EtapaService
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


     //listar tipo Producto para el vcombo box 

    public function list_tipo_prod()
    {    
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_tipo_prod');
    }
    
    //lista de medicion de medida para el vcombo box 
    public function list_unid_medi()
    {    
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_unid_medi');
    }
    
    //listar procesos para el vcombo box 

    public function list_proc()
    {    
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_proc');
    }
    //listar planta para el vcombo box 
    
    public function list_plan()
    {    
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_plan');
    }
//listar Tipo de etapa para el vcombo box 

    public function list_t_etap()
    {    
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/list_t_etap');
    }

    //GESTION ETAPA 
    


    public function lis_etap()
    {    
        return $this->performRequest('GET', 'GestionProyectos/public/index.php/lis_etap');
    }

    public function regi_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/regi_etap', $data);
    }

    public function vali_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/vali_etap', $data);
    }
    

    public function actu_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/actu_etap', $data);
    }
  

    public function elim_etap($data){
        
        return $this->performRequest('POST', 'GestionProyectos/public/index.php/elim_etap', $data);
    }
}