<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <?php 
            if(isset($_GET['message'])) {
                if($_GET['message'] == "failed") { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%; height: 50%;">
                        <?php echo "login gagal"; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none'"></button>
                    </div>
                <?php
                }
                else if($_GET['message'] == "belum_login") { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%; height: 50%;">
                        <?php echo "anda harus login terlebih dahulu"; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none'"></button>
                    </div>
                <?php
                }
                else if($_GET['message'] == "regist_sukses") { ?>
                    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%; height: 50%;">
                        <?php echo "regist berhasil! silahkan login "; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none'"></button>
                    </div>
                    <?php
                }
                else if($_GET['message'] == "regist_gagal") { ?>
                    <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%; height: 50%;">
                        <?php echo "regist gagal."; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none'"></button>
                    </div>
                    <?php
                }
            }
        ?>


        <h4>LOGIN</h4>
        <p>Silahkan masukkan data diri anda</p>
        <form method="POST" action="login_proses.php">
        <div class="input-group mb-3" style="width: 50%;">
            <span class="input-group-text">@</span>
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="username" required>
              <label for="floatingInputGroup1">Username</label>
            </div>
          </div>
        <div class="input-group mb-3" style="width: 50%;">
            <span class="input-group-text"><img src="https://www.pinclipart.com/picdir/middle/130-1303682_security-password-2-icon-password-icon-in-png.png" style="width:20px; height: 20px;" alt=""></span>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingInputGroup1" placeholder="Password" name="password" required>
              <label for="floatingInputGroup1">Password</label>
            </div>
          </div>
        <button type="submit" style="width: 30%; border-radius: 8px;">LOGIN</button>
        </form>
        <p>Belum punya akun? <a href="registrasi.php">Daftar</a></p>
    </center>
</body>
</html>
