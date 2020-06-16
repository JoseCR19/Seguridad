<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\UsuarioService;
use Illuminate\Http\Response;
class UsuarioController extends Controller
{
    use \App\Traits\ApiResponser;
    public $usuarioService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsuarioService $usuarioService)
    {
       $this->usuarioService = $usuarioService;
    }
    //retornar usuarios
   
    public function index() {
      
         return $this->successResponse($this->usuarioService->obte_usua());
    }

    //verificar inicio sesion
    public function regi_usua(Request $request){
        
       //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->usuarioService->regi_usua($request->all()), Response::HTTP_CREATED);
    }
    //verificar el usuario existe
    public function validar_usuario(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->validar_usuario($request->all()), Response::HTTP_CREATED);
     }


     public function actu_usua(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->actu_usua($request->all()), Response::HTTP_CREATED);
     }
   

     //cambiar el estado de ACT a DES
     public function elim_usua(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->elim_usua($request->all()), Response::HTTP_CREATED);
     }

     public function list_usua(){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->list_usua());
     }
   
     public function regi_usua_prog(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->regi_usua_prog($request->all()), Response::HTTP_CREATED);
     }


     public function elim_usua_prog(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->elim_usua_prog($request->all()), Response::HTTP_CREATED);
     }

     
     public function obte_perm(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->usuarioService->obte_perm($request->all()), Response::HTTP_CREATED);
     }

     

     public function elim_usua_perf(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->usuarioService->elim_usua_perf($request->all()), Response::HTTP_CREATED);
     }



     public function copi_perf(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->usuarioService->copi_perf($request->all()), Response::HTTP_CREATED);
     }


    //agregar servicio enviroments guzzlet solo una vez luego las rutas copiar luego de eso crear services y controllers.
}
