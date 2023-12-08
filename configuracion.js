function mostrarConfiguracion() {
    const cc = $("#cc").val();
    const color = $("#color").val();
    const potencia = $("#potencia").val();
    const marca = $("#marca").val();
    const modelo = $("#modelo").val();

    // Enviar datos al servidor utilizando AJAX
    $.post("procesar.php", { cc, color, potencia, marca, modelo }, function(respuesta) {
        // Mostrar la respuesta en el modal
        $("#configuracionModalBody").html(respuesta);

        // Mostrar el modal
        $("#configuracionModal").modal("show");
    });
}

// Lógica para los selects dependientes
$("#marca").change(function() {
    const marcaSeleccionada = $(this).val();
    const modelos = obtenerModelos(marcaSeleccionada);

    // Limpiar y habilitar el select de modelos
    $("#modelo").empty().prop("disabled", false);

    // Agregar opciones al select de modelos
    modelos.forEach(modelo => {
        $("#modelo").append(`<option value="${modelo}">${modelo}</option>`);
    });
});

// Función de ejemplo para obtener modelos según la marca
function obtenerModelos(marca) {
    switch (marca) {
        case "yamaha":
            return ["YZF-R1", "MT-07", "FZ6R", "XTZ 125"];
        case "honda":
            return ["CBR1000RR", "CRF450L", "Rebel 500", "CB500X"];
        case "suzuki":
            return ["GSX-R1000", "DR-Z400S", "Boulevard M109R", "SV650"];
        case "kawasaki":
            return ["Ninja ZX-10R", "KLR 650", "Z650", "Vulcan S"];
        case "harley":
            return ["Sportster Iron 883", "Street Glide", "Softail Slim", "Road King"];
        default:
            return [];
    }
}
