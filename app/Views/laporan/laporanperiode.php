<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pakan Ayam</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/laporan/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body>

  <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
      <td align="center" width="10%">
      <!-- <img src="<?php echo base_url() ?>/assets/media/logos/logoputihmerah.png" width="130px"> -->
      </td>

      <td valign="top" colspan="2">
        <p align="center" style="font-size: 25px;font-family: 'Georgia';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">Pakan Ayam Otomatis Berbasis Internet Of Things</p>
  <p align="center" style="font-size: 14px;font-family: 'Calibri';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">Kp. Jati Jembatan 1 Kalimalang, RT.007/RW.06, Jatimulya, Tambun Selatan, Kabupaten Bekasi, Jawa Barat 17510</p>
      </td>
    </tr>
  </table>
  <hr width="100%" height="10px">
	<h3 align="center"><u>Laporan Data Pakan Ayam</u></h3>
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr border="0">
			<th border="0" align ="left" width="30%">Dari Tanggal : <?php echo date('d F Y', strtotime($tglawal)) ?></th>
			<th border="0"></th>
			<th></th>
			<th align="right" width="50%">Sampai Tanggal : <?php echo date('d F Y', strtotime($tglakhir)) ?></th>
			</tr>
	</table>
	<br>
  <div class="row">
	  <table class="table table-striped" width="100%" border="1" cellspacing="0" cellpadding="5">
      <thead>
			
        <tr align="center">
          <th width="1%">No</th>
          <th width="5%">Kode Pakan</th>
          <th>Takaran</th>
          <th>Tanggal Ganti</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach($pakan as $row){
        ?>
            <tr>
              <td align="center"><?php echo $no; ?></td>
              <td align="left"><?php echo $row->kd_pakan; ?></td>
              <td align="left"><?php echo $row->liter; ?> Gram</td>
              <td align="center"><?php echo $row->waktu_pakan; ?></td>
              
            </tr>

        <?php $no++; 
            }
          ?>
      </tbody>
			
    </table>
    <br>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
        <td valign="top" width="50%">
      
        </td>

        <td valign="top" width="10%">
        </td>
						
        <td valign="top" style="text-align:right" width="40%">
				Total Takaran (gram) : &nbsp; <?php echo $banyakpakan['liter'] ?> gram
				<br>

				<br>
				<br>

        </td>
      </tr>

      <tr>
        <td valign="top" width="25%">
       <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">&nbsp;</p>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Mengetahui,</p>
          <br>
          <br>
          <br>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">.......................................</p>
         </td>

        <td>
          &nbsp;
        </td>
						
        <td valign="top"  width="25%">
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Bekasi, <?php echo date("d-m-Y") ?></p>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Menyetujui,</p>
          <br>
          <br>
          <br>
<p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">.......................................</p>
        </td>
      </tr>
			
    </table>
	 </div>



<script src="<?php echo base_url() ?>assets/laporan/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/laporan/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/laporan/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="<?php echo base_url() ?>assets/laporan/js/adminlte.min.js"></script>

<script src="<?php echo base_url() ?>assets/laporan/js/demo.js"></script>


</body>
</html>
