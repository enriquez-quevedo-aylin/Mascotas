<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="./public/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./public/css/estilo.css">
    <title>CRUD de Mascotas</title>

    <style>
        .add-btn {
    margin-bottom: 40px;
    background: #ff7f50;   /* color naranja/coral */
    border: none;
    color: #fff;
    font-weight: 600;
    padding: 10px 25px;
    border-radius: 12px;
    transition: transform 0.2s, box-shadow 0.2s;
}

.add-btn:hover {
    background: #ff6347; /* tono más oscuro */
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

        body {
            background: #f0f4f8;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-weight: 600;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        .card-mascota {
            width: 300px;
            border-radius: 15px;
            padding: 20px;
            margin: 15px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-mascota:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.2);
        }

        .card-header {
            font-weight: 500;
            font-size: 1.2rem;
            color: #fff;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .card-body p {
            margin: 5px 0;
            font-size: 0.95rem;
        }

        .btn-card {
            margin: 5px;
            border-radius: 8px;
        }

        .add-btn {
            margin-bottom: 40px;
        }

        .mascota-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
