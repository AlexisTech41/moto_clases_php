<?php

// Definición de la clase Moto
class Moto {
    // Propiedades de la clase
    public $cc;
    public $color;
    public $potencia;
    public $marca;
    public $modelo;

    // Constructor de la clase
    public function __construct($cc, $color, $potencia, $marca, $modelo) {
        // Inicialización de las propiedades
        $this->cc = $cc;
        $this->color = $color;
        $this->potencia = $potencia;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Método para mostrar la configuración de la moto
    public function mostrarConfiguracion() {
        echo "<h2>Configuración de la Moto</h2>";
        echo "<p>Cilindrada (CC): {$this->cc}</p>";
        echo "<p>Color: {$this->color}</p>";
        echo "<p>Potencia: {$this->potencia}</p>";
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
