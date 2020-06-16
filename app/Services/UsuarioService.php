<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class UsuarioService
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
        $this->baseUri = config('services.usuario.base_uri');
        $this->secret = config('services.usuario.secret');
    }
    
    /**
     * Validar un usuario login
     * @return string
     */
    public function regi_usua($data)
    {
         
        return $this->performRequest('POST', 'GestionUsuarios/public/index.php/regi_usua', $data);
    }


    // validar usuario para encontrarlo   
    public function validar_usuario($data){
        return $this->performRequest('POST', 'GestionUsuarios/public/index.php/validar_usuario', $data);
    }

    // actualiza usuario update_usua
    public function actu_usua($data){
        return $this->performRequest('POST', 'GestionUsuarios/public/index.php/actu_usua', $data);
    }

    public function elim_usua($data){
        return $this->performRequest('POST','GestionUsuarios/public/index.php/elim_usua',$data);
    }
    
    public function list_usua(){
        return $this->performRequest('GET','GestionUsuarios/public/index.php/list_usua');
    }



    public function elim_usua_prog($data){
        return $this->performRequest('POST','GestionUsuarios/public/index.php/elim_usua_prog',$data);
    }

  
    public function regi_usua_prog($data){
        return $this->performRequest('POST','GestionUsuarios/public/index.php/regi_usua_prog',$data);
    }
    
    
    public function obte_perm($data){
        return $this->performRequest('POST','GestionUsuarios/public/index.php/obte_perm',$data);
    }

    

    public function elim_usua_perf($data){
        return $this->performRequest('POST','GestionUsuarios/public/index.php/elim_usua_perf',$data);
    }

    // Copiar Perfiles

    public function copi_perf($data){
        return $this->performRequest('POST','GestionUsuarios/public/index.php/copi_perf',$data);
    }



    /**
     *Validar un cliente login
     * @return string
     */
    
  
    
}