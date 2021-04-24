<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   Form Tambah Data Seminar
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                        <label for="name">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki- Laki ">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Instansi</label>
                            <input type="text" name="instansi" class="form-control" id="instansi">
                            <small class="form-text text-danger"><?= form_error('instansi'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="name">No_HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>