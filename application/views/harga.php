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
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white active" aria-current="page" href="<?= site_url('') ?>" style="font-size: 14px !important;">Beranda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="#" style="font-size: 14px !important;">Fitur</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="#" style="font-size: 14px !important;">Layanan Kami</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="#" style="font-size: 14px !important;">Cara Mulai</a>
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
                <button class="btn btn-warning rounded-pill text-uppercase text-danger fw-semibold" type="submit" style="padding: 15px 30px 15px 30px;">Buat Surveymu</button>
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

    <!-- Harga -->
    <section class="d-flex flex-column py-5 mt-lg-0 mt-5" style="margin-top: -125px !important;">
        <div class="container d-lg-block d-none">
            <div class="row mb-3 text-center">
                <div class="col-3">
                    <div class="card mb-4 rounded-3 border-secondary border-opacity-25 border-5">
                        <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                            <h5 class="my-0 fw-normal">Layanan</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4">
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Registrasi
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Dashboard
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Download Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Deskriptif
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Pertanyaan Tak Terbatas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Input Kuesioner
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Validitas dan Reliabilitas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Manajemen Survey
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Analisis Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Konsultasi Hasil
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Laporan hasil
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row row-cols-4">
                        <div class="col">
                            <div class="card mb-3 rounded-3 border-secondary border-opacity-25 border-5">
                                <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                                    <h5 class="my-0 fw-bold">Gratis</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-4">
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-2">                                
                                <span class="badge rounded-pill border border-2 border-white text-white fw-semibold align-self-start px-2 py-1 mb-2">Favorit</span>
                                <h6 class="fw-bold">Gratis</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3 rounded-3 border-secondary border-opacity-25 border-5">
                                <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                                    <h5 class="my-0 fw-bold">Junior</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-4">
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-1">
                                <span class="badge rounded-pill border border-2 border-white text-white fw-semibold align-self-start px-2 py-1 mb-2">Favorit</span>
                                <h6 class="fw-bold">Rp. 150.000</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3 rounded-3 border-secondary border-opacity-25 border-5">
                                <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                                    <h5 class="my-0 fw-bold">Awesome</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-4">
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-secondary">
                                                cancel
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-1">
                                <span class="badge rounded-pill border border-2 border-warning text-danger fw-semibold align-self-start px-2 py-1 mb-2">Favorit</span>
                                <h6 class="fw-bold">Rp. 500.000</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 border-secondary border-opacity-25 border-5">
                                <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                                    <h5 class="my-0 fw-bold">Fantastic</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-4">
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                        <li class="py-2 d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-sharp text-warning">
                                                check_circle
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <h6 class="fw-normal text-muted"><del>Rp. 9.000.000</del></h6>
                                <h6 class="fw-bold">Rp. 5.000.000</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-lg-none d-block">
            <div class="row row-cols-1 mb-3 text-center">
                
                <div class="col">
                    <div class="card mb-4 rounded-3 border-secondary border-opacity-25 border-5">
                        <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                            <h5 class="my-0 fw-bold">Gratis</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4">
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Registrasi
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Dashboard
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Download Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Deskriptif
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Pertanyaan Tak Terbatas
                                </li>
                            </ul>
                            <div class="text-center">
                                <h6 class="fw-bold">Gratis</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 border-secondary border-opacity-25 border-5">
                        <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                            <h5 class="my-0 fw-bold">Junior</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4">
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Registrasi
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Dashboard
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Download Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Deskriptif
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Pertanyaan Tak Terbatas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Input Kuesioner
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Validitas dan Reliabilitas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Manajemen Survey
                                </li>
                            </ul>
                            <div class="text-center">
                                <h6 class="fw-bold">Rp. 150.000</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 border-secondary border-opacity-25 border-5">
                        <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                            <h5 class="my-0 fw-bold">Awesome</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4">
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Registrasi
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Dashboard
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Download Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Deskriptif
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Pertanyaan Tak Terbatas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Input Kuesioner
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Validitas dan Reliabilitas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Manajemen Survey
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Analisis Data
                                </li>
                            </ul>
                            <div class="text-center">
                                <span class="badge rounded-pill border border-2 border-warning text-danger fw-semibold align-self-start px-2 py-1 mb-2">Favorit</span>
                                <h6 class="fw-bold">Rp. 500.000</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 border-secondary border-opacity-25 border-5">
                        <div class="card-header py-3 border-secondary border-opacity-25 bg-transparent">
                            <h5 class="my-0 fw-bold">Fantastic</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4">
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Registrasi
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Dashboard
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Download Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Deskriptif
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Pertanyaan Tak Terbatas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Input Kuesioner
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Validitas dan Reliabilitas
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Manajemen Survey
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Analisis Data
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Konsultasi Hasil
                                </li>
                                <li class="py-2 d-flex justify-content-center align-items-center">
                                    Laporan hasil
                                </li>
                            </ul>
                            <div class="text-center mt-3">
                                <h6 class="fw-normal text-muted"><del>Rp. 9.000.000</del></h6>
                                <h6 class="fw-bold">Rp. 5.000.000</h6>
                                <button class="btn btn-danger btn-sm rounded-pill text-uppercase text-white fw-semibold mx-auto" type="submit" style="padding: 10px 15px 10px 15px;">Buat surveymu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Kami -->
    <section class="d-flex flex-column py-5 mt-lg-0 mt-5">

        <div class="mx-auto text-center">
            <img class="mx-auto mb-2" src="<?= base_url('/assets/images/icon/cleint-kami.svg') ?>" alt="">
            <h5 class="fw-bold">Client <span class="text-danger">Kami</span></h5>
            <p class="text-secondary text-decoration-underline">Simak lebih lengkap pengalaman mereka</p>
        </div>

        <div class="container d-flex flex-lg-row flex-column justify-content-center align-items-center mt-3">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-aksipangan.png') ?>" alt="" style="height: 30px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-observasi.png') ?>" alt="" style="height: 40px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-pangannews.png') ?>" alt="" style="height: 35px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-radarsuara.png') ?>" alt="" style="height: 40px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-panganinitiative.png') ?>" alt="" style="height: 40px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
        </div>

        <div class="mx-auto text-center mt-5">
            <h5 class="fw-bold">Partner Lain</h5>
        </div>

        <div class="container d-flex flex-lg-row flex-column justify-content-center align-items-center mt-3">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-.png') ?>" alt="" style="height: 70px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-kementrianperindustrian.png') ?>" alt="" style="height: 70px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
            <img class="mx-3 my-lg-0 my-4" src="<?= base_url('/assets/images/client/logo-kementrianpertanian.png') ?>" alt="" style="height: 90px;" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
        </div>

    </section>

    <!-- Apa itu Surveyaja.com -->
    <section class="d-flex flex-column py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="text-lg-start text-center">
                        <img class=" mb-2" src="<?= base_url('/assets/images/icon/apa-survey-aja.svg') ?>" alt="">
                        <h5 class="fw-bold">Apa itu <span class="text-danger">Surveyaja.com</span></h5>
                        <p class="text-secondary text-justify">Membantu Anda Melakukan Survey Dengan Mudah</p>
                        <p class="text-secondary text-justify">Membangun pengetahuan dan menguji hipotesa menjadi kebutuhan para data driven decision maker, surveyaja.com membantu Anda menyedikan survey yang reliable membantu memprovokasi gagasan dan hipotesis Anda.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="rounded-5" src="<?= base_url('/assets/images/img/img-apa-itu.png') ?>" style="width: 100%;" alt="" data-aos="fade-up" data-aos-duratioin="3000">
                </div>
            </div>
        </div>
        <!-- <img class="position-absolute start-0 mt-5" src="/assets/img/circle-white-start.svg" style="width: 200px;" alt=""> -->
    </section>

    <!-- Fitur yang anda dapatkan -->
    <section class="d-flex flex-column py-5">
        
        <div class="container">
            <div class="mx-auto text-center">
                <img class="mx-auto mb-2" src="<?= base_url('/assets/images/icon/sec-fitur.svg') ?>" alt="">
                <h5 class="fw-bold"><span class="text-danger">Fitur</span> yang anda dapatkan</h5>
                <p class="text-secondary px-lg-5 px-2 mx-auto">Membangun pengetahuan dan menguji hipotesa menjadi kebutuhan para data driven decision maker, <br> surveyaja.com membantu Anda menyedikan survey yang reliable membantu memprovokasi gagasan dan hipotesis Anda. </p>
            </div>
    
            <div class="list-fitur mt-5">
                <div class="row row-cols-lg-6 row-cols-lg-3 row-cols-1">
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="border border-2 rounded-4 px-3 py-4 h-100">
                            <img class="mb-4" src="<?= base_url('/assets/images/icon/fitur-supervisi.svg') ?>" alt="">
                            <h5 class="fw-bold">Supervisi</h5>
                            <p class="text-secondary">Proses validasi data telah menggunakan koordinat titik lokasi survey dan foto lokasi</p>
                        </div>
                    </div>
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="border border-2 rounded-4 px-3 py-4 h-100">
                            <img class="mb-4" src="<?= base_url('/assets/images/icon/fitur-konsultasi.svg') ?>" alt="">
                            <h5 class="fw-bold">Konsultasi</h5>
                            <p class="text-secondary">Surveyaja.com menyediakan layanan konsultasi melalui pilihan level akun yang dipilih</p>
                        </div>
                    </div>
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="border border-2 rounded-4 px-3 py-4 h-100">
                            <img class="mb-4" src="<?= base_url('/assets/images/icon/fitur-jaringan-luas.svg') ?>" alt="">
                            <h5 class="fw-bold">Jaringan Luas</h5>
                            <p class="text-secondary">Didukung dengan tenaga surveyor di seluruh wilayah Indonesia</p>
                        </div>
                    </div>
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="border border-2 rounded-4 px-3 py-4 h-100">
                            <img class="mb-4" src="<?= base_url('/assets/images/icon/fitur-input-data.svg') ?>" alt="">
                            <h5 class="fw-bold">Input Data</h5>
                            <p class="text-secondary">Proses input data dilakukan dengan mudah</p>
                        </div>
                    </div>
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="border border-2 rounded-4 px-3 py-4 h-100">
                            <img class="mb-4" src="<?= base_url('/assets/images/icon/fitur-paperless.svg') ?>" alt="">
                            <h5 class="fw-bold">Paperless</h5>
                            <p class="text-secondary">Seluruh aktivitas pengambilan data dilakukan dengan pendekatan paperless</p>
                        </div>
                    </div>
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="border border-2 rounded-4 px-3 py-4 h-100">
                            <img class="mb-4" src="<?= base_url('/assets/images/icon/fitur-analisa-data.svg') ?>" alt="">
                            <h5 class="fw-bold">Analisa Data</h5>
                            <p class="text-secondary">Dari data yang didapat analisis data lakukan secara sistematik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->

    </section>

    <!-- Layanan Kami -->
    <section class="d-flex flex-column py-5 bg-danger">
        <div class="container">
            <div class="mx-auto text-start">
                <img class="mx-auto mb-2" src="<?= base_url('/assets/images/icon/sec-layanan-kami.svg') ?>" alt="">
                <h5 class="fw-bold text-white">Layanan <span class="text-warning">Kami</span></h5>
                <p class="text-white">Membantu Anda Melakukan Survey Dengan Mudah
                </p>
            </div>
            <div class="row row-cols-lg-3 row-cols-1">
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-1.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Pelanggan/Masyarakat</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Kepuasan <br> Masyarakat</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-2.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Pelanggan/Masyarakat</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Kepuasan <br> Pelanggan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-3.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Karyawan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Keterlibatan <br> Karyawan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-4.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Karyawan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Kepuasan <br> Karyawan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-5.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Event</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Feedback <br> Event</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-6.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Social</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Pengeluaran RT</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-7.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Kesehatan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Pelayanan <br> Rumah Sakit</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-8.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Kesehatan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Perilaku Masyarakat <br> Pasca Covid-19</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-9.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Pendidikan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Demografi <br> Pendidikan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-10.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Riset Pasar</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Brand <br> Awareness</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-11.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Riset Pasar</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Produk/Jasa</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-12.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Politik <br> (Pilpres, Threshold, dll)</h3>
                    </div>
                </div>

                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-13.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Isu Politik</h3>
                    </div>
                </div>

                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-14.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Penggunaan Media</h3>
                    </div>
                </div>

                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('<?= base_url('/assets/images/img/layanan-15.png') ?>') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey KYC <br> (Know Your Customer)</h3>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-warning rounded-pill text-uppercase text-danger fw-semibold mx-auto" type="submit" style="padding: 15px 30px 15px 30px;">konsultasi kebutuhan surveymu</button>
            </div>
        </dv>

        <!-- <img class="position-absolute start-0 mt--5" src="/assets/img/circle-white-start.svg" style="width: 200px;" alt=""> -->
    </section>

    <!-- Cara Kerja -->

    <section class="d-flex flex-column py-5">

        <div class="mx-auto text-center">
            <img class="mx-auto mb-2" src="<?= base_url('/assets/images/icon/cleint-kami.svg') ?>" alt="">
            <h5 class="fw-bold">Cara <span class="text-danger">Kerja</span></h5>
            <p class="text-secondary text-decoration-underline">Alur yang mudah, memudahkan proses surveymu</p>
        </div>

        <div class="container d-flex flex-lg-row flex-column justify-content-center align-items-center mt-3">
            <img class="w-100" src="<?= base_url('/assets/images/img/img-cara-kerja.png') ?>" alt="" data-aos="fade-up" data-aos-duratioin="3000">
        </div>

        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->
    </section>

    <!-- Kapan lagi bikin survey semudah ini -->
    <section class="d-flex flex-column py-5 bg-danger">

        <div class="mx-auto text-center"> 
            <h1 class="text-white fw-semibold">Kapan lagi bikin <span class="text-warning">survey</span> semudah ini</h1>
            <p class="text-white">Buat, lalu terima jadi hasil sruveymu</p>
        </div>
        
        <div class="text-center">
            <button class="btn btn-warning rounded-pill text-uppercase text-danger fw-semibold mx-auto" type="submit" style="padding: 15px 30px 15px 30px;">Mulai Surveymu Sekarang</button>
        </div>

        <div class="container d-flex flex-lg-row flex-column justify-content-center align-items-center mt-5">
            <img class="w-75" src="<?= base_url('/assets/images/img/sec-kapan-lagi.png') ?>" alt="" style="margin-bottom: -48px;" data-aos="fade-up" data-aos-duratioin="3000">
        </div>

        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->
    </section>


    <!-- Dapatkan Informasi terbaru -->

    <section class="d-flex flex-column py-5">

        <div class="mx-auto text-center">
            <img class="mx-auto mb-2" src="<?= base_url('/assets/images/icon/sec-dapatkan-informasi.svg') ?>" alt="">
            <h5 class="fw-bold">Dapatkan informasi terbaru dari kami</h5>
            <p class="text-secondary text-decoration-underline">Tuliskan email anda di bawah ini</p>
        </div>

        <div class="container mt-3 d-flex justify-content-center">
            <form class="row align-items-center w-100">
                <div class="input-group">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Tulis alamat emailmu</label>
                    <input type="text" class="form-control rounded-pill me-3" id="inlineFormInputGroupUsername" placeholder="Tulis alamat emailmu" style="padding: 15px 30px 15px 30px;">
                    <button class="btn btn-warning rounded-pill text-uppercase text-danger fw-semibold mx-auto" type="submit" style="padding: 15px 30px 15px 30px;">Submit</button>
                </div>
              </form>
        </div>

        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->
    </section>

    <section class="pt-5 pb-3 bg-dark">

        <div class="container pb-3">
            <dev class="row">
                <div class="col-lg-6 col-12 pe-5 ps-3">
                    <img src="<?= base_url('/assets/images/img/main-logo.svg') ?>" alt="">
                    <p class="text-white mt-4">Membangun pengetahuan dan menguji hipotesa menjadi kebutuhan para data driven decision maker, surveyaja.com membantu Anda menyedikan survey yang reliable membantu memprovokasi gagasan dan hipotesis Anda.</p>
                </div>
                <div class="col-lg-3 col-12 d-flex flex-column ps-lg-5 ps-3 mt-lg-5 mt-3">
                    <a href="<?= site_url('') ?>" class="text-white mb-2 text-decoration-none">Beranda</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Fitur</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Layanan Kami</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Cara Mulai</a>
                </div>
                <div class="col-lg-3 col-12 d-flex flex-column ps-lg-5 ps-3 mt-lg-5 mt-3">
                    <a href="<?= site_url('harga') ?>" class="text-white mb-2 text-decoration-none">Harga</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Klien KAmi</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Kontak Kami</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Berita</a>
                </div>
            </dev>
        </div>
       
        <hr class="my-3 border-top border-1">

        <p class="text-white text-center mb-0">2022 Copyright Surveyaja.com. All Rights Reserved.</p>

        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->
    </section>

    <script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js') ?>"></script>
    <script src="<?= base_url('assets/node_modules/aos/dist/aos.js') ?>"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>