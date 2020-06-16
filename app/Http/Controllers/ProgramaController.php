<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\ProgramaService;
use Illuminate\Http\Response;
class ProgramaController extends Controller
{
    use \App\Traits\ApiResponser;
    public $programaService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProgramaService $programaService)
    {
       $this->programaService = $programaService;
    }
    //retornar usuarios
   
    public function list_soft(){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->programaService->list_soft());
     }
   

   
    public function list_perm(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->programaService->list_perm($request->all()), Response::HTTP_CREATED);
     }


     public function list_prog(){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->programaService->list_prog());
     }

     public function regi_prog(Request $request){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->programaService->regi_prog($request->all()), Response::HTTP_CREATED);
     }
     

     public function vali_prog(Request $request){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->programaService->vali_prog($request->all()), Response::HTTP_CREATED);
     }

     public function actu_prog(Request $request){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->programaService->actu_prog($request->all()), Response::HTTP_CREATED);
     }
    // elim_prog     



     public function inact_progra(Request $request){
     //  die("aqui"); 
      //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
       return $this->successResponse($this->programaService->inact_progra($request->all()), Response::HTTP_CREATED);
   }
    //agregar servicio enviroments guzzlet solo una vez luego las rutas copiar luego de eso crear services y controllers.
}
