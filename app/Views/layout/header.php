<?php
$session        = \Config\Services::session();

use App\Models\User_model;

$model          = new User_model();
$user_login     = $model->detail($session->get('kd_user'));
?>
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
	<!--begin::Header-->
	<div id="kt_header" class="header bg-white header-fixed">
		<!--begin::Container-->
		<div class="container-fluid d-flex align-items-stretch justify-content-between">
			<!--begin::Left-->
			<div class="d-flex align-items-stretch mr-2">
				<!--begin::Page Title-->

				<h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0"><a href="<?= base_url() ?>">Sistem Monitoring Pengunjung Perpustakaan</a></h3>
				<!--end::Page Title-->
				<!--begin::Header Menu Wrapper-->
				<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
					<!--begin::Header Menu-->
					<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
						<!--begin::Header Nav-->
						<ul class="menu-nav">

							<li class="menu-item" aria-haspopup="true">
								<span class="menu-text">> </span>
							</li>
							<li class="menu-item" aria-haspopup="true">
								<a href="<?= $link ?>" class="menu-link">
									<span class="menu-text"><?= $bc ?></span>
								</a>
							</li>
							
						</ul>
						<!--end::Header Nav-->
					</div>
					<!--end::Header Menu-->
				</div>
				<!--end::Header Menu Wrapper-->
			</div>
			<!--end::Left-->
			<!--begin::Topbar-->
			<div class="topbar">
				<!--begin::User-->
				<div class="topbar-item">
				<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" >
						<div class="d-flex flex-column text-right pr-3">
						<span class="text-muted font-weight-bold font-size-base d-none d-md-inline">Mode	&nbsp;&nbsp;&nbsp;|</span>
						<span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline "><?php echo $tampilmode ?>	&nbsp;&nbsp;&nbsp;|</span>
						</div>
						
					</div>
        </div>
		
				<div class="topbar-item">
					<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
						<div class="d-flex flex-column text-right pr-3">
							<span class="text-muted font-weight-bold font-size-base d-none d-md-inline"><?= $user_login['nama'] ?></span>
							<span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline"><?= $user_login['email'] ?></span>
						</div>
						<span class="symbol symbol-35 symbol-light-primary">
							<?php
							$kalimat = $user_login['nama'];
							$sub_kalimat = substr($kalimat, 0, 1);
							?>
							<span class="symbol-label font-size-h5 font-weight-bold"><?= $sub_kalimat ?></span>
						</span>
					</div>
				</div>
				
				<!--end::User-->
			</div>
			<!--end::Topbar-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-5 py-lg-1 gutter-b subheader-transparent" id="kt_subheader">

		</div>
		<!--end::Subheader-->
		<!--begin::Entry-->
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class="container">