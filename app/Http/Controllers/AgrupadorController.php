<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\AgrupadorService;
use Illuminate\Http\Response;
class AgrupadorController extends Controller
{
    use \App\Traits\ApiResponser;
    public $agrupadorService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AgrupadorService $agrupadorService)
    {
       $this->agrupadorService = $agrupadorService;
    }
    //retornar usuarios
   
    public function list_agru(){
        // die("das");
        //return $this->successResponse($this->usuarioService->obte_usua());
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
         return $this->successResponse($this->agrupadorService->list_agru());
     }
     
     public function regi_agru(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->agrupadorService->regi_agru($request->all()), Response::HTTP_CREATED);
     }
     public function vali_agru(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->agrupadorService->vali_agru($request->all()), Response::HTTP_CREATED);
     }

     
     public function actu_agru(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->agrupadorService->actu_agru($request->all()), Response::HTTP_CREATED);
     }
}
