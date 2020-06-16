<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$router->group(['middleware' => 'client.credentials'], function () use ($router) {

$router->post('/usuario/regi_usua','UsuarioController@regi_usua');//
$router->post('/usuario/validar_usuario','UsuarioController@validar_usuario');//
$router->post('/usuario/actu_usua','UsuarioController@actu_usua');//
$router->post('/usuario/elim_usua','UsuarioController@elim_usua');//
$router->get('/usuario/list_usua','UsuarioController@list_usua');//



$router->post('/usuario/obte_perm','UsuarioController@obte_perm');//


//PROGRAMA PERMISO

$router->post('/usuario/regi_usua_prog','UsuarioController@regi_usua_prog');//
$router->post('/usuario/elim_usua_prog','UsuarioController@elim_usua_prog');//


//software


$router->get('/programa/list_soft','ProgramaController@list_soft');//
$router->post('/programa/list_perm','ProgramaController@list_perm');//
$router->get('/programa/list_prog','ProgramaController@list_prog');//

//copiar perfiles
$router->post('/usuario/elim_usua_perf','UsuarioController@elim_usua_perf');//
$router->post('/usuario/copi_perf','UsuarioController@copi_perf');//


//creacion de programas
$router->post('/programa/regi_prog','ProgramaController@regi_prog');
$router->post('/programa/vali_prog','ProgramaController@vali_prog');
$router->post('/programa/actu_prog','ProgramaController@actu_prog');

$router->post('/programa/inact_progra','ProgramaController@inact_progra');




//creacion de mantenimiento Proyecto
$router->get('/mantenimiento/list_proy','ProyectoController@list_proy');
$router->post('/mantenimiento/vali_proy','ProyectoController@vali_proy');
$router->post('/mantenimiento/actu_proy','ProyectoController@actu_proy');


//lista de entidades (Clientes, contratista, empresa )
$router->get('/mantenimiento/list_clie','ProyectoController@list_clie');
$router->get('/mantenimiento/list_cont','ProyectoController@list_cont');
$router->get('/mantenimiento/list_empr','ProyectoController@list_empr');

//Tipo Etapas Tipo = TipoEtapaController
$router->get('/mantenimiento/list_tipo_etap','TipoEtapaController@list_tipo_etap');
$router->post('/mantenimiento/regi_tipo_etap','TipoEtapaController@regi_tipo_etap');
$router->post('/mantenimiento/vali_tipo_etap','TipoEtapaController@vali_tipo_etap');
$router->post('/mantenimiento/actu_tipo_etap','TipoEtapaController@actu_tipo_etap');
// Agrupador
$router->get('/mantenimiento/list_agru','AgrupadorController@list_agru');
$router->post('/mantenimiento/regi_agru','AgrupadorController@regi_agru');
$router->post('/mantenimiento/vali_agru','AgrupadorController@vali_agru');
$router->post('/mantenimiento/actu_agru','AgrupadorController@actu_agru');


//listar tipo Producto para el vcombo box 
$router->get('/mantenimiento/list_tipo_prod','EtapaController@list_tipo_prod');

//lista de medicion de medida para el vcombo box 
$router->get('/mantenimiento/list_unid_medi','EtapaController@list_unid_medi');

//listar procesos para el vcombo box 
$router->get('/mantenimiento/list_proc','EtapaController@list_proc');

//listar planta para el vcombo box 
$router->get('/mantenimiento/list_plan','EtapaController@list_plan');


//listar Tipo de etapa para el vcombo box 
$router->get('/mantenimiento/list_t_etap','EtapaController@list_t_etap');

//GESTION ETAPA

$router->post('/mantenimiento/regi_etap','EtapaController@regi_etap');
$router->get('/mantenimiento/lis_etap','EtapaController@lis_etap');
$router->post('/mantenimiento/vali_etap','EtapaController@vali_etap');
$router->post('/mantenimiento/actu_etap','EtapaController@actu_etap');
$router->post('/mantenimiento/elim_etap','EtapaController@elim_etap');





// ARMADORES 
$router->get('/mantenimiento/list_arma','ArmadoresController@list_arma');
$router->post('/mantenimiento/regi_arma','ArmadoresController@regi_arma');
$router->post('/mantenimiento/vali_arma','ArmadoresController@vali_arma');
$router->post('/mantenimiento/actu_arma','ArmadoresController@actu_arma');

$router->post('/mantenimiento/elim_arma','ArmadoresController@elim_arma');


});

$router->post('/vali_usua','ValidacionController@vali_usua');//
$router->post('/recu_clav','ValidacionController@recu_clav');//
$router->post('/actu_clav','ValidacionController@actu_clav');//
$router->post('/mens_conf','ValidacionController@mens_conf');//
$router->post('/valida_clave','ValidacionController@valida_clave');//