<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logicaController extends Controller
{
    //
    public function buscar(Request $request){

    	$opcion= $request -> input('opcion');
    	$valor = $request -> input('valor');
    	echo $opcion;
    	echo $valor;
    	$datos=['Nombre'=>"Pepe",'Apellido'=>"Peperes",'Ciudad'=>"Bojacá",'Cedula'=>"321568455"];
    	$datos=['Nombre'=>"Vladimir",'Apellido'=>"Martinez",'Ciudad'=>"Madrid",'Cedula'=>"3123040099"];
    	$datos=['Nombre'=>"Enrique",'Apellido'=>"Hernandez",'Ciudad'=>"Mosquera",'Cedula'=>"3133324616"];
    	$datos=['Nombre'=>"Dario",'Apellido'=>"Lopez",'Ciudad'=>"Cajicá",'Cedula'=>"3053113575"];
    	$datos=['Nombre'=>"Andres",'Apellido'=>"Rosas",'Ciudad'=>"Fusagasugá",'Cedula'=>"3118898284"];
    	$datos=['Nombre'=>"Ronaldo",'Apellido'=>"Flechas",'Ciudad'=>"Móstoles",'Cedula'=>"3142030018"];
    	$datos=['Nombre'=>"Nicolas",'Apellido'=>"Mora",'Ciudad'=>"Veracruz",'Cedula'=>"3193888541"];
    	$datos=['Nombre'=>"Michael",'Apellido'=>"Quintana",'Ciudad'=>"Facatativa",'Cedula'=>"3113941745"];
    	foreach ($datos as $key => $value) {
    		foreach ($value as $key => $value) {

    		}
    	}
    }
}
