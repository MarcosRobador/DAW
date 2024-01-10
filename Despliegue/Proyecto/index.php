<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Botini</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#precio">Precios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#caracteristicas">Características</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <div class="imagen-fondo" id="#inicio">
      <img src="img/fondo.png" alt="fondo">
    </div>
    
    
  <div class="image-gallery" id="precio">
    <div class="image">
      <h3>Dunk</h3>
        <img src="img/dunkcacao.jpg" alt="Dunk Cacao">
      <h4>Precio: 130€</h4>
    </div>
    <div class="image">
      <h3>AF1</h3>
        <img src="img/af1.jpeg" alt="AF1">
      <h4>Precio: 100€</h4>
    </div>
    <div class="image">
      <h3>Forum Low</h3>
        <img src="img/forumLow.jpg" alt="ForumLow">
      <h4>Precio: 100€</h4>
    </div>
  </div>

  
    <div class="image-gallery">
      <div class="image">
        <h3>Converse</h3>
          <img src="img/converse.jpeg" alt="Converse">
        <h4>Precio: 90€</h4>
      </div>
      <div class="image">
        <h3>Vans</h3>
          <img src="img/vans.jpeg" alt="Vans">
        <h4>Precio: 65€</h4>
      </div>
      <div class="image">
        <h3>Jordan 1</h3>
          <img src="img/jordan1.jpeg" alt="Jordan1">
        <h4>Precio: 130€</h4>
      </div>
    </div>

    <div class="image-gallery">
      <div class="image">
        <h3>Gazelle</h3>
          <img src="img/gazelle.jpeg" alt="Gazelle">
        <h4>Precio: 70€</h4>
      </div>
      <div class="image">
        <h3>Jordan Retro 4</h3>
          <img src="img/jordanRetro4.jpg" alt="JordanRetro4">
        <h4>Precio: 120€</h4>
      </div>
      <div class="image">
        <h3>Air Max</h3>
          <img src="img/airMax.jpeg" alt="AirMax">
        <h4>Precio: 100€</h4>
      </div>
    </div>

    <form method="post">
      <input type="number" name="num1" placeholder="Número 1" required>
      <input type="number" name="num2" placeholder="Número 2" required>
      <select name="operacion">
          <option value="suma">Suma</option>
          <option value="resta">Resta</option>
          <option value="multiplicacion">Multiplicación</option>
          <option value="division">División</option>
      </select>
      <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operacion = $_POST['operacion'];

      function calcular($num1, $num2, $operacion) {
          switch ($operacion) {
              case 'suma':
                  return $num1 + $num2;
              case 'resta':
                  return $num1 - $num2;
              case 'multiplicacion':
                  return $num1 * $num2;
              case 'division':
                  if ($num2 == 0) {
                      return "Error: División por cero.";
                  } else {
                      return $num1 / $num2;
                  }
              default:
                  return "Operación no válida";
          }
      }

      $resultado = calcular($num1, $num2, $operacion);
      echo "<p>Resultado: " . $resultado . "</p>";
  }
  ?>





  <div class="caracteristicas" id="caracteristicas"> 
    <h1>Características</h1>
    <p>En Botini, nos enorgullecemos de ofrecer una selección 
      premium de calzados para todos los gustos y ocasiones. Navega a través de 
      nuestra colección y descubre:</p>

    <p>Marcas de Renombre Mundial: Elige entre las mejores marcas, conocidas por su
      calidad y diseño excepcional.</p>
    <p>Estilos para Cada Ocasión: Desde zapatillas deportivas de alto rendimiento 
      hasta elegantes zapatos de vestir, encuentra el par perfecto para cada 
      momento de tu vida.</p>
    <p>Calidad Inigualable: Cada par de zapatos en nuestro catálogo ha sido 
      seleccionado por su excelencia en artesanía y durabilidad.</p>
  </div>

  <div id="contacto" class="seccion-contacto">
    <div class="container contacto">
      <div class="row">
        <div class="col-md-5 border-right mr-4">
          <h2>CONTACTO</h2>
          <form>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary boton-enviar">Enviar Mensaje</button>
          </form>
        </div>
        <div class="col-md-5 border-left ml-4">
          <h2>UBICACION</h2>
          <iframe class="mapa-responsivo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12678.601724304739!2d-5.931715987391038!3d37.39809845013164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126f311a421575%3A0xee06aca07d9f2f6c!2sSevilla%20Este%2C%20Sevilla!5e0!3m2!1ses!2ses!4v1699912931579!5m2!1ses!2ses" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>  
      </div>  
    </div>
  </div>   
  
  <div class="container-footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="d-flex flex-grow-1 justify-content-start align-items-center">
        <a href="/" class="text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">© 2024 Marcos Robador Mateos</span>
      </div>
  
      <ul class="nav d-flex justify-content-end list-unstyled">
        <li class="espacio-icono"><a class="text-muted" href="tu-enlace-a-instagram"><i class="fab fa-instagram"></i></a></li>
        <li class="espacio-icono"><a class="text-muted" href="https://www.linkedin.com/in/marcos-robador-mateos-7b3484252/"><i class="fab fa-linkedin"></i></a></li>
        <li class="espacio-icono"><a class="text-muted" href="https://github.com/MarcosRobador"><i class="fab fa-github"></i></a></li>
      </ul>
    </footer>
  </div>

</body>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>