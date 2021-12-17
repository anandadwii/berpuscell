<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-3">
        <h2>Registrasi User</h2>
        <p>Lengkapi isian formulir di bawah ini:</p>
        <?= $validation->listErrors(); ?>
        <form action="<?= base_url() ?>/register/submitregister" method="POST">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="cpassword" placeholder="Masukkan Konfirmasi Password" name="cpassword">
                <label for="cpassword">Konfirmasi Password</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Depan" name="nama">
                <label for="nama">Nama</label>
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <h5>Sudah Punya akun? login <a href="<?= base_url() ?>/login">disini</a></h5>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>