<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index Pasien</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/desain.css" rel="stylesheet">
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-firestore.js"></script>
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
                    <a class="nav-item nav-link" href="index.php">Home </a>
                    <a class="nav-item nav-link" href="indexpasien.php">Index Pasien <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="daftar_dokter.php">Daftar Dokter</a>
                    <a class="nav-item nav-link" href="jadwal.php">Atur Jadwal</a>
                    <a class="nav-item nav-link" href="jadwal_kamu.php">jadwalmu</a>
                    <a class="nav-item nav-link" href="index.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
            <h4>ENTRY perjanjian</h4>

            <!-- Form Daftar/Nambah Data Perjanjian -->
            <form id="add-perjanjian-form" action="#">
                <h4>Nambah perjanjian Data Form</h4>
                <div class="form-group col-md-6">
                    <label for="inputUsername4">Nama Doctor</label>
                    <input type="text" class="form-control" id="inputUsername4" name="nama_doctor">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputUsername4">Nama Pasien</label>
                    <input type="text" class="form-control" id="inputUsername4" name="nama_pasien">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputUsername4">Deskripsi</label>
                    <input type="text" class="form-control" id="inputUsername4" name="deskripsi">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputUsername4">Jadwal</label>
                    <input type="date" class="form-control" id="inputDate4" name="jadwal">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- Table Data Doctor -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Perjanjian</th>
                        <th scope="col">Nama Doctor</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Jadwal</th>
                    </tr>
                </thead>
                <tbody id="perjanjian-list">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyDgzE_rGFDH8YZb2b7mzMQUVjbJ4atTio4",
            authDomain: "rumkit-compfest.firebaseapp.com",
            projectId: "rumkit-compfest",
            storageBucket: "rumkit-compfest.appspot.com",
            messagingSenderId: "279840046418",
            appId: "1:279840046418:web:c89d19fbe198cf524e4e8b",
            measurementId: "G-GQQMHVJ4WE"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const db = firebase.firestore();
        db.settings({
            timestampsInSnapshots: true
        });
    </script>

    <script src="app_perjanjian_pasien.js"></script>
</body>

</html>