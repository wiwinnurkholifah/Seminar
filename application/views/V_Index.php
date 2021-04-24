<!DOCTYPE html>
    <html>
    <head>
        <title>Ajax </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('asset/jquery/jquery-3.3.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="datepicker/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="datepicker/css/datepicker.css">
            </head>
    <body style="margin: 20px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <b class="col-md-10">CRUD Ajax Codeigniter </b>
                <center><button data-toggle="modal" data-target="#addModal" class="btn btn-success">Tambah Data</button></center>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis kelamin</th>
                                <th>Instansi</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="seminar">
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
     
        <!-- Modal Tambah-->
        <div id="addModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
     
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="instansi">Instansi</label>
                        <input type="text" name="instansi" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" name="no_hp" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control"></input>
                </form>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-success" id="btn_add_data">Simpan</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
     
          </div>
        </div>
     
        <!-- Modal Edit-->
        <div id="editModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
     
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Edit Data</h4>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama_edit" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin_edit" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="instansi">Instansi</label>
                        <input type="text" name="instansi_edit" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" name="no_hp_edit" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email_edit" class="form-control"></input>
                    </div>
     
                </form>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-success" id="btn_update_data">Update</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
     
          </div>
        </div>
     
    </html>
    <script type="text/javascript">
        $(document).ready(function(){
            tampil_data();
            //Menampilkan Data di tabel
            function tampil_data(){
                $.ajax({
                    url: '<?php echo base_url(); ?>C_Index/ambilData',
                    type: 'POST',
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        var i;
                        var no = 0;
                        var html = "";
                        for(i=0;i < response.length ; i++){
                            no++;
                            html = html + '<tr>'
                                        + '<td>' + no  + '</td>'
                                        + '<td>' + response[i].nama  + '</td>'
                                        + '<td>' + response[i].jenis_kelamin  + '</td>'
                                        + '<td>' + response[i].instansi  + '</td>'
                                        + '<td>' + response[i].no_hp  + '</td>'
                                        + '<td>' + response[i].email  + '</td>'
                                        + '<td style="width: 16.66%;">' + '<span><button data-id="'+response[i].id+'" class="btn btn-primary btn_edit">Edit</button><button style="margin-left: 5px;" data-id="'+response[i].id+'" class="btn btn-danger btn_hapus">Hapus</button></span>'  + '</td>'
                                        + '</tr>';
                        }
                        $("#seminar").html(html);
                    }
     
                });
            }
            //Hapus Data dengan konfirmasi
            $("#seminar").on('click','.btn_hapus',function(){
                var id = $(this).attr('data-id');
                var status = confirm('Yakin ingin menghapus?');
                if(status){
                    $.ajax({
                        url: '<?php echo base_url(); ?>C_Index/hapusData',
                        type: 'POST',
                        data: {id:id},
                        success: function(response){
                            tampil_data();
                        }
                    })
                }
            })
            //Menambahkan Data ke database
            $("#btn_add_data").on('click',function(){
                var nama = $('input[name="nama"]').val();
                var jenis_kelamin = $('input[name="jenis_kelamin"]').val();
                var instansi = $('input[name="instansi"]').val();
                var no_hp = $('input[name="no_hp"]').val();
                var email = $('input[name="email"]').val();

                $.ajax({
                    url: '<?php echo base_url(); ?>C_Index/tambahData',
                    type: 'POST',
                    data: {nama:nama,jenis_kelamin:jenis_kelamin,instansi:instansi,no_hp:no_hp,email:email},
                    success: function(response){
                        $('input[name="nama"]').val("");
                        $('input[name="jenis_kelamin"]').val("");
                        $('input[name="instansi"]').val("");
                        $('input[name="no_hp"]').val("");
                        $('input[name="email"]').val("");
                        $("#addModal").modal('hide');
                        tampil_data();
                    }
                })
     
            });
            //Memunculkan modal edit
            $("#seminar").on('click','.btn_edit',function(){
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '<?php echo base_url(); ?>C_Index/ambilDataByid',
                    type: 'POST',
                    data: {id:id},
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        $("#editModal").modal('show');
                        $('input[name="nama_edit"]').val(response[0].nama);
                        $('input[name="jenis_kelamin_edit"]').val(response[0].jenis_kelaminl);
                        $('input[name="instansi_edit"]').val(response[0].instansi);
                        $('input[name="no_hp_edit"]').val(response[0].no_hp);
                        $('input[name="email_edit"]').val(response[0].email);
                    }
                })
            });
     
            //Meng-Update Data
            $("#btn_update_data").on('click',function(){
                var nama = $('input[name="nama_edit"]').val();
                var jenis_kelamin = $('input[name="jenis_kelamin_edit"]').val();
                var instansi = $('input[name="instansi_edit"]').val();
                var no_hp = $('input[name="no_hp_edit"]').val();
                var email = $('input[name="email_edit"]').val();
                $.ajax({
                    url: '<?php echo base_url(); ?>C_Index/perbaruiData',
                    type: 'POST',
                    data: {nama:nama,jenis_kelamin:jenis_kelamin,instansi:instansi,no_hp:no_hp,email:email},
                    success: function(response){
                        $('input[name="nama_edit"]').val("");
                        $('input[name="jenis_kelamin_edit"]').val("");
                        $('input[name="instansi_edit"]').val("");
                        $('input[name="no_hp_edit"]').val("");
                        $('input[name="email_edit"]').val("");
                        $("#editModal").modal('hide');
                        tampil_data();
                    }
                })
     
            });
        });
    </script>