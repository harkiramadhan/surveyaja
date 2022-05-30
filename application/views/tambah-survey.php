<!-- Meet Our Team -->
<section class="d-flex flex-column py-5" style="margin-top: -150px;">
    
    <div class="container">

        <div class="list-fitur mt-4 col-lg-8 col-12 mx-auto">
            <div class="row">
                <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duratioin="3000">
                    <div class="card rounded-4 p-4">
                        <form action="<?= site_url('survey/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label mb-3">Nomor WhatsApp</label>
                                <input type="number" name="wa" class="form-control rounded-pill me-3" placeholder="Tulis Nomor WhatsApp" style="padding: 10px 20px 10px 20px;" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label mb-3">Judul Survey</label>
                                <input type="text" name="judul" class="form-control rounded-pill me-3" placeholder="Tulis judu surveymu" style="padding: 10px 20px 10px 20px;" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label mb-3">Jumlah responden yang diinginkan</label>
                                <input type="number" name="jumlah" class="form-control rounded-pill me-3" placeholder="Tulis jumlah" style="padding: 10px 20px 10px 20px;" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label mb-3">Kategori Sasaran survey</label>
                                <input type="text" name="kategori" class="form-control rounded-pill me-3" placeholder="Tulis sasaran" style="padding: 10px 20px 10px 20px;" required>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label mb-3">Upload Dokumen Survey</label>
                                <a class="" href="#">Download Template</a>
                                <div class="input-group mb-3">
                                    <input type="file" name="document" class="form-control  rounded-pill" id="inputGroupFile01" required>
                                </div>
                            </div>
                            <button class="btn btn-danger rounded-pill text-uppercase text-white fw-semibold w-100" type="submit" style="padding: 15px 30px 15px 30px;">Buat Survey</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>