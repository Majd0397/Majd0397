<?php

    class Vehiculo
    {
        public $numero_de_llantas;
        private $kilometraje;

        //Esta funcion siempre se manda a llamar cuando instanciamos un objeto
        public function __construct()
        {
            $this -> inicializarKilometraje();
        }
        
        public function getKilometraje()
        {
            return  $this -> kilometraje;
        }

        private function inicializarKilometraje()
        {
            $this -> kilometraje = 0;
        }

        protected function setKilometraje($km)
        {
            $this->kilometraje = $this->kilometraje+$km;
            return $this->kilometraje;
        }
    }


    $auto = new Vehiculo(); //Instanciar objeto
    $auto->numero_de_llantas = 4;

    echo 'Numero de Llantas: '.$auto -> numero_de_llantas;
    echo '<br/>';
    echo 'El kilometraje es: ' .$auto ->getKilometraje();

    /**
     * Creo mi clase auto que hereda de Vehiculo
     */
    
    class Auto extends Vehiculo
    {
        public $marca = 'N/A';
        public $anio = 'N/A';
        public $color = 'N/A';

        function setPropiedades ($marcaRe,$colorRe,$anioRe='2022')
        {
            $this->marca=$marcaRe;
            $this->anio=$anioRe;
            $this->color=$colorRe;
        }

        function avanzar ($km)
        {
            return $this->setKilometraje($km);
        }
    }

    echo '<br/>---------------------<br/>';
    $bocho = new Auto();
    $bocho->setPropiedades('Vw','rojo',2020);
    $bocho->numero_de_llantas = 4;
    echo '<br/>';
    echo 'Numero de Llantas: '.$bocho->numero_de_llantas.'<br/>';
    echo 'Marca: '.$bocho->marca.'<br/>';
    echo 'Color: '.$bocho->color.'<br/>';
    echo 'Año: '.$bocho->anio.'<br/>';
    echo 'El Kilometraje es: '.$bocho->getKilometraje().'<br/>';

    $bocho ->avanzar(20);

    echo 'El Kilometraje es: '.$bocho->getKilometraje().'<br/>';

    $bocho ->avanzar(20);

    echo 'El Kilometraje es: '.$bocho->getKilometraje().'<br/>';
?>