<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUAT SURVEYMU - SURVEYAJA.COM</title>

    <!-- style scss -->
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Fade Animation -->
    <link rel="stylesheet" href="/node_modules/aos/dist/aos.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 48
        }
    </style>

</head>
<body class="bg-white">

    <!-- Header dan Navigasi -->
    <section class="" style="background: url('/assets/img/bg-header.svg') no-repeat center bottom; background-size: cover; max-height: 561.5px;">

        <!-- Navigasi -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark py-3" style="background: #E31837;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/assets/img/main-logo.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white active" aria-current="page" href="#" style="font-size: 14px !important;">Beranda</a>
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
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="#" style="font-size: 14px !important;">Harga</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase fs-6 fw-normal text-white" href="#" style="font-size: 14px !important;">Klien</a>
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
            <div class="container py-5">
                <div class="row justify-content-center pb-5">
                    <div class="col-lg-6 col-10 pt-5 py-5">
                        <div class="align-self-center" data-aos="fade-up"data-aos-anchor-placement="center-center" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                            <h1 class="text-white fw-semibold">Buat <span class="text-warning">Surveymu</span> <br>Sekarang Juga</h1>
                            <p class="text-white fs-5 fw-lighter mt-2">Lengkapi form berikut, agar kami tahu kebutuhan surveymu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->

    </section>

    <!-- Meet Our Team -->
    <section class="d-flex flex-column py-5" style="margin-top: -200px;">
        
        <div class="container">
    
            <div class="list-fitur mt-4 col-lg-8 col-12 mx-auto">
                <div class="row">
                    <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                        <div class="card rounded-4 p-4">
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label mb-3">Judul Survey</label>
                                  <input type="email" class="form-control rounded-pill me-3" id="#" placeholder="Tulis judu surveymu" style="padding: 10px 20px 10px 20px;">
                                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label mb-3">Jumlah responden yang diinginkan</label>
                                    <input type="email" class="form-control rounded-pill me-3" id="#" placeholder="Tulis jumlah" style="padding: 10px 20px 10px 20px;">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label mb-3">Kategori Sasaran survey</label>
                                    <input type="email" class="form-control rounded-pill me-3" id="#" placeholder="Tulis sasaran" style="padding: 10px 20px 10px 20px;">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label mb-3">Upload Dokumen Survey</label>
                                    <a class="" href="#">Download Template</a>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control  rounded-pill" id="inputGroupFile01">
                                    </div>
                                </div>
                                <button class="btn btn-danger rounded-pill text-uppercase text-white fw-semibold w-100" type="submit" style="padding: 15px 30px 15px 30px;">Buat Survey</button>
                            </form>
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
                <img class="mx-auto mb-2" src="/assets/icon/sec-layanan-kami.svg" alt="">
                <h5 class="fw-bold text-white">Layanan <span class="text-warning">Kami</span></h5>
                <p class="text-white">Membantu Anda Melakukan Survey Dengan Mudah
                </p>
            </div>
            <div class="row row-cols-lg-3 row-cols-1">
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-1.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Pelanggan/Masyarakat</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Kepuasan <br> Masyarakat</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-2.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Pelanggan/Masyarakat</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Kepuasan <br> Pelanggan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-3.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Karyawan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Keterlibatan <br> Karyawan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-4.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Karyawan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Kepuasan <br> Karyawan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-5.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Event</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Feedback <br> Event</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-6.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Social</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Pengeluaran RT</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-7.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Kesehatan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Pelayanan <br> Rumah Sakit</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-8.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Kesehatan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Perilaku Masyarakat <br> Pasca Covid-19</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-9.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-semibold align-self-start px-3 py-2 mb-3">Pendidikan</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Demografi <br> Pendidikan</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-10.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Riset Pasar</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Brand <br> Awareness</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-11.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Riset Pasar</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Produk/Jasa</h3>
                    </div>
                </div>
                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-12.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey Politik <br> (Pilpres, Threshold, dll)</h3>
                    </div>
                </div>

                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-13.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Isu Politik</h3>
                    </div>
                </div>

                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-14.png') no-repeat center center; background-size: cover; height: 100%;">
                        <span class="badge rounded-pill text-bg-warning text-danger fw-normal align-self-start px-3 py-2 mb-3">Lainnya</span>
                        
                        <h3 class="card-title mt-5 mb-0">Survey <br> Penggunaan Media</h3>
                    </div>
                </div>

                <div class="col mb-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duratioin="3000">
                    <div class="card text-white border-0 rounded-4 p-4" style="background: linear-gradient(186.01deg, rgba(255, 255, 255, 0) 6.28%, #1C1C1C 89.06%), url('/assets/img/layanan-15.png') no-repeat center center; background-size: cover; height: 100%;">
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
            <img class="mx-auto mb-2" src="/assets/icon/cleint-kami.svg" alt="">
            <h5 class="fw-bold">Cara <span class="text-danger">Kerja</span></h5>
            <p class="text-secondary text-decoration-underline">Alur yang mudah, memudahkan proses surveymu</p>
        </div>

        <div class="container d-flex flex-lg-row flex-column justify-content-center align-items-center mt-3">
            <img class="w-100" src="/assets/img/img-cara-kerja.png" alt="" data-aos="fade-up" data-aos-duratioin="3000">
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
            <img class="w-75" src="/assets/img/sec-kapan-lagi.png" alt="" style="margin-bottom: -48px;" data-aos="fade-up" data-aos-duratioin="3000">
        </div>

        <!-- <img class="position-absolute end-0" src="/assets/img/circle-white-end.svg" style="width: 200px;" alt=""> -->
    </section>


    <!-- Dapatkan Informasi terbaru -->

    <section class="d-flex flex-column py-5">

        <div class="mx-auto text-center">
            <img class="mx-auto mb-2" src="/assets/icon/sec-dapatkan-informasi.svg" alt="">
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
                    <img src="/assets/img/main-logo.svg" alt="">
                    <p class="text-white mt-4">Membangun pengetahuan dan menguji hipotesa menjadi kebutuhan para data driven decision maker, surveyaja.com membantu Anda menyedikan survey yang reliable membantu memprovokasi gagasan dan hipotesis Anda.</p>
                </div>
                <div class="col-lg-3 col-12 d-flex flex-column ps-lg-5 ps-3 mt-lg-5 mt-3">
                    <a href="" class="text-white mb-2 text-decoration-none">Beranda</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Fitur</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Layanan Kami</a>
                    <a href="" class="text-white mb-2 text-decoration-none">Cara Mulai</a>
                </div>
                <div class="col-lg-3 col-12 d-flex flex-column ps-lg-5 ps-3 mt-lg-5 mt-3">
                    <a href="" class="text-white mb-2 text-decoration-none">Harga</a>
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

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="/node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>