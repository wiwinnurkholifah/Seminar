<style>
body{
    background-image: url("<?php echo base_url() ?>foto/bg1.jpg");
    background-size:cover;
}
.gambar{
    height:400px;
    width:600px;
}
</style>


<div class="container">
<?php if( $this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show"
        role="alert">
            Data seminar <strong>berhasil</strong> <?= 
            $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="row mt-3">
    <div class="col-md-6">
    <div class="card">
                <div class="card-header">
                   Form Pendaftaran Seminar
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
<div class="col-md-6">
            <div class="gambar">
                <img class="gambar" src="<?php echo base_url() ?>foto/b.jpg" alt="">
            </div>
    </div>

</div>