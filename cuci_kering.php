<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>
        Cuci Kering
        </a>
    </div>
    </nav>
    <center>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
            <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
        </svg> <?php echo (date("d F Y")); ?> 
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-distribute-horizontal" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5m-13 0a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5"/>
            <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg> Muara Karang
    </center>
    <h4>Pilih Jenis Pakaian</h4> <br>
    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Jaket Rp 50.000 @ item
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
             Jumlah item : <input type="number" name="jumlah_jaket" required> <br>
             <button type="submit" style="width: 30%; border-radius: 8px;"><a href="checkout.php" style="text-decoration: none; color: white;">CHECKOUT</a></button>
        </div>
    </div>
    <br>
    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Kemeja Rp 25.000 @ item
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
             Jumlah item : <input type="number" name="jumlah_kemeja" required> <br>
             <button type="submit" style="width: 30%; border-radius: 8px;"><a href="checkout.php" style="text-decoration: none; color: white;">CHECKOUT</a></button>
        </div>
    </div>
    <br>
    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Terusan/dress Rp 45.000 @ item
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
             Jumlah item : <input type="number" name="jumlah_terusan" required> <br>
             <button type="submit" style="width: 30%; border-radius: 8px;"><a href="checkout.php" style="text-decoration: none; color: white;">CHECKOUT</a></button>
        </div>
    </div>
    <br>
    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Celana Rp 30.000 @ item
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
             Jumlah item : <input type="number" name="jumlah_celana" required> <br>
             <button type="submit" style="width: 30%; border-radius: 8px;"><a href="checkout.php" style="text-decoration: none; color: white;">CHECKOUT</a></button>
        </div>
    </div>

    <br>
    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Kaos Rp 25.000 @ item
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
             Jumlah item : <input type="number" name="jumlah_kaos" required> <br>
             <button type="submit" style="width: 30%; border-radius: 8px;"><a href="checkout.php" style="text-decoration: none; color: white;">CHECKOUT</a></button>
        </div>
    </div>
    <br>
    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Rok Rp 35.000 @ item
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
             Jumlah item : <input type="number" name="jumlah_rok" required> <br>
             <button type="submit" style="width: 30%; border-radius: 8px;"><a href="checkout.php" style="text-decoration: none; color: white;">CHECKOUT</a></button>
        </div>
    </div>
</body>
</html>