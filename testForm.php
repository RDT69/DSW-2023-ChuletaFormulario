<?php 
require_once 'Form.php';
require_once 'Field.php';
require_once 'SimpleField.php';
require_once 'MultipleField.php';

$form1 = new Form("testForm.php", "Prueba formulario", "post");

$simpleField1 = new SimpleField('Nombre ', 'text', 'Escribe el nombre');
$form1->add($simpleField1);
$form1->add(new SimpleField('Edad', 'number', 'Que edad tienes', '18' ));
$form1->add(new SimpleField('color', 'color', '¿Cual es tu color favorito?', '#0000FF'));
$form1->add(new SimpleField('suscripcion', 'checkbox', '¿Quieres suscribirte?'));
$options = [
"Desarrollo en entorno servidor" => "DSW",
"Desarrollo en entorno cliente" => "DEW",
"Despliegue aplicaciones web" => "DPL",
];
$multipleField1 = new MultipleField('preferido', 'radio', '¿Cual es tu modulo preferido?', 'Despliegue de aplicaciones', $options);
$form1 -> add($multipleField1);
$multipleField1->addOption('Diseño de interfaces web', 'DOR');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Pruebas con formularios</h1>
    <?php $form1 -> render(); ?>
   
</body>
</html>