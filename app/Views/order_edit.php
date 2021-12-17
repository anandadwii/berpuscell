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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="icon shortcut" type="image/x-icon" href="<?= base_url(); ?>/favicon.ico">
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
                <h2 class="h2">Edit Order</h2>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="<?= base_url('admin/orders/') ?>" type="button" class="btn btn-outline-danger">
                        <span data-feather="arrow-left"></span>
                        Back
                    </a>
                </div>
            </div>

            <?php
            if ($orders) :
            ?>
                <form action="<?= base_url('admin/updateOrder') ?>" method="post">
                    <div class="row mb-3 group-font">
                        <label for="editInvoice" class="col-sm-2 col-form-label">Invoice</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="invoice" readonly value="<?= $orders['invoice'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3 group-font">
                        <label for="editCustName" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="custname" value="<?= $orders['custname'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3 group-font">
                        <label for="editProblem" class="col-sm-2 col-form-label">Problem</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="text" name="problem" rows="6" style="resize:none;"><?= $orders['problem'] ?></textarea>
                        </div>
                    </div>
                    <div class="row mb-3 group-font">
                        <label for="editStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" type="text" name="status" value="<?= $orders['status'] ?>">
                                <option value="Received">Received</option>
                                <option value="On Progress">On Progress</option>
                                <option value="Quality Control">Quality Control</option>
                                <option value="Done">Done</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 group-font">
                        <label for="editDateReceivedOrder" class="col-sm-2 col-form-label">Date Received</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text"><span data-feather="calendar"></span></span>
                                <input class="form-control datepicker" type="text" name="datereceived" style="padding: 0.375rem 0.75rem !important;" value="<?= $orders['datereceived'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 group-font">
                        <label for="editDateDoneOrder" class="col-sm-2 col-form-label">Date Done</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text"><span data-feather="calendar"></span></span>
                                <input class="form-control datepicker" type="text" name="datedone" style="padding: 0.375rem 0.75rem !important;" value="<?= $orders['datedone'] ?>">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-outline-success" style="float: right;">
                        <span data-feather="edit-3"></span>
                        Edit
                    </button>
                </form>
            <?php
            endif;
            ?>
        </main>
    </div>

    <!-- Script  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        feather.replace({
            'aria-hidden': 'true'
        })

        $('.datepicker').datepicker({
            format: 'yyyy/mm/dd'
        });
    </script>
</body>

</html>