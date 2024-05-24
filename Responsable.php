<?php
class Responsable{
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $direccion;
    private $mail;
    private $telefono;
    public function __construct($nombre,$apellido,$nroDocumento,$direccion,$mail,$telefono)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->nroDocumento=$nroDocumento;
        $this->direccion=$direccion;
        $this->mail=$mail;
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

    public function getDireccion(){
        return $this->direccion;
    }

    public function getMail(){
        return $this->mail;
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

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }

    public function setMail($mail){
        $this->mail=$mail;
    }

    public function setTelefono($telefono){
        $this->telefono=$telefono;
    
    }
    public function __toString()
    {
        return " ".$this->getNombre()."\n" . 
                $this->getApellido(). "\n". 
                $this->getNroDocumento(). "\n". 
                $this->getDireccion(). "\n". 
                $this->getMail(). "\n".
                $this->getTelefono(). "\n";
    }
}
?>