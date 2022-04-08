<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css" />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/album/"
    />

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
        #asiento1 input:checked ~ .checkmark {
          transform: scale(1.5);
          background-color: green;
        }

        .card-body {
          /* background-color: red; */
          width: 607px;
          margin: 0 auto;
          transform: scale(1.7);
          /* position: absolute; */
          margin-top: 85px;
          margin-bottom: 300px;
        }

        .formulario_reyenar {
          width: 403px;
          margin: 0 auto;
          text-align-last: center;
          margin-top: 62px;
        }

        footer.text-muted.py-5.fixed-bottom {
          background-color: #212529;
          color: white;
        }

        input#exampleFormControlInput1 {
          margin-top: 23px;
          border-radius: 20px;
        }  

        textarea#exampleFormControlTextarea1 {
          margin-top: 23px;
          border-radius: 20px;
        }

        button.btn.btn-primary {
          margin-top: 20px;
          border-radius: 20px;
          padding: 12px;
          /* border-inline: 203px; */
        }
    </style>
    <!-- Bootstrap core CSS -->

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <title>RESERVA || BARCA</title>
</head>
<body>
<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Informació</h4>
              <p class="text-muted">
                Adentrat a una experiencia per el riu llobregat per veure las
                maravelloses vistes amb la millor compañia posible. T'enseñarem
                els racons mes amagats per que puguis disfutar al maxim. Compra
                la teva entrada y gaudeix de aquesta maravellosa experiencia
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contacte</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Twitter</a></li>
                <li><a href="#" class="text-white">Facebook</a></li>
                <li><a href="#" class="text-white">Email</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              aria-hidden="true"
              class="me-2"
              viewBox="0 0 24 24"
            >
              <path
                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"
              />
              <circle cx="12" cy="13" r="4" />
            </svg>
            <strong>Album</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarHeader"
            aria-controls="navbarHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <button class="navbar-toggler" type="submit">
            <a style="text-decoration: none; color: grey" href="./logout.php"
              >LOGOUT</a
            >
          </button>
        </div>
      </div>
    </header>

    <main class="main">
      
      <div class="col">
        <div class="card shadow-sm">
          <!-- <svg
            class="bd-placeholder-img card-img-top"
            width="100%"
            height="225"
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            aria-label="Placeholder: Thumbnail"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          >
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" />
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          </svg> -->
          <div class="formulario_reyenar">          
            <form action="enviar_reservas.php" id="formulario_reserva">
            <div class="form-group">
              <!-- <label for="exampleFormControlInput1">Nombre</label> -->
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
            </div>
            <div class="form-group">
              <!-- <label for="exampleFormControlInput1">Apellido</label> -->
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
            </div>
            <div class="form-group">
              <!-- <label for="exampleFormControlInput1">Correo</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo">
            </div>
            <div class="form-group">
              <!-- <label for="exampleFormControlInput1">Telefono</label> -->
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telefono">
            </div>
            <div class="form-group">
              <!-- <label for="exampleFormControlTextarea1">Comentarios</label> -->
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Reservar</button>
            </form>          
          </div>
          <div style="position:relative;" class="card-body">
            <img src="./assets/img/barca_mapa.gif">
            <form action="enviar_reservas.php" id="imagen_reserva">
                <input id="asiento1" style="position: absolute;top: 42%;left: 64px;" type="checkbox">
                <input id="asiento2" style="position: absolute;top: 53.5%;left: 64px;" type="checkbox">
                <input id="asiento3" style="position: absolute;top: 66%;left: 64px;" type="checkbox">

                <input id="asiento4" style="position: absolute;top: 25%;left: 121px;" type="checkbox">
                <input id="asiento5" style="position: absolute;top: 34%;left: 121px;" type="checkbox">
                <input id="asiento6" style="position: absolute;top: 58%;left: 121px;" type="checkbox">
                <input id="asiento7" style="position: absolute;top: 67%;left: 121px;" type="checkbox"> 

                <input id="asiento8" style="position: absolute;top: 25%;left: 141px;" type="checkbox">
                <input id="asiento9" style="position: absolute;top: 34%;left: 141px;" type="checkbox">
                <input id="asiento10" style="position: absolute;top: 58%;left: 141px;" type="checkbox">
                <input id="asiento11" style="position: absolute;top: 67%;left: 141px;" type="checkbox"> 

                <input id="asiento12" style="position: absolute;top: 25%;left: 186px;" type="checkbox">
                <input id="asiento13" style="position: absolute;top: 34%;left: 186px;" type="checkbox"> 
                <input id="asiento14" style="position: absolute;top: 58%;left: 186px;" type="checkbox"> 
                <input id="asiento15" style="position: absolute;top: 67%;left: 186px;" type="checkbox">  
               
                <input id="asiento16" style="position: absolute;top: 25%;left: 206px;" type="checkbox">
                <input id="asiento17" style="position: absolute;top: 34%;left: 206px;" type="checkbox"> 
                <input id="asiento18" style="position: absolute;top: 58%;left: 206px;" type="checkbox"> 
                <input id="asiento19" style="position: absolute;top: 67%;left: 206px;" type="checkbox"> 
                
                <input id="asiento20" style="position: absolute;top: 25%;left: 250px;" type="checkbox">
                <input id="asiento21" style="position: absolute;top: 34%;left: 250px;" type="checkbox"> 
                <input id="asiento22" style="position: absolute;top: 58%;left: 250px;" type="checkbox"> 
                <input id="asiento23" style="position: absolute;top: 67%;left: 250px;" type="checkbox">  

                <input id="asiento24" style="position: absolute;top: 25%;left: 270px;" type="checkbox">
                <input id="asiento25" style="position: absolute;top: 34%;left: 270px;" type="checkbox"> 
                <input id="asiento26" style="position: absolute;top: 58%;left: 270px;" type="checkbox"> 
                <input id="asiento27" style="position: absolute;top: 67%;left: 270px;" type="checkbox">  

                <input id="asiento28" style="position: absolute;top: 25%;left: 315px;" type="checkbox">
                <input id="asiento29" style="position: absolute;top: 34%;left: 315px;" type="checkbox"> 
                <input id="asiento30" style="position: absolute;top: 58%;left: 315px;" type="checkbox"> 
                <input id="asiento31" style="position: absolute;top: 67%;left: 315px;" type="checkbox">  
  
            </form>

          <!-- Haremos un formulario al lado de la imagen para reservar los sitios en el barco -->
          
          </div>
        </div>
      </div>
      

    </main>

    <footer class="text-muted py-5 fixed-bottom" style="position: relative; !important">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="./assets/js/index.js"></script>
    
</body>
</html>