<?php include('app/config.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Parqueo Unifranz</title>
</head>
<body style="background-image: url('img/piso2.jpg');
            background-repeat: no-repeat;
            z-index: -3;
            background-size: 100vw 100vh">


<!-- Menú Principal -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/parqueo.jpg" alt="" width="30" height="30" class="d-inline-block align-text-top">
      PARQUEO UNIFRANZ
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">DÍA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">MES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">FICHA</a>
        </li>     
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      INGRESAR
      </button>
      </form>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INICIO DE SESIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="exampleInputEmail1">Usuario/Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn_ingresar">Ingresar</button>
      </div>
    </div>
  </div>
</div>

<!-- Posiciones de sitios en el parqueo -->
<div class="container">
    <table>
        <tr>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>1</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>2</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>            
            <td width="100px">
                <p>
                    <center>
                        <h3><b>3</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>4</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>5</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>6</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>7</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>8</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>9</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>10</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>            
        </tr>

        <tr>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>11</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>12</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>            
            <td width="100px">
                <p>
                    <center>
                        <h3><b>13</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>14</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>15</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>16</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>17</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>18</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>19</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>
            <td width="100px">
                <p>
                    <center>
                        <h3><b>20</b></h3>
                        <img src="img/auto1.png" width="50px" alt="">
                    </center>
                </p>
            </td>            
        </tr>
    </table>
</div>


    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script src="public/js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
</body>
</html>