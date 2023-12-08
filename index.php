<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Configura tu Moto</title>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Configura tu Moto</h1>
    
    <form id="configuracionForm">
        <div class="mb-3">
            <label for="cc" class="form-label">Cilindrada (CC):</label>
            <input type="number" class="form-control" id="cc" name="cc" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>

        <div class="mb-3">
            <label for="potencia" class="form-label">Potencia:</label>
            <input type="number" class="form-control" id="potencia" name="potencia" required>
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <select class="form-select" id="marca" name="marca" required>
                <option value="" selected disabled>Selecciona una marca</option>
                <option value="yamaha">Yamaha</option>
                <option value="honda">Honda</option>
                <option value="suzuki">Suzuki</option>
                <option value="kawasaki">Kawasaki</option>
                <option value="harley">Harley-Davidson</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo:</label>
            <select class="form-select" id="modelo" name="modelo" required disabled>
                <option value="" selected disabled>Selecciona una marca primero</option>
            </select>
        </div>

        <button type="button" class="btn btn-primary" onclick="mostrarConfiguracion()">Enviar Configuración</button>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="configuracionModal" tabindex="-1" aria-labelledby="configuracionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configuracionModalLabel">Configuración de la Moto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="configuracionModalBody">
                <!-- Contenido del modal -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="configuracion.js"></script>
</body>
</html>
