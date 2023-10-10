 <!--begin::Main-->
 <!--begin::Header Mobile-->
 <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
 	<!--begin::Logo-->
 	<a href="index.html">
 		<img alt="Logo" src="<?php echo base_url() ?>/assets/media/logos/logo-letter-3.png" class="logo-default max-h-30px" />
 	</a>
 	<!--end::Logo-->
 	<!--begin::Toolbar-->
 	<div class="d-flex align-items-center">
 		<!--begin::Aside Mobile Toggle-->
 		<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
 			<span></span>
 		</button>
 		<!--end::Aside Mobile Toggle-->
 		<!--begin::Header Menu Mobile Toggle-->
 		<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
 			<span></span>
 		</button>
 		<!--end::Header Menu Mobile Toggle-->
 		<!--begin::Topbar Mobile Toggle-->
 		<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
 			<span class="svg-icon svg-icon-xl">
 				<!--begin::Svg Icon | path:<?php echo base_url() ?>/assets/media/svg/icons/General/User.svg-->
 				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
 					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
 						<polygon points="0 0 24 0 24 24 0 24" />
 						<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
 						<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
 					</g>
 				</svg>
 				<!--end::Svg Icon-->
 			</span>
 		</button>
 		<!--end::Topbar Mobile Toggle-->
 	</div>
 	<!--end::Toolbar-->
 </div>
 <!--end::Header Mobile-->
 <div class="d-flex flex-column flex-root">
 	<!--begin::Page-->
 	<div class="d-flex flex-row flex-column-fluid page">
 		<!--begin::Aside-->
 		<div class="aside aside-left d-flex flex-column" id="kt_aside">
 			<!--begin::Brand-->
 			<div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
 				<!--begin::Logo-->
 				<a href="<?= base_url() ?>">
 					<img alt="Logo" src="<?php echo base_url() ?>/assets/media/logos/logo-letter-9.png" class="max-h-50px" />
 				</a>
 				<!--end::Logo-->
 			</div>
 			<!--end::Brand-->
 			<!--begin::Nav Wrapper-->
 			<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
 				<!--begin::Nav-->
 				<ul class="nav flex-column">
 					<!--begin::Item-->
 					<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Dashboard">
 						<a href="<?= base_url() ?>" class="nav-link btn btn-icon btn-clean btn-icon-white btn-lg active">
 							<i class="flaticon2-architecture-and-city icon-lg"></i>
 						</a>
 					</li>
 					<!--end::Item-->
 					<!--begin::Item-->
 					<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data User">
 						<a href="<?= base_url('user/') ?>" class="nav-link btn btn-icon btn-icon-white btn-lg">
 							<i class="flaticon2-user-outline-symbol icon-lg"></i>
 						</a>
 					</li>
 					<!--end::Item-->
 					<!--begin::Item-->
 					<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Anggota">
 						<a href="<?= base_url('anggota/') ?>" class="nav-link btn btn-icon btn-icon-white btn-lg">
 							<i class="flaticon2-user icon-lg"></i>
 						</a>
 					</li>
					 <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Pengunjung">
 						<a href="<?= base_url('pengunjung/') ?>" class="nav-link btn btn-icon btn-icon-white btn-lg">
 							<i class="flaticon2-group icon-lg"></i>
 						</a>
 					</li>
 					<!--end::Item-->
 					<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Laporan Pengunjung dan Anggota">
 						<a href="<?= base_url('laporan') ?>" class="nav-link btn btn-icon btn-icon-white btn-lg">
 							<i class="flaticon2-crisp-icons icon-lg"></i>
 						</a>
 					</li>
 					<!--end::Item-->
 					<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Cek Kartu">
 						<a href="<?= base_url('anggota/cekkartu') ?>" class="nav-link btn btn-icon btn-icon-white btn-lg">
 							<i class="flaticon2-writing icon-lg"></i>
 						</a>
 					</li>
 				</ul>
 				<!--end::Nav-->
 			</div>
 			<!--end::Nav Wrapper-->
 		</div>
 		<!--end::Aside-->