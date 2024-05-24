<?php
include_once("Persona.php");
include_once("Inmueble.php");
include_once("Edificio.php");
/**
 *  Se crea un objeto Edificio con los siguientes datos:
 *  Direccion= Juab B. Justo 3456 y 
 * responsable (DNI, 27432561, Carlos,Martinez,154321233) .
 * 
 * 
 * 
 */

 $objResposable=new Persona("Carlos","Martinez","DNI",27432561,154321233);
 $objEdifcio=new Edificio("Juab B. Justo 3456",[],$objResposable);

$inquilino1=new Persona("Pepe","suarez","DNI",12333456,4456722);
$inquilino2=null;
$inquilino3=new Persona("Pedro","suarez","DNI",1233422,446678);
$inquilino4=null;
$inquilino5=null;
$inmueble1= new Inmueble(11,1,"local comercial",5000,$inquilino1);
$inmueble2= new Inmueble(12,1,"local comercial",5000,$inquilino2);
$inmueble3= new Inmueble(13,2,"departamento",3500,$inquilino3);
$inmueble4= new Inmueble(14,2,"departamento",3500,$inquilino4);
$inmueble5= new Inmueble(15,3,"departamento",3500,$inquilino5);

$colInmuebles=[$inmueble1,$inmueble2,$inmueble3,$inmueble4,$inmueble5];
$edificio2=new Edificio("Juab B. Justo 3456",$colInmuebles,$objResposable);

$inmDisponibles=$edificio2->darInmueblesDisponibles("departamento" ,550000);
?>