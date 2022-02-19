<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: aliceblue;">Laboratorio 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: aliceblue;" href="index.html">Clientes</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    </head>
<body>
<section>
<table class="table table-striped" table-layout: fixed width: 130px>
    
  <thead>
  </thead>
  <tbody>
    <tr class="table-active">
            <td>CODIGO:</td>
            <td>NOMBRE:</td>
            <td>APELLIDO:</td>
            <td>DUI:</td>
            <td>DIRECCION:</td>
            <td>TELEFONO:</td>
    </tr>
    <tr>
     
    </tr>
    <tr>
        <td>  <?php echo $_POST ['codigo'] ?></td>
        <td>  <?php echo $_POST ['nombres'] ?></td>
        <td>  <?php echo $_POST ['apellidos'] ?></td>
        <td>  <?php echo $_POST ['dui'] ?></td>
        <td>  <?php echo $_POST ['direccion'] ?></td>
        <td>  <?php echo $_POST ['telefono'] ?></td>
    </tr>
  </tbody>
</table>

</section>  
</body>
</html>