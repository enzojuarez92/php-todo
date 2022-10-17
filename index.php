<!DOCTYPE html>
<html lang="en">

<head>
    <title>TODO PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/07cb5fc3fe.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center my-3">
        <h1 class="mb-3">Listado de Tareas</h1>
        <div class="row">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <td scope="col">TAREA</td>
                            <td scope="col">DESCRIPCION</td>
                            <td scope="col">VENCIMIENTO</td>
                            <td scope="col">ACCIONES</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once './views/show-task.php' ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <?php if (!$_GET) : ?>
                    <form class="text-start" action="./controllers/create.php" method="POST">
                        <?php include_once './views/create-task.php' ?>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>

</html>