<!doctype html>
<html lang="en">

<head>
    <title>Search</title>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="icon shortcut" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-biru flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 d-lg-inline-block d-none" href="#">Admin Dashboard</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="<?= base_url() ?>/login/logout">Sign out</a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky-pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="search"></span>
                                Search
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="custsList">
                                <span data-feather="users"></span>
                                Customers List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="techsList">
                                <span data-feather="users"></span>
                                Technicians List
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h1">Search</h1>
            </div>

            <form class="row row-cols-lg-auto g-3 align-items-center">
                <div class="col-auto input-group input-group-lg">
                    <input class="form-control" type="text" placeholder="Invoice Number" id="searchInvoce">
                    <button type="submit" method="post" class="btn btn-primary">Search</button>
                </div>
            </form>
        </main>
    </div>

    <!-- Script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script>
        feather.replace({
            'aria-hidden': 'true'
        })
    </script>
</body>

</html>