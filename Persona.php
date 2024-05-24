<?php
class Persona{
    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $nroDocumento;
    private $telefono;
    public function __construct($nombre,$apellido,$tipoDocumento,$nroDocumento,$telefono)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->nroDocumento=$nroDocumento;
        $this->tipoDocumento=$tipoDocumento;
        $this->telefono=$telefono;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNroDocumento(){
        return $this->nroDocumento;
    }

    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function setNroDocumento($nroDocumento){
        $this->nroDocumento=$nroDocumento;
    }

    public function setTipoDocumento($tipoDocumento){
        $this->tipoDocumento=$tipoDocumento;
    }

  

    public function setTelefono($telefono){
        $this->telefono=$telefono;
    
    }
    public function __toString()
    {
        return $this->getNombre()."\n" . 
                $this->getApellido(). "\n". 
               $this->getTipoDocumento(). "\n". 
                $this->getNroDocumento(). "\n". 
                $this->getTelefono(). "\n";
                $this->getTelefono(). "\n";
 
 
 
 
            }
}


?>