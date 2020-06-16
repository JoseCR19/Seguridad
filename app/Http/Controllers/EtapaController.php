<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Services\EtapaService;
use Illuminate\Http\Response;
class EtapaController extends Controller
{
    use \App\Traits\ApiResponser;
    public $etapaService;
    
   // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EtapaService $etapaService)
    {
       $this->etapaService = $etapaService;
    }
    //retornar usuarios
   
    public function list_tipo_prod(){
       
         return $this->successResponse($this->etapaService->list_tipo_prod());
     }
     

     public function list_unid_medi(){
       
         return $this->successResponse($this->etapaService->list_unid_medi());
     }
   


     public function list_proc(){
       
        return $this->successResponse($this->etapaService->list_proc());
    }



    public function list_plan(){
       
        return $this->successResponse($this->etapaService->list_plan());
    }

    

    public function list_t_etap(){
       
        return $this->successResponse($this->etapaService->list_t_etap());
    }

    
    

    public function lis_etap(){
       
        return $this->successResponse($this->etapaService->lis_etap());
    }


    public function regi_etap(Request $request){
        
    
        return $this->successResponse($this->etapaService->regi_etap($request->all()), Response::HTTP_CREATED);
     }
     
     public function vali_etap(Request $request){
        
    
        return $this->successResponse($this->etapaService->vali_etap($request->all()), Response::HTTP_CREATED);
     }


     public function actu_etap(Request $request){
        
    
        return $this->successResponse($this->etapaService->actu_etap($request->all()), Response::HTTP_CREATED);
     }

     


     public function elim_etap(Request $request){
        
    
        return $this->successResponse($this->etapaService->elim_etap($request->all()), Response::HTTP_CREATED);
     }

     
    }
