<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cek Kartu Pengunjung
        </h3>
    </div>
    <!--begin::Form-->
    <?php echo form_open(base_url('pakan/simpan_data'), ' class="form-horizontal"') ?>
    <div class="card-body">
        <div class="form-group row">
            <label class="col-2 col-form-label">Kode Kartu</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="id_anggota" placeholder="Tempelkan Kartu Anda Pada Alat" name="id_anggota" readonly />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Nama Anggota</label>
            <div class="col-10">
                <input class="form-control" type="text"  id="ceknama" name="nama" readonly/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tanggal Lahir</label>
            <div class="col-10">
                <input class="form-control" type="text"  id="cektgl_lahir" name="nama" readonly/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Alamat</label>
            <div class="col-10">
                <input class="form-control" type="text"  id="cekalamat" name="nama" readonly/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Jenis Kelamin</label>
            <div class="col-10">
                <input class="form-control" type="text"  id="cekjk" name="nama" readonly/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Jenis Anggota</label>
            <div class="col-10">
                <input class="form-control" type="text"  id="cekjenis" name="nama" readonly/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tanggal Daftar</label>
            <div class="col-10">
                <input class="form-control" type="text"  id="cektgl_daftar" name="nama" readonly/>
            </div>
        </div>
        <!-- <div class="card-footer">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div> -->
            <!-- </div>
        </div>  -->
    </div>
    <?php echo form_close(); ?>
</div>
<script>
setInterval(function() {
						
						$.ajax({
				  type: 'POST',
				  url: "<?=base_url("anggota/getidkartu")?>",
				  dataType: 'json',
				  success: function(json){
								var getid             = json[0].id_rfid;
								$('#id_anggota').val(getid); 
                                // console.log(getid);
                        $.ajax({
                            type: 'GET',
                            url: "<?=base_url("anggota/cari")?>",
                            data: 'id_anggota=' + getid,
                            dataType: 'json',
                            success: function(json) {

                                $('#ceknama').attr('value', json[0].nama);
                                $('#cekalamat').attr('value', json[0].alamat);
                                $('#cekjk').attr('value', json[0].jk);
                                $('#cekagama').attr('value', json[0].agama);
                                $('#cektmp_lahir').attr('value', json[0].tmp_lahir);
                                $('#cektgl_lahir').attr('value', json[0].tgl_lahir);
                                $('#cektgl_daftar').attr('value', json[0].tgl_daftar);
                                $('#cekjenis').attr('value', json[0].jenis);
                                // console.log(json[0].kd_pasien);
                            }
                            // console.log();
                        });
				  }
	});

    
                        
				}, 500);

</script>