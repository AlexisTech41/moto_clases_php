<?php

// Definición de la clase Vehiculo (Clase Base)
class Vehiculo {
    // Propiedades de la clase base
    public $cc;
    public $color;
    public $potencia;

    // Constructor de la clase base
    public function __construct($cc, $color, $potencia) {
        // Inicialización de las propiedades
        $this->cc = $cc;
        $this->color = $color;
        $this->potencia = $potencia;
    }

    // Método para mostrar la configuración del vehículo
    public function mostrarConfiguracion() {
        echo "<h2>Configuración del Vehículo</h2>";
        echo "<p>Cilindrada (CC): {$this->cc}</p>";
        echo "<p>Color: {$this->color}</p>";
        echo "<p>Potencia: {$this->potencia}</p>";
    }
}

// Definición de la clase Moto que hereda de Vehiculo
class Moto extends Vehiculo {
    // Propiedades específicas de la clase Moto
    public $marca;
    public $modelo;

    // Constructor de la clase Moto
    public function __construct($cc, $color, $potencia, $marca, $modelo) {
        // Llama al constructor de la clase base
        parent::__construct($cc, $color, $potencia);

        // Inicialización de las propiedades específicas de Moto
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Método para mostrar la configuración de la moto
    public function mostrarConfiguracion() {
        // Llama al método de la clase base
        parent::mostrarConfiguracion();

        // Muestra las propiedades específicas de Moto
        echo "<p>Marca: {$this->marca}</p>";
        echo "<p>Modelo: {$this->modelo}</p>";
    }
}

// Verificar si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los valores del formulario
    $cc = $_POST["cc"];
    $color = $_POST["color"];
    $potencia = $_POST["potencia"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];

    // Crear una instancia de la clase Moto
    $moto = new Moto($cc, $color, $potencia, $marca, $modelo);

    // Mostrar la configuración de la moto
    $moto->mostrarConfiguracion();
}
?>
