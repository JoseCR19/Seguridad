<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\TipoEtapaService;
use Illuminate\Http\Response;
class TipoEtapaController extends Controller
{
    use \App\Traits\ApiResponser;
    public $tipoestapaService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TipoEtapaService $tipoestapaService)
    {
       $this->tipoestapaService = $tipoestapaService;
    }
    //retornar usuarios
   
    public function list_tipo_etap(){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->tipoestapaService->list_tipo_etap());
     }
   

   
    public function regi_tipo_etap(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->tipoestapaService->regi_tipo_etap($request->all()), Response::HTTP_CREATED);
     }

     
   
     public function vali_tipo_etap(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->tipoestapaService->vali_tipo_etap($request->all()), Response::HTTP_CREATED);
     }
     

     public function actu_tipo_etap(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->tipoestapaService->actu_tipo_etap($request->all()), Response::HTTP_CREATED);
     }
}
