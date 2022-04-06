<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" />
    <meta name="generator" content="Hugo 0.88.1" />
    <link rel="stylesheet" href="./assets/style/style.css" />
    <title>Barco</title>
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
    <!-- Bootstrap core CSS -->

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <?php 
      session_start();
      if(!isset($_SESSION["login"]))
        header("location:login.php");
      elseif(!$_SESSION["login"])
        header("location:login.php");
      
    ?>
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
      <span style="margin-left:20px;">Bienvenido de nuevo <?php echo $_SESSION["usuarioSESSION"]; ?></span>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="row-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Reserva el teu viatge</h1>
            <p class="lead text-muted">{text de exemple}</p>
            <p>
              <a href="#" id="btnReserva" class="btn btn-primary my-2"
                >RESERVA</a
              >
            </p>
          </div>
        </div>
      </section>
      <div class="col">
        <div class="card shadow-sm">
          <svg
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
          </svg>

          <div class="card-body">
            <p class="card-text">
              This is a wider card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  View
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Edit
                </button>
                
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
      

    </main>

    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Back to top</a>
        </p>
        <p class="mb-1">
          Album example is &copy; Bootstrap, but please download and customize
          it for yourself!
        </p>
        <p class="mb-0">
          New to Bootstrap? <a href="/">Visit the homepage</a> or read our
          <a href="../getting-started/introduction/">getting started guide</a>.
        </p>
      </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="./assets/js/index.js"></script>
  </body>
</html>
