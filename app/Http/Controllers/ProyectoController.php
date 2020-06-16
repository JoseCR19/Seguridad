<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\ProyectoService;
use Illuminate\Http\Response;
class ProyectoController extends Controller
{
    use \App\Traits\ApiResponser;
    public $proyectoService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProyectoService $proyectoService)
    {
       $this->proyectoService = $proyectoService;
    }
    //retornar usuarios
   
    public function list_proy(){
         //die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->proyectoService->list_proy());
     }

 


      public function vali_proy(Request $request){
            
         
         return $this->successResponse($this->proyectoService->vali_proy($request->all()), Response::HTTP_CREATED);
      }


      
      public function actu_proy(Request $request){
            
         
        return $this->successResponse($this->proyectoService->actu_proy($request->all()), Response::HTTP_CREATED);
     }


   
     public function list_clie(){
      // die("das");
      //return $this->successResponse($this->usuarioService->obte_usua());
      //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
       return $this->successResponse($this->proyectoService->list_clie());
   }


   
   public function list_cont(){
      
       return $this->successResponse($this->proyectoService->list_cont());
   }

   

   public function list_empr(){
     
       return $this->successResponse($this->proyectoService->list_empr());
   }
  

    //agregar servicio enviroments guzzlet solo una vez luego las rutas copiar luego de eso crear services y controllers.
}
