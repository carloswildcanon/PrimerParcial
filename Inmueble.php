<?php
class Inmueble{
    private $codigo;
    private $tipoUso;
    private $nroPiso;
    private $costoMensual;
    private $objInquilino;
    public function __construct($codigo,$nroPiso,$tipoUso,$costoMensual, $objInquilino){

        $this->codigo=$codigo;
        $this->nroPiso=$nroPiso;
        $this->tipoUso=$tipoUso;
        $this->costoMensual=$costoMensual;
        $this->objInquilino=$objInquilino;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getNroPiso(){
        return $this->nroPiso;
    }
    public function getTipoInmueble(){
        return $this->tipoUso;
    }
    public function getCostoMensual(){
        return $this->costoMensual;
    }
    public function getObjInquilino(){
        return $this->objInquilino;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setNroPiso($nroPiso){
        $this->nroPiso=$nroPiso;
    }
    public function setTipoUso($tipoUso){
        $this->tipoUso=$tipoUso;
    }
    public function setCostoMensual($costoMensual){
        $this->costoMensual=$costoMensual;
    }
    public function setObjInquilino($objInquilino){
        $this->objInquilino=$objInquilino;
    }

    /**
* @param string $tipoUso
* @param float $costoMaximo
* @return boolean
*/

public function estaDisponible($tipoUso,$costoMaximo)
{
   $seAlquila=false;
   $inmueble=$this->getTipoInmueble();
   $costoAlquiler=$this->getCostoMensual();
   $inquilino=$this->getObjInquilino();
   if($inmueble==$tipoUso && $costoAlquiler<=$costoMaximo && $inquilino==null){
      $seAlquila=true;
   }
   return $seAlquila;
}

public function alquilar($objInquilino)
{
    $bandera = false;
    if ($this->getObjInquilino() == null) {
        $this->setObjInquilino($objInquilino);
        $bandera = true;
    }
    return $bandera;
}



}


?>