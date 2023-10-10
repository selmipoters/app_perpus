<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Data Pengunjung</h3>
        </div>
        <div class="swal" data-swal="<?php echo session()->getFlashData('pesan'); ?>"></div>
        
    </div>
    <div class="card-body">
        <!--begin::Table container-->
        <div class="kt_datatable">
            <!--begin::Table-->
            <table id="kt_datatable" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th>No</th>
                        <th>ID pengunjung</th>
                        <th>Nama</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <?php $no = 1;
                    foreach ($pengunjung as $pengunjung) { ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6"><?php echo $no ?></a>
                                        </d>
                                    </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder text-hover-primary fs-6"><?php echo $pengunjung['id_pengunjung'] ?></span>
                                    </div>
                                </div>
                            </td>
                            <td>
                           <?php 
                           if ($pengunjung['nama'] == NULL) {
                               $nama_pengunjung = '-';
                           }
                           else{
                               $nama_pengunjung = $pengunjung['nama'];
                           }
                           
                           ?>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder text-hover-primary fs-6"><?php echo $nama_pengunjung ?></span>
                                    </div>
                                </div>
                            </td>
                            <td>
                           
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder text-hover-primary fs-6"><?php echo $pengunjung['tgl_masuk'] ?> <?php echo $pengunjung['jam_masuk'] ?></span>
                                    </div>
                                </div>
                            </td>
                            <td>
                           
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder text-hover-primary fs-6"><?php echo $pengunjung['tgl_keluar'] ?> <?php echo $pengunjung['jam_keluar'] ?></span>
                                    </div>
                                </div>
                            </td>
                         <?php 
                          if ($pengunjung['status'] == "Masuk"){
                              $css = "primary";
                          }
                          else{
                            $css = "danger";
                          }
                         ?>
                            <td>
                                <span class="text-<?php echo $css ?> fw-bolder d-block fs-6 "><?php echo $pengunjung['status'] ?></span>
                            </td>
                            <td class="text-end">
                                <a href="<?php echo base_url('pengunjung/delete/' . $pengunjung['id_pengunjung']) ?>" class="btn btn-sm btn-clean btn-icon btn-bg-light tombol-hapus" title="Hapus">
                                    <!--begin::Svg Icon | path: icons/stockholm/General/Trash.svg-->
                                    <span class="svg-icon svg-icon-3 tombol-hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
    </div>
</div>