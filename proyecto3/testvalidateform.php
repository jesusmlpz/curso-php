<?php

include ('validateform.php');

$userForm = array(
    'id'=>array(
        'label'=>null,
        'type'=>'hidden',
        'value'=>1
    ),
    'name'=>array(
        'label'=>'Nombre',
        'type'=>'text',
        'value'=>'Vicente',
        'placeholder'=>'Escribe aqui tu nombre',
        'help'=>'El nombre!!!!',
        'validation'=>array('required'=>true,
            'minsize'=>3,
            'maxsize'=>10,
    //        'error_message'=>'Error aqui'
        ),
        'filters'=>array('striptags', 'striptrim'),
        'decorators'=>array('readonly', 'class'=>'nameform')
    ),
    'email'=>array(),
    'password'=>array(),
    'description'=>array(),
    'photo'=>array(),
    'bdate'=>array(),
    'city'=>array(),
    'gender'=>array(),
    'privacy'=>array(),
    'hobbies'=>array(),
    'submit'=>array(),

);

$userData = array(
    'id'=>1,
    'name'=>'aasdasdasdasdasd',
    'email'=>array(),
    'password'=>array(),
    'description'=>array(),
    'photo'=>array(),
    'bdate'=>array(),
    'city'=>array(),
    'gender'=>array(),
    'privacy'=>array(),
    'hobbies'=>array(),
    'submit'=>array(),

);


$validatedata = validateForm($userForm, $userData);

echo '<pre>';
print_r($validatedata);
echo '</pre>';
