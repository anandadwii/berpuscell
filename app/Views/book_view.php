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


<body>
    <ul class="nav justify-content-center menucolor">
        <li class="nav-item">
            <a class="nav-link menucolor" href="<?= base_url(); ?>/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menucolor" href="<?= base_url(); ?>/track">TRACK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menucolor-active" href="<?= base_url(); ?>/booking">BOOKING</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menucolor" href="<?= base_url(); ?>/about">ABOUT US</a>
        </li>
    </ul>


    <div class="container mt-5 bookingcont w-100">
        <div class="container-fluid py5 row">
            <div class="row">
                <div class="col-6">
                    <div class="container bookform">
                        <div class="from-group">
                            <div class="mb-3">

                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="" placeholder="enter your name">
                            </div>
                        </div>
                        <div class="from-group">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="" placeholder="fill your Whatasapp number">
                            </div>
                        </div>
                        <div class="from-group">
                            <div class="mb-3">
                                <label class="form-label text-left">Problem</label>
                                <input type="text" class="form-control" id="" placeholder="explain your problem">
                            </div>
                        </div>
                        <div class="from-group">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" id="" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="bookingtext">MAKE</h2>
                    <div class="py-5">
                        <h2 class="rotation bookingtext">YOUR</h2>
                    </div>

                    <h2 class="bookingtext">RESERVATION</h2>
                    <h2 class="bookingtext">NOW!</h2>

                </div>
            </div>







        </div>

    </div>



    </div>
</body>

</html>