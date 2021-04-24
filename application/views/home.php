<?php $this->view('template/header.php')?>
<?php $this->view('template/navigation.php')?>

<!-- KONTEN UTAMA DISINI -->
<div class="row">
  <div class="col-sm-12">
    <div class="card mb-0">
      <div class="card-body pt-0">
        <form>
          <div class="row justify-content-center">
            <div class="col-2 col-sm-auto">
              <div class="form-group mb-0 pb-0" style="margin-top: 20px">
                <button id="filter-previous_page" class="btn btn-white btn-round btn-just-icon" type="button" data-toggle="tooltip" data-placement="top" title="Halaman sebelumnya">&laquo;</button>
              </div>
            </div>
            <div class="col-4 col-sm-1 pr-0">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Page</label>
                <input type="number" id="filter-page" class="form-control" data-toggle="tooltip" title="Halaman maksimum: 42" value="1">
              </div>
            </div>
            <div class="col-4 col-sm-1 pl-0">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Limit</label>
                <input type="number" id="filter-limit" class="form-control" value="50">
              </div>
            </div>
            <div class="col-2 col-sm-auto pl-0">
              <div class="form-group mb-0 pb-0" style="margin-top: 20px">
                <button id="filter-next_page" class="btn btn-white btn-round btn-just-icon" type="button" data-toggle="tooltip" data-placement="top" title="Halaman selanjutnya">&raquo;</button>
              </div>
            </div>
            <div class="col-9 col-sm-4 pr-0">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Cari Judul Buku</label>
                <div class="input-group">
                  <input type="text" id="filter-cari" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-auto pl-0 col-sm-auto">
              <div class="form-group mb-0 pb-0" style="margin-top: 20px">
                <button class="btn btn-white btn-round btn-just-icon" type="button" data-toggle="tooltip" data-placement="top" title="Halaman selanjutnya">
                  <i class="material-icons">search</i>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <h4 class="card-title nav-tabs-title">Data Buku</h4>
            <ul class="nav nav-tabs justify-content-end">
              <li class="nav nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-tambah_buku">
                  <i class="material-icons">add</i>
                  Tambah Buku
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="text-primary">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No.hp</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Berapa Orang</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="data-load-buku">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-tambah_buku">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah data buku</h4>
        <button class="close" data-dismiss="modal" type="button">&times;</button>
      </div>
      <div class="modal-body">
        <form id="form-tambah_buku">
          <div class="row">
            <div class="col-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Nama</label>
                <input type="text" name="judul" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Email</label>
                <input type="text" name="pengarang" class="form-control">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">No.hp</label>
                <input type="text" name="penerbit" class="form-control">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Tanggal</label>
                <input type="number" name="tahun" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jam</label>
                <input type="number" name="jumlah_buku" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Berapa Orang</label>
                <input type="number" name="jumlah_eksemplar" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block btn-primary" value="Tambah">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-edit_buku">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="close" data-dismiss='modal'>&times;</button>
      </div>
      <div class="modal-body">
        <form id="form-edit_buku">
          <input type="hidden" name="id">
          <div class="row">
            <div class="col-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Nama</label>
                <input type="text" name="judul" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Email</label>
                <input type="text" name="pengarang" class="form-control">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">No.hp</label>
                <input type="text" name="penerbit" class="form-control">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Tanggal</label>
                <input type="number" name="tahun" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jam</label>
                <input type="number" name="jumlah_buku" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Berapa Orang</label>
                <input type="number" name="jumlah_eksemplar" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block btn-primary" value="Edit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $this->view('template/js_script.php') ?>
<script type="text/javascript">

//  Kode Javascript jQuery disini

</script>
<?php $this->view('template/footer.php')?>