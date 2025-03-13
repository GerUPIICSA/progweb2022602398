<?php
class Persona {
    private $nombre;
    private $fecNac;
    private $tel;

    public function __construct($nombre, $fecNac, $tel){
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->tel = $tel;
    }

    //Nombre
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($value){
        $this->nombre = $value;
    }

    //Fecha
    public function getFecNac(){
        return $this->fecNac;
    }
    public function setFecNac($value){
        $this->fecNac = $value;
    }

    //Telefono
    public function getTel(){
        return $this->tel;
    }
    public function setTel($value){
        $this->tel = $value;
    }
    
    //Edad actual
    public function getEdad() {
        $fechaNacimiento = new DateTime($this->fecNac); //Convierte la fecha de nacimiento en un objeto (Datetime)
        $hoy = new DateTime(); //Obtiene la fecha actual
        $edad = $hoy->diff($fechaNacimiento)->y; //Calcula la diferencia en años.
        return $edad;
    }
}

//El cierre de php no se incluye porque el script debe ser incluido en otro