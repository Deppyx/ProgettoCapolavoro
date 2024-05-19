<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .navbar .navbar-nav .nav-link {
      display: flex;
      align-items: center;
      font-family: "Century Gothic", sans-serif;
    }

    .navbar {
      background: #f8f8f8;
    }

    #carouselExample {
      max-width: 60%;
      margin: 0 auto;
    }

    #testo1, #testo2 {
      max-width: 63%;
      margin: 0 auto;
      font-size: 16.5px;
      font-family: "Century Gothic", sans-serif;
    }

    .vertical-text {
      writing-mode: vertical-rl;
      transform: rotate(-180deg);
      color: #aaaaaa; 
      font-size: 17px;
      font-family: "Century Gothic", sans-serif;
    }

    .left-align {
      text-align: left;
    }

    #testo1::before, #testo1::after {
      content: "";
      position: absolute;
      background-color: #e3e3e3;
      width: 2px;
      height: calc(160%);
      top: 210px;
      bottom: 280px;
      font-family: "Century Gothic", sans-serif;
    }

    #testo1::before {
      left: 75px;
    }

    #testo1::after {
      right: 75px;
    }

    .ng-star-inserted h2.title-no-bold, .carousel-title-p-mobile, #testo2 h2.title-no-bold {
      margin-bottom: 0;
    }

    .card {
  /* Altezza minima per evitare sovrapposizioni */
  min-height: 350px; /* Modifica questo valore in base alle tue esigenze */
  background-color: #f8f8f8;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  height: 100%;
  margin-bottom: 40px; /* Modifica il valore del margine inferiore qui */
  width: 300px;
  margin-right: 30px;
}


    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .row-equal > .col {
      display: flex;
    }

    .card-equal {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .card-equal .card-body {
      flex: 1;
    }

    .header {
      text-align: center;
      background-color: #ececec;
    }

    .header img {
      margin: 20px 0;
      max-width: 70%;
      height: auto;
      max-height: 150px;
    }

    .footer {
      width: 100%;
      height: 100px;
      background-color: #f8f8f8;
      color: #333;
      padding: 20px 0 10px;
      position: fixed;
      bottom: 0;
      display: none;
    }

    footer a {
      color: #333;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    footer svg.bi {
      fill: #333;
    }

    .carousel-item {
      transition: opacity 1s ease-in-out;
    }

    .navbar .navbar-nav .nav-link svg {
      margin-right: 5px;
    }

    body {
      font-family: "Century Gothic", sans-serif;
    }

    .parallax-bg {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
    }

    .card:hover {
      transform: translateY(-5px);
    }
    
    .card-header {
      background-color: #e3e3e3;
    }
    
    .card-title {
      font-size: 1.5rem;
    }
    
    .list-unstyled {
      font-size: 1rem;
    }
  
  .row-cols-1 > .col,
  .row-cols-md-3 > .col {
  padding: 30px 30px; /* Modifica il valore dei padding qui */
  margin-right: 50px; /* Modifica il valore del margine destro qui */
  }
  </style>
</head>
<body>
  <div class="header">
    <img src="titolo.png" alt="Header Photo">
  </div>

  <nav class="navbar navbar-expand-md sticky-top border-bottom" >
    <div class="container" >
      <a class="navbar-brand d-md-none" href="#">
        <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg>
        Aperture
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav flex-grow-1 justify-content-between">
            <li class="nav-item"><a class="nav-link" href="ferr.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-droplet me-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
              </svg>
            </a></li>
            <li class="nav-item"><a class="nav-link" href="prenota.php">Prenota</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
            <li class="nav-item">
              <div class="d-flex align-items-center">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 ms-2" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <br>
  <br>
  <br>
  <main>
  <div class="row row-cols-1 row-cols-md-4 mb-3 text-center" id="testo1">

      <?php
        // Includi il file di connessione al database
        include 'connessione.php';

        // Query per recuperare i dati dei pacchetti dal database
        $sql = "SELECT * FROM pacchetto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output dei dati all'interno delle card
            while($row = $result->fetch_assoc()) {
                echo '<div class="col">';
                echo '<div class="card mb-4 rounded-3 shadow-sm">';
                echo '<div class="card-header py-3">';
                echo '<h4 class="my-0 fw-normal">' . $row["Tipo"] . '</h4>';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<h1 class="card-title pricing-card-title">€' . $row["Costo"] . '</h1>';
                echo '<img src="water.jpg" alt="">'; 
                echo '<br>';
                echo '<ul class="list-unstyled mt-3 mb-4">';
                echo '<li>' . $row["Durata"] . '</li>';
                echo '<li>' . $row["Descrizione"] . '</li>';
                echo '</ul>';
                echo '<button type="button" class="w-100 btn btn-lg btn-outline-primary">Scegli</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Nessun risultato trovato";
        }
        $conn->close();
      ?>
    </div>
  </main>

 
  <div class="footer">
    <div class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-body-secondary">Centro Termale SR</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
          </svg>
        </a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
        </a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
        </a></li>
      </ul>
    </div>
  </div>
  
  <script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  // Verifica se la posizione verticale dello scroll è vicina o uguale alla fine della pagina
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100) {
    // Se si è vicini o alla fine della pagina, mostra il footer
    document.querySelector('.footer').style.display = "block";
  } else {
    // Altrimenti, nascondi il footer
    document.querySelector('.footer').style.display = "none";
  }
}


  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>