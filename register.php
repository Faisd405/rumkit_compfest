<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Hospital Information Systemt</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/desain.css" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="login.php">Login</a>
                    <a class="nav-item nav-link active" href="#">Register</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="content">

        <div class="wrap">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang Di Hospital Information System</h1>
                <p class="lead">Ini adalah website Hospital Information System</p>
            </div>

            <form method="POST" action="tambahkonsumen_user_aksi.php">
                <h4>Register Form</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Nama Depan</label>
                        <input type="text" class="form-control" id="inputNamaDepan4" name="nama_depan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputName4">Nama Belakang</label>
                        <input type="text" class="form-control" id="inputNamaBelakang4" name="nama_belakang">
                    </div>
                </div>
                    <div class="form-group col-md-4">
                        <label for="inputNumber">Umur</label>
                        <input type="text" class="form-control" id="inputAge" name="umur" placeholder="17">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputUserName4">Username</label>
                        <input type="text" class="form-control" id="inputUsername4" name="Username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

</body>

</html>