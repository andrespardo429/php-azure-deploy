<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><h1>Aplicación PHP Desplegada en Azure! - Actualizada</h1></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        h1 { margin-top: 0; }
        .info { 
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 ¡Aplicación PHP Desplegada en Azure!</h1>
        <p>Esta aplicación fue desplegada automáticamente usando GitHub Actions.</p>
        
        <div class="info">
            <h3>Información del Servidor:</h3>
            <p><strong>Fecha y Hora:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
            <p><strong>Versión de PHP:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Sistema Operativo:</strong> <?php echo PHP_OS; ?></p>
        </div>
        
        <div class="info">
            <h3>✅ Despliegue Exitoso</h3>
            <p>Si ves este mensaje, tu pipeline de CI/CD está funcionando correctamente.</p>
        </div>
    </div>
</body>
</html>