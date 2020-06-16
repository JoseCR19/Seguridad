<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class ProgramaService
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

        $this->baseUri = config('services.programa.base_uri');
        $this->secret = config('services.programa.secret');

    }
    
    /**
     * Validar un usuario login
     * @return string
     */

     //software

    public function list_perm($data)
    {
         
        return $this->performRequest('POST', 'GestionProgramas/public/index.php/list_perm', $data);
    }

    
  
    public function list_soft()
    {
         
        return $this->performRequest('GET', 'GestionProgramas/public/index.php/list_soft');
    }


    public function list_prog()
    {
         
        return $this->performRequest('GET', 'GestionProgramas/public/index.php/list_prog');
    }


    public function regi_prog($data)
    {
         
        return $this->performRequest('POST', 'GestionProgramas/public/index.php/regi_prog',$data);
    }

    
    public function vali_prog($data)
    {
         
        return $this->performRequest('POST', 'GestionProgramas/public/index.php/vali_prog',$data);
    }

    public function actu_prog($data)
    {
         
        return $this->performRequest('POST', 'GestionProgramas/public/index.php/actu_prog',$data);
    }




    public function inact_progra($data){
      
        return $this->performRequest('POST','GestionProgramas/public/index.php/inact_progra',$data);
    }

}