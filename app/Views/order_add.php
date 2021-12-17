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
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="icon shortcut" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-biru flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Admin Dashboard</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="<?= base_url() ?>/login/logout">Sign out</a>
            </div>
        </div>
    </header>
    <div class="container-lg">
        <main class="col-md-9 ms-sm-auto col-lg-auto px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="h2">Add Order</h2>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="<?= base_url('admin/orders') ?>" type="button" class="btn btn-outline-danger">
                        <span data-feather="arrow-left"></span>
                        Back
                    </a>
                </div>
            </div>

            <form action="<?= base_url('admin/insertOrder') ?>" method="post">
                <div class="row mb-3 group-font">
                    <label for="addCustName" class="col-sm-2 col-form-label">Customer Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="custname" placeholder="John Doe">
                    </div>
                </div>
                <div class="row mb-3 group-font">
                    <label for="addProblem" class="col-sm-2 col-form-label">Problem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" type="text" name="problem" placeholder="Broken display, microphone, ..." rows="6" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="row mb-3 group-font">
                    <label for="addCustName" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select" type="text" name="status">
                            <option value="Received">Received</option>
                            <option value="On Progress">On Progress</option>
                            <option value="Quality Control">Quality Control</option>
                            <option value="Done">Done</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-success" type="submit" style="float: right;">
                    <span data-feather="edit-3"></span>
                    Add
                </button>
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