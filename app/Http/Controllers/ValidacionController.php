<?php

namespace App\Http\Controllers;

use App\Usuario;
use \PHPMailer\PHPMailer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ValidacionController extends Controller {

    use \App\Traits\ApiResponser;

    // Illuminate\Support\Facades\DB;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    //verificar inicio sesion
    public function vali_usua(Request $request) {
        $regla = [
            'codi_usua' => 'required|max:255',
            'clav_usua' => 'required|max:255'
        ];
        $this->validate($request, $regla);
        $usua = Usuario::where('varCodiUsua', $request->input('codi_usua'))->first(['intIdUsua','varNombUsua', 'varApelUsua', 'intIdUsuaToke', 'varCodiUsua','varNumeDni as DNI' ,'varSecrUsua', 'varClavUsua', 'varEstaUsua']);
        $esta_usua = $usua["varEstaUsua"];

        if ($esta_usua == "") {
            $regla = [
                'mensaje' => 'El usuario ingresado no existe.'
            ];
            return $this->successResponse($regla);
        } else {
            if ($esta_usua == 'INA') {
                $regla = [
                    'mensaje' => 'El usuario ingresado se encuentra inactivo.'
                ];
                return $this->successResponse($regla);
            } else {
                if (!password_verify($request->input('clav_usua'), $usua["varClavUsua"])) {

                    $regla = [
                        'mensaje' => 'Clave incorrecta.'
                    ];
                    return $this->successResponse($regla);
                }
            }
        }
        return $this->successResponse($usua, Response::HTTP_CREATED);
    }

    //recuperar clave
    public function recu_clav(Request $request) {
        $regla = [
            'varNumeDni' => 'required|max:255',
            'varCodiUsua' => 'required|max:255'
        ];
        $this->validate($request, $regla);
        //$usuario=Usuario::where('varNumeDni',$request->input('varNumeDni'))->where('varCodiUsua',$request->input('varCodiUsua'))->where('varEstaUsua','=','ACT')->first(['varNumeDni','varCodiUsua']);
        $usuario = Usuario::where('varNumeDni', $request->input('varNumeDni'))->where('varEstaUsua', '=', 'ACT')->first(['varNumeDni', 'varCodiUsua']);
        // die($usuario);
        if (($usuario['varNumeDni']) == ($request->input('varNumeDni'))) {

            $usuario_codigo = Usuario::where('varNumeDni', $request->input('varNumeDni'))->where('varCodiUsua', $request->input('varCodiUsua'))->where('varEstaUsua', '=', 'ACT')->first(['varCodiUsua', 'varNumeDni', 'varNombUsua', 'varApelUsua', 'varClavUsua', 'varCorrUsua']);

            //die(__DIR__.'/phpmailer');
            //manejo de php mailer p
            /* $regla = [
              'nume_enti' => $usua['intIdUsua'],
              'nomb_clie' => $usua['varNumeDni'],
              'id' => $usua['varNombUsua'],
              'corr_clie' => $usua['varApelUsua'],
              'mensaje' => 'clave'
              ]; */
            if (($usuario_codigo['varCodiUsua']) == ($request->input('varCodiUsua'))) {

                $template = file_get_contents(__DIR__ . '/resetear.tpl');
                $url = "http://192.168.0.120:8081/SisMimco/clave/" . $usuario_codigo['varClavUsua'];

                $btn_cred = "<a href ='$url' style='background: #374960 ;color: #ffffff ;font-size: 20px;border-radius:50px'>Cambiar Contraseña</a>";

                $nomb_comp = $usuario_codigo['varNombUsua'] . ' ' . $usuario_codigo['varApelUsua'];


                $template = str_replace(
                        array("<!-- #{Nombre} -->", "<!-- #{boton} -->"), array(ucwords(strtolower($nomb_comp)), $btn_cred), $template
                );

                $asun_mens = "Restablecer Contrasena MIMCO";
                $mail = new \PHPMailer\PHPMailer\PHPMailer();
                $mail->CharSet = 'utf-8';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                $mail->MsgHTML($template);
                $mail->From = 'administrator@mimco.com.pe';
                $mail->FromName = 'NO RESPONDER';
                $mail->IsHTML(true);
                $mail->Subject = $asun_mens;
                $mail->AddAddress($usuario_codigo['varCorrUsua']);
                $mail->SMTPDebug = 1;
                if (!$mail->Send()) {
                    echo "error" . ($mail->ErrorInfo);
                } else {
                    $mensaje = [
                        'mensaje' => 'Se envio un correo para el reseteo de clave.'
                    ];
                    return $this->successResponse($mensaje);
                }
            } else {
                $mensaje = [
                    'mensaje' => 'El codigo de Usuario es incorrecto.'
                ];

                return $this->successResponse($mensaje);
            }
        } else {
            $mensaje = [
                'mensaje' => 'Dni Ingresado no es correcto.'
            ];
            return $this->successResponse($mensaje);
        }
    }

    /*     * ************************************* */

    function GenerateRandomCaracter($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    // Actualizar Clave del usuario 
    public function actu_clav(Request $request) {
        $regla = [
            'varNumeDni' => 'required|max:255',
            'varClavUsua' => 'required|max:255'
        ];

        $this->validate($request, $regla);


        $cla_crifr = password_hash($request->input('varClavUsua'), PASSWORD_DEFAULT);

        $usua = Usuario::where('varNumeDni', '=', $request->input('varNumeDni'))->update([
            'varClavUsua' => $cla_crifr
        ]);
        ;
        $mensaje = [
            'mensaje' => 'Su contraseña ha sido modificada.'
        ];
        return $this->successResponse($mensaje);
    }

    //  Mensaje de confirmacion de la actualizar del mensaje  

    public function mens_conf(Request $request) {

        $regla = ['varClavUsua' => 'required|max:255'];

        $this->validate($request, $regla);

        $usua = Usuario::where('varClavUsua', $request->input('varClavUsua'))->first(['varClavUsua', 'varNumeDni']);


        if (($request->input('varClavUsua')) == $usua["varClavUsua"]) {
            $mensaje = [
                'mensaje' => $usua['varNumeDni']
            ];
            return $this->successResponse($mensaje);
        } else {
            $mensaje = [
                'mensaje' => 'Invalido.'
            ];
            
            return $this->successResponse($mensaje);
        }
    }

    public function valida_clave(Request $request) {

        $regla = ['intIdUsua' => 'required', 'varClavUsua' => 'required', 'updclave' => 'required'];
        $this->validate($request, $regla);
        $idusu = Usuario::where('intIdUsua', $request->input('intIdUsua'))->first(['intIdUsua', 'varClavUsua', 'varNombUsua']);        
        if (password_verify($request->input('varClavUsua'), $idusu['varClavUsua']) && $request->input('intIdUsua') == $idusu['intIdUsua']) {
            $upd_cifr = password_hash($request->input('updclave'), PASSWORD_DEFAULT);
            $updclave = Usuario:: where('intIdUsua', $request->input('intIdUsua'))->update(['varClavUsua' => $upd_cifr]);
            $mensaje = ['mensaje' => 'Contrasena Actualizada Correctamente'];
            return $this->successResponse($mensaje);
            
        } else {

            $mensaje = [
                'mensaje' => 'Contrasena no valida...Verificar'
            ];
            return $this->successResponse($mensaje);
        }

    }

}
