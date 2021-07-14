<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar DOkter</title>
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
    <table class="table" style="border: 1px solid #dddddd; ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Doctor</th>
                <th scope="col">Nama Doctor</th>
                <th scope="col">Umur</th>
            </tr>
        </thead>
        <tbody id="doctor-list">
        </tbody>
    </table>

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

    <script src="app_doctor_pasien.js"></script>
</body>

</html>