<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Tambah Data Anggota
        </h3>
    </div>
    <!--begin::Form-->
    <?php echo form_open(base_url('anggota/simpan_data'), ' class="form-horizontal"') ?>
    <div class="card-body">
        <div class="form-group row">
            <label class="col-2 col-form-label">Id Anggota</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="id_anggota" name="id_anggota" placeholder="Silahkan tempelkan kartu Anda!!!" autofocus/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Nama Lengkap</label>
            <div class="col-10">
                <input class="form-control" type="text" placeholder="Masukan Nama Anda" id="example-text-input" name="nama" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Alamat</label>
            <div class="col-10">
                <input class="form-control" type="text" placeholder="Masukan Alamat Anda" id="example-text-input" name="alamat" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Jenis kelamin</label>
            <div class="col-10">
            <select name="jk" id="jenis_kelamin" class="form-control form-select form-select-solid" aria-label="Select example" required>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Agama</label>
            <div class="col-10">
            <select name="agama" id="agama" class="form-control form-select form-select-solid" aria-label="Select example" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tempat Lahir</label>
            <div class="col-10">
                <input class="form-control" type="text" placeholder="Masukkan Tempat Lahir anda" id="example-text-input" name="tmp_lahir" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tgl Lahir</label>
            <div class="col-10">
                <input class="form-control" type="text" placeholder="Masukkan Tempat Lahir anda" id="kt_datepicker_1" name="tgl_lahir" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Jenis Anggota</label>
            <div class="col-10">
            <select name="jenis" id="jenis" class="form-control form-select form-select-solid" aria-label="Select example" required>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Dosen">Dosen</option>
                            </select>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
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