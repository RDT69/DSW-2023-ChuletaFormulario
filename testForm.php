<?php
require_once 'Paragraph.php';
require_once 'Element.php';
require_once 'Form.php';
require_once 'Field.php';
require_once 'SimpleField.php';
require_once 'MultipleField.php';
require_once 'Document.php';

$form1 = new Form("testForm.php", "Prueba formulario", "post");

$simpleField1 = new SimpleField('Nombre ', 'text', 'Escribe el nombre');
$form1->add($simpleField1);
$form1->add(new SimpleField('Edad', 'number', 'Que edad tienes', '18'));
$form1->add(new SimpleField('color', 'color', '¿Cual es tu color favorito?', '#0000FF'));
$form1->add(new SimpleField('suscripcion', 'checkbox', '¿Quieres suscribirte?'));
$options = [
    "Desarrollo en entorno servidor" => "DSW",
    "Desarrollo en entorno cliente" => "DEW",
    "Despliegue aplicaciones web" => "DPL",
];
$multipleField1 = new MultipleField('preferido', 'radio', '¿Cual es tu modulo preferido?', 'Despliegue de aplicaciones', $options);
$form1->add($multipleField1);
$multipleField1->addOption('Diseño de interfaces web', 'DOR');
$parrafo1 = new Paragraph('Hola Mundo');

$document = new Document('Prueba documento');
$document->add($parrafo1);
$document->add($form1);
$document->add( new SimpleField('Nombre ', 'text', 'Escribe el nombre'));
$document->render();

?>

