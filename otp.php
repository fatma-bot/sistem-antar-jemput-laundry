<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .otp {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <center>
        <h4>Enter OTP</h4>
        <p>Please enter OTP sent to +62</p> <br><br>
        <div class="otp">
            <input type="number" name="otp_1" required>
            <input type="number" name="otp_2" required>
            <input type="number" name="otp_3" required>
            <input type="number" name="otp_4" required>
        </div>
        <br>
        <button type="submit" style="width: 20%; border-radius: 8px;"><a href="lokasi.php" style="text-decoration: none; color: white;">CONFIRM</a></button> <br>
        <p>Didn't receive OTP? <a href="#">Resend OTP</a></p><br><br><br>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </center>
</body>
</html>