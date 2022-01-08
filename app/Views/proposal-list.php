<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url('Home')?>">CERENITY STUDIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('Home')?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Intro</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Introduction</a></li>
                            <li><a class="dropdown-item" href="#">News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Business Introduction</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Business Area</a></li>
                            <li><a class="dropdown-item" href="#">Our Game</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('JobDetails')?>">Job Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('/submit-proposal') ?>">Submit
                                    Proposal</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/proposal-list') ?>">Proposal List</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="mt-5 text-center">PROPOSAL LIST</h1>
    <!-- PROPOSAL TABLE LIST GOES HERE! -->
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Game License</th>
                    <th scope="col">Description</th>
                    <th scope="col">Proposal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($proposal as $data => $value) { ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $value['company_name'] ?></td>
                    <td><?= $value['game_license'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><a href="<?= base_url('document/'.$value['file_name']) ?>">Download</a></td>
                    <td><?= $value['status'] ?></td>
                    <td><a href="<?= base_url('edit-request/'.$value['proposal_id']) ?>" class="text-primary"><i
                                class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="<?= base_url('delete-request/'.$value['proposal_id']) ?>" class="text-danger"><i
                                class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

<footer class="footer-48201">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pr-md-5">
                <a href="#" class="footer-site-logo d-block mb-4">Cerenity Studio</a>
                <p>CEO Cerenity Studio Or., Soleil et Lune Or. : Naufal Fahim Murran | Address: Gedung Gandaria 8 Lt.20
                    Unit B-C, Gandaria City Jl.Sultan Iskandar Muda Kebayoran Lama, Jakarta
                    Selatan, Kota Jakarta Selatan, DKI Jakarta (12240)</p>
                <p>Personal Information Manager: Naufal Fahim Murran | Phone: (+62) 8221-3389-568 | Fax: (021) 29303499
                </p>
                <p></p>
            </div>
            <div class="col-md">
                <ul class="list-unstyled nav-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
            </div>
            <div class="col-md text-md-center">
                <p class=""><a href="mailto:support@cs.sferenity.org" class="btn btn-tertiary">Contact Us</a></p>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 text-center">
                <div class="copyright mt-5 pt-5">
                    <p><small>&copy; 2019-2021 All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->

</html>