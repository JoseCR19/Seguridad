<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\ArmadoresService;
use Illuminate\Http\Response;
class ArmadoresController extends Controller
{
    use \App\Traits\ApiResponser;
    public $armadoresService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArmadoresService $armadoresService)
    {
       $this->armadoresService = $armadoresService;
    }
    //retornar usuarios
   
    public function list_arma(){
       
         return $this->successResponse($this->armadoresService->list_arma());
     }

     public function regi_arma(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->armadoresService->regi_arma($request->all()), Response::HTTP_CREATED);


     }
     
     public function vali_arma(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->armadoresService->vali_arma($request->all()), Response::HTTP_CREATED);


     }

     


     public function actu_arma(Request $request){
        
        //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
        return $this->successResponse($this->armadoresService->actu_arma($request->all()), Response::HTTP_CREATED);
     }

     public function elim_arma(Request $request){
        
      //return $this->successResponse($this->usuarioService->vali_usua($request->all()), Response::HTTP_CREATED);
      return $this->successResponse($this->armadoresService->elim_arma($request->all()), Response::HTTP_CREATED);
   }

}
