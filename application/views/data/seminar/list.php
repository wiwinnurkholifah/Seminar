<?php $this->view('template/header.php')?>
<?php $this->view('template/navigation.php')?>

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
                <label class="bmd-label-floating">Cari Pendaftar Seminar</label>
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
            <h4 class="card-title nav-tabs-title">Data Seminar</h4>
            <ul class="nav nav-tabs justify-content-end">
              <li class="nav nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-tambah_seminar">
                  <i class="material-icons">add</i>
                  Tambah Seminar
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
                <th>Jenis Kelamin</th>
                <th>Instansi</th>
                <th>No hp</th>
                <th>Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="data-load-seminar">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-tambah_seminar">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah data seminar</h4>
        <button class="close" data-dismiss="modal" type="button">&times;</button>
      </div>
      <div class="modal-body">
        <form id="form-tambah_seminar">
          <div class="row">
            <div class="col-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Nama Pendaftar</label>
                <input type="text" name="nama" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                  <option value="jenis_kelamin ">Laki - Laki</option>
                  <option value="jenis_kelamin">Perempuan</option>
                  <
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Instansi</label>
                <input type="text" name="instansi" class="form-control">
              </div>
            </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">No Hp</label>
                <input type="number" name="no_hp" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Email</label>
                <input type="text" name="email" class="form-control">
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

<div class="modal fade" id="modal-edit_seminar">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="close" data-dismiss='modal'>&times;</button>
      </div>
      <div class="modal-body">
        <form id="form-edit_seminar">
          <input type="hidden" name="id">
          <div class="row">
            <div class="col-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Nama Pendaftar</label>
                <input type="text" name="nama" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Instansi</label>
                <input type="text" name="instansi" class="form-control">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">No Hp</label>
                <input type="number" name="no_hp" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Email</label>
                <input type="text" name="email" class="form-control">
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

  // -------------------------------------
  // Pemanggilan Ajax
  // -------------------------------------
  var read_seminar = {
    limit: 50,
    page: 1
  }
  function refresh_seminar() {
    $.ajax({
      url: '<?=site_url('data/read_seminar/show/ajax-list-table/pagination')?>',
      type: 'GET',
      dataType: 'json',
      data: read_seminar,
    })
    .done(function(data) {
      if (read_seminar.page == 1) {
        $("#filter-previous_page").addClass('disabled');
      }
      else {
        $("#filter-previous_page").removeClass('disabled');
      }
      if (read_seminar.page == data.total_page) {
        $("#filter-next_page").addClass('disabled');
      }
      else {
        $("#filter-next_page").removeClass('disabled');
      }
      $("#filter-page").attr('max', data.total_page);
      $("#filter-page").attr('title', 'Halaman Maksimum: ' + data.total_page);
      $("#filter-page").attr('data-original-title', 'Halaman Maksimum: ' + data.total_page);
      $.ajax({
        url: '<?=site_url('data/read_seminar/show/ajax-list-table')?>',
        type: 'GET',
        dataType: 'html',
        data: read_seminar,
      })
      .done(function(data) {
        $("#data-load-seminar").fadeOut(100, function() {
          $.getScript('<?=site_url('assets/custom/js/default.js')?>');
          $("#data-load-seminar").html(data).fadeIn(100);
          event_seminar();
        });
      });
    });
  }
  refresh_seminar();

  // -------------------------------------
  // Event setelah data seminar dimuat
  // -------------------------------------
  function event_seminar() {

    // ----------------------------------------
    // Event klik edit seminar
    // ----------------------------------------
    ctx_modal_edit_seminar = $("#modal-edit_seminar");
    $(".edit-data").click(function(e) {
      id = $(this).data('id');
      $.ajax({
        url: '<?=site_url('data/read_seminar/single')?>',
        type: 'GET',
        dataType: 'json',
        data: {id: id},
      })
      .done(function(data) {
        $("#form-edit_seminar input[name='id']").val(data.object.id);
        $("#form-edit_seminar input[name='nama']").val(data.object.nama);
        $("#form-edit_seminar input[name='jenis_kelamin']").val(data.object.jenis_kelamin);
        $("#form-edit_seminar input[name='instansi']").val(data.object.instansi);
        $("#form-edit_seminar input[name='no_hp']").val(data.object.no_hp);
        $("#form-edit_seminar input[name='email']").val(data.object.email);
        ctx_modal_edit_seminar.modal('show').on('shown.bs.modal', function(e) {
          $("#form-edit_seminar input[name='nama']").focus();
        });
      });
    });

    // ----------------------------------------
    // Hapus Data Seminar
    // ----------------------------------------
    $(".hapus-data").click(function(e) {
      e.preventDefault();
      id = $(this).data('id');
      if (confirm("Anda yakin?")) {
        $.ajax({
          url: '<?=site_url('data/write_seminar/delete')?>',
          type: 'POST',
          dataType: 'json',
          data: {id: id},
        })
        .done(function(data) {
          if (data) {
            refresh_seminar();
            buat_notifikasi({
              icon: 'done_outline',
              message: "Data berhasil dihapus",
              type: 'success'
            });
          }
        });
      }
    });

  }

  // -------------------------------------
  // Event Filter / Penyaringan Data
  // -------------------------------------
  var ctx_limit = $("#filter-limit"); 
  var ctx_page = $("#filter-page"); 
  var ctx_next_page = $("#filter-next_page"); 
  var ctx_previous_page = $("#filter-previous_page"); 
  var ctx_cari = $("#filter-cari");

  ctx_limit.on('input', function(e) {
    value = $(this).val();
    if (value > 0) {
      read_seminar.limit = value;
    }
    else {
      $(this).val(50);
    }
    $("#filter-page").val(1);
    read_seminar.page = 1;
    refresh_seminar();
  });
  ctx_page.on('input', function(e) {
    value = $(this).val();
    if (value > 0) {
      read_seminar.page = value;
    }
    else {
      $(this).val(1);
    }
    refresh_seminar();
  });
  ctx_next_page.click(function(e) {
    disabled = $(this).hasClass('disabled');
    if (!disabled) {
      read_seminar.page++;
      ctx_page.val(read_seminar.page);
      refresh_seminar(); 
    }
  });
  ctx_previous_page.click(function(e) {
    disabled = $(this).hasClass('disabled');
    if (!disabled) {
      read_seminar.page--;
      ctx_page.val(read_seminar.page);
      refresh_seminar(); 
    }
  });
  ctx_cari.on('input', function(e) {
    value = $(this).val();
    if (value != '') {
      read_seminar.cari = value;
    }
    else {
      delete read_seminar.cari;
    }
    refresh_seminar();
  });


  // -------------------------------------
  // Tambah Data Seminar
  // -------------------------------------
  $("#form-tambah_seminar").submit(function(e) {
    e.preventDefault();
    ctx_modal = $("#modal-tambah_seminar");
    form = $(this);
    $.ajax({
      url: '<?=site_url('data/write_seminar/insert')?>',
      type: 'POST',
      dataType: 'json',
      data: form.serialize(),
    })
    .done(function(data) {
      if (data) {
        form[0].reset();
        ctx_modal.modal('hide');
        buat_notifikasi({
          icon: 'done_outline',
          message: "Data berhasil ditambahkan",
          type: 'success'
        });
        refresh_seminar();
      }
      else {
        alert('Tidak dapat terhubung dengan database');
      }
    });
  });

  // -------------------------------------
  // Edit seminar
  // -------------------------------------
  $("#form-edit_seminar").submit(function(e) {
    e.preventDefault();
    form = $(this);
    $.ajax({
      url: '<?=site_url('data/write_seminar/update')?>',
      type: 'POST',
      dataType: 'json',
      data: form.serialize(),
    })
    .done(function(data) {
      if (data) {
        form[0].reset();
        ctx_modal_edit_seminar.modal('hide');
        buat_notifikasi({
          icon: 'done_outline',
          message: 'Data berhasil di edit',
          type: 'success'
        });
        refresh_seminar();
      }
    });
  });

  



</script>
<?php $this->view('template/footer.php')?>