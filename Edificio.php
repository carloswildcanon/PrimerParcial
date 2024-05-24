<?php
class Edificio{
    private $colInmuebles;
    private $direccion;
    private $objAdminitrador;

    public function __construct($direccion,$colInmuebles,$objAdminitrador)
    {
        $this->direccion=$direccion;
        $this->colInmuebles=$colInmuebles;
        $this->objAdminitrador=$objAdminitrador;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function getColInmuebles(){
        return $this->colInmuebles;
    }

    public function getObjAdministrador(){
        return $this->objAdminitrador;
    }

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setColInmueble($colInmuebles){
        $this->colInmuebles=$colInmuebles;
    }

    public function setObjAdministrador($objAdminitrador){
        $this->objAdminitrador=$objAdminitrador;
    }
/**
 * 
 * Modificar el método anterior para que implemente la 
 * funcionalidad solicitada y cumpla con las buenas prácticas propuestas en la materia
 */

    public function darInmueblesDisponibles($tipoUso,$costoMaximo)
        {
            $colInmuebleDisponibles=[];
            $colInmuebles=$this->getColInmuebles();
            foreach($colInmuebles as $unImueble){
                if($unImueble->getobInquilino()==null
                    && $unImueble->getTipoUso() == $tipoUso
                    && $unImueble-> getCostoMensual() <= $costoMaximo){
                         array_push($$colInmuebleDisponibles, $unImueble);
                }
            }
            return $colInmuebleDisponibles;
        }


    /**
* @param objeto $obj
* @return int
*/
public function buscarInmueble($obj){
    $colInmuebles=$this->getColInmuebles();
    $indiceInmueble=-1;
    $aux=true;
    $contador=0;
    if ($colInmuebles != null){
         while($aux){
               if ($colInmuebles[$contador]==$obj){
                    $indiceInmueble=$contador;
                    $aux=false;
              }
             if($contador == (count($colInmuebles)-1)){
                     $aux=false;
             }
           $contador=$contador+1;
        }
   }   

}


private function listadoInmuebles()
{
    $listado = "";
    $inmuebles = $this->getColInmuebles();
    foreach ($inmuebles as $inmueble) {
        $listado .= "Código: " . $inmueble->getCodigo() . ", Piso: " . $inmueble->getPiso() . ", Tipo: " . $inmueble->getTipo() . "\n";
    }
    return $listado;
}

/**
 * Implementar el método registrarAlquilerInmueble que recibe por parámetro
 *  el tipo de uso que se requiere para el inmueble (tipoUso) , el monto máximo (montoMaximo) 
 * a pagar por mes y la referencia a la persona que  desea alquilar (objPersona) elinmueble. 
 * Tener en cuenta que solo se va a poder realizar el alquiler de dicho inmueble si se verifica 
 * la política de alquiler de la empresa.  Por política de la empresa, los inmuebles de un edificio
 *  se deben ir ocupando por piso y por tipo. Es decir, hasta que todos los inmuebles de un piso y de 
 * un tipo no se encuentren ocupados, no es posible alquilar un inmueble de un piso superior.
*El método debe retornar verdadero en caso de poder registrar el alquiler o falso en caso contrario.
 *Recordar actualizar las estructuras correspondientes
 */
public function registrarAlquilerInmueble($tipoUso,$costoMaximo,$objPersona){
            
}

public function buscarInmuebles($obj)
{
    $i = 0;
    $enum = count($this->getColInmuebles());
    $bandera = -1;

    while ($i < $enum && $bandera == -1) {
        $inmueble = $this->getColInmuebles()[$i];
        if ($inmueble == $obj) {
            $bandera = $i;
        }
        $i++;
    }

    return $bandera;
}

public function calculaCostoEdificio()
{
    $costo = 0;
    foreach ($this->getColInmuebles() as $inmueble) {
        if ($inmueble->getObjInquilino() != null) {
            $costo += $inmueble->getCostoMensual();
        }
    }
    return $costo;
}
public function registrarAlquilerInmueble($tipoUso, $costoMaximo, $objPersona)
{
    $inmPisoChico = null;
    $estado = false;
    $colInmueblesDisp = $this->darInmueblesDisponibles($tipoUso, $costoMaximo);

    foreach ($colInmueblesDisp as $inmueble) {
        if ($inmPisoChico == null || $inmPisoChico->getPiso() > $inmueble->getPiso()) {
            $inmPisoChico = $inmueble;
        }
    }

    if ($this->buscarInmueble($inmPisoChico) != -1) {
        $estado = $inmPisoChico->alquilar($objPersona);
    }

    return $estado;
}

    public function concatenarObjetos(){
        $cadena="";
        foreach($this->getColInmuebles() as $objInmueble){
             $cadena=$cadena. $objInmueble->__toString(). "\n";
        }
        return $cadena;
    }
  
    public function __toString()
     {
      return $this->getDireccion(). " " .
                  $this->getObjAdministrador()->__toString(). " ".
                   $this-> concatenarObjetos(). " \n" ;
     }
}


?>