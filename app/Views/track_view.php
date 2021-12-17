<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles2.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Berpus Cell</title>
</head>


<body class="text-center">
    <ul class="nav justify-content-center menucolor">
        <li class="nav-item">
            <a class="nav-link menucolor" href="<?= base_url(); ?>/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menucolor-active" href="<?= base_url(); ?>/track">TRACK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menucolor" href="<?= base_url(); ?>/booking">BOOKING</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menucolor" href="<?= base_url(); ?>/about">ABOUT US</a>
        </li>
    </ul>
    <div class="container mt-5 py-5">
        <div class="col md-6 mb-5 py-5">
            <div class="row">
                <h1>TRACK YOUR SERVICE STATUS</h1>
            </div>
        </div>
        <form action="" method="post">
            <div class="mb-3">
                <input class="inputtrack" name="invoice" type="text" class="form-control" id="" placeholder="INPUT YOUR INVOICE HERE">
            </div>

            <div class="col mt-5 py-5 track">
                <div class="row ">


                    <button type="submit" method="post" class="btn btn-secondary">Search</button>

                </div>
            </div>
        </form>
    </div>


</body>

</html>