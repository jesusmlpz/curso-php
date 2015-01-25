<?php

/**
 * Validate form
 * 
 * @param array $form definition
 * @param array $data filtered
 * @return boolean | array ('fildname'=>'error message')
 */
function validateForm($form, $datafiltered)

{
    $validatedata = null;
    
    foreach ($form as $key => $form_field) {
//        if ($form[$key]['validation'] != null) { // hay que validar
        if (array_key_exists( 'validation', $form[$key] )) { // hay que validar
            
            $validation = $form_field['validation'];
            
            $valor = $datafiltered[$key];
            
            foreach ($validation as $val_type => $val_data) {
                switch ($val_type) {
                    case 'required':
                        if ($valor == null) {
                            $validatedata[$key] = errorMensaje($validation, $key." no puede ser nulo");
                        }
                        break;
                    case 'minsize':
                        if ($valor != null && (strlen($valor) < $validation['minsize'])) {
                            $validatedata[$key] = errorMensaje($validation, $key." debe de tener más de ".$validation['minsize']);
                        }
                        break;
                    case 'maxsize':
                        if ($valor != null && (strlen($valor) > $validation['maxsize'])) {
                            $validatedata[$key] = errorMensaje($validation, $key." debe de tener menos de ".$validation['maxsize']);
                        }
                        break;
                }
            }
        }
    }
    
   if ($validatedata == null) {
       $validatedata = true;
   }
    return $validatedata;
}

function errorMensaje($validation, $mensaje_particular) {
    if (array_key_exists('error_message', $validation)) {
        $mensaje_error= $validation['error_message'];
    } else {
        $mensaje_error = $mensaje_particular;
    }
    
    return $mensaje_error;
}