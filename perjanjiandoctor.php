<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Doctor</title>

    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-firestore.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/simple-sidebar.css" rel="stylesheet">



</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:loginadmin.php?pesan=gagal");
    }
    ?>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Menu Navigasi </div>
            <div class="list-group list-group-flush">
                <a href="indexadmin.php" class="list-group-item list-group-item-action bg-light">Home</a>
                <a href="datadoctor.php" class="list-group-item list-group-item-action bg-light">Doctor</a>
                <a href="perjanjiandoctor.php" class="list-group-item list-group-item-action bg-light">Perjanjian Doctor</a>
                <a href="logoutadmin.php" class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="container-fluid">
            <h4>ENTRY Doctor</h4>

            <!-- Form Daftar/Nambah Data Perjanjian -->
            <form id="add-perjanjian-form" action="#">
                <h4>Add Doctor Data Form</h4>
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
            <br>
            <!-- Form Edit Data Perjanjian -->
            <form id="edit-perjanjian-form" action="#">
                <h4>Add Doctor Data Form</h4>
                <div class="form-group col-md-6">
                    <label for="inputUsername4">ID Perjanjian</label>
                    <input type="text" class="form-control" id="inputIDe4" name="id_perjanjian">
                </div>
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

                <button type="submit" class="btn btn-primary">EDIT</button>
            </form>
            <br>

            <!-- Table Data Doctor -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Perjanjian</th>
                        <th scope="col">Nama Doctor</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="perjanjian-list">

                </tbody>
            </table>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

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

    <script src="app_perjanjian.js"></script>
</body>

</html>