<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // POO EN PHP

    // CLASES
    class Persona{
        // propiedades
        public $nombre;
        private $edad;
        public $altura;
        // metodos
        public function __construct(string $n1 = 'SIN NOMBRE', int $e1 = 0, float $a1 = 0.00){
            // esto se ejecuta al realizar la instancia
            echo "se ejecutó la instancia";
            $this->nombre = $n1;
            $this->edad = $e1;
            $this->altura = $a1;
        }

        public function caminar() : void {
            echo  $this->nombre . " esta caminando";
        }

        // METODOS GETTERS Y SETTER

        public function getEdad() : int{
            return $this->edad;
        }

        public function setEdad(int $edad) : void{
            $this->edad = $edad;
        }
    }

    // OBJETO
    // INSTANCIA DE LA CLASE
    $persona1 = new Persona('Daniel', 29, 1.75);
    $persona2 = new Persona('Pedro', 30, 1.8);
    $persona3 = new Persona();
    // $persona4 = new Persona();

    $persona3->nombre = "Juan";
    $persona1->setEdad(45);


    
    
    echo '<pre>';
    var_dump($persona1);
    echo '</pre>';
    
    
    echo '<pre>';
    print_r($persona2);
    echo '</pre>';


    echo '<pre>';
    print_r($persona3);
    echo '</pre>';
    // caminar(); #Esto provoca un error 500
    $persona3->caminar();
    echo $persona1->nombre;
    echo $persona2->nombre;
    // $persona2->caminar();
    // $persona1->caminar();


    function saludar($nombre = 'A TODOS'){
        echo "Hola, $nombre";
    }

    saludar();