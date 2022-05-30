<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - SURVEYAJA.COM</title>

    <!-- style scss -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

    <!-- Fade Animation -->
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/aos/dist/aos.css') ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 48
        }

        .material-symbols-sharp {
            font-variation-settings:
            'FILL' 1,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
        }

        .material-symbols-sharp {
            font-variation-settings:
            'FILL' 1,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
        }
    </style>

</head>
<body class="bg-white">

    <!-- Header dan Navigasi -->
    <section class="" style="background: url('<?= base_url('/assets/images/img/bg-header.svg') ?>') no-repeat center bottom; background-size: cover; max-height: 561.5px;">

        <!-- Navigasi -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark py-3" style="background: #E31837;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('/assets/images/img/main-logo.svg') ?>" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" aria-current="page" href="<?= site_url('') ?>" style="font-size: 14px !important;">Beranda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="<?= base_url('') ?>#sec-fitur" style="font-size: 14px !important;">Fitur</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="<?= base_url('') ?>#sec-layanan" style="font-size: 14px !important;">Layanan Kami</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="<?= base_url('') ?>#sec-cara-mulai" style="font-size: 14px !important;">Cara Mulai</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="<?= site_url('harga') ?>" style="font-size: 14px !important;">Harga</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="<?= site_url('klien') ?>" style="font-size: 14px !important;">Klien</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="#" style="font-size: 14px !important;">Kontak</a>
                    </li>
                </ul>
                <button class="btn btn-warning rounded-pill text-uppercase text-danger fw-semibold btn-create-survey" type="button" style="padding: 15px 30px 15px 30px;">Buat Surveymu</button>
                </div>
            </div>
        </nav>
        <!-- Navigasi End -->

        <div class="header py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 pt-5 py-5 text-center">
                        <div class="align-self-center" data-aos="fade-up"data-aos-anchor-placement="center-center" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                            <h1 class="text-white fw-semibold">Mau <span class="text-warning">survey</span> atau <span class="text-warning">riset</span> ? <br> ya di Surveyaja.com</h1>
                            <p class="text-white fs-5 fw-lighter mt-2">Semakin mudah anda malakukan survey <br> Bersama Surveyaja.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->

    </section>