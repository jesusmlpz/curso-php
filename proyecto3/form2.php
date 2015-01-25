<?php

$userform = array(
    "id"=> array(
        'label'=>null,
        'type'=>'hidden',
        'value'=>1
    ),
    "name"=> array(
        'label'=>'Nombre',
        'type'=>'text',
        'placeholder'=>'Escribe tu nombre',
        'help'=> 'El nombre!!!',
        'validation'=> array('required'=>true,
                             'minsize'=>3,
                             'maxsize'=>250,
                             'message'=>'Error aquí'
        ),
        'filters'=>array('scriptags','striptrim'),
        'decoators'=> array()
    ),
    "email"=> array(),
    "password"=> array(),
    "description"=> array(),
    "id"=> array(),
    "id"=> array(),
    "id"=> array(),
    "id"=> array(),
    "id"=> array(),
    "id"=> array(),
    "id"=> array(),
    "id"=> array(),
);
