<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      .card {
        background-color: #3D4EB0;
        color: #FFFFFF
      }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <center>
          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Hello, Username</a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
                      </svg>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                      </svg>
                      </a>
                    </li>
                </ul>
            </div>
          </nav>
          <div class="card">
            <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
              Home <br>
              Muara Karang
            </div>
          </div> <br>
          <h5>Latest Offer</h5> <br>
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/poster1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/poster2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/poster3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
          <br>

          <h5>What do you want to get done today?</h5>
          <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
              <div class="card">
                <a href="cuci_kering.php" style="text-decoration: none; color: #FFFFFF">
                <img src="image/cuci_kering.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style=" text-decoration: none;">Cuci Kering</h5>
                </div>
                </a>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="cuci_setrika.php" style="text-decoration: none; color: #FFFFFF">
                <img src="image/cuci_setrika.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cuci Setrika</h5>
                </div>
                </a>
              </div>
            </div>
          </div>
    </center>
    <nav class="navbar fixed-bottom bg-body-tertiary">
        <a class="navbar-brand" href="#">Fixed bottom</a>
      </div>
    </nav>
</body>
</html>