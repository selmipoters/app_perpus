<div class="row">
<div class="col-xl-3">
										<!--begin::Stats Widget 22-->
										<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-3.svg)">
											<!--begin::Body-->
											<div class="card-body my-4">
												<a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Data User</a>
												<div class="font-weight-bold text-muted font-size-sm">
												<span class="text-dark-75 font-weight-bolder font-size-h2 mr-2"><?php echo $banyakuser?></span>User</div>
												<div class="progress progress-xs mt-7 bg-info-o-60">
													<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $banyakuser?>0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 22-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 22-->
										<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-3.svg)">
											<!--begin::Body-->
											<div class="card-body my-4">
												<a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Data Anggota</a>
												<div class="font-weight-bold text-muted font-size-sm">
												<span class="text-dark-75 font-weight-bolder font-size-h2 mr-2"><?php echo $banyakanggota?></span>Anggota</div>
												<div class="progress progress-xs mt-7 bg-info-o-60">
													<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $banyakanggota?>0%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 22-->
									</div>
                                    <div class="col-xl-3">
										<!--begin::Stats Widget 22-->
										<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-3.svg)">
											<!--begin::Body-->
											<div class="card-body my-4">
												<a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Pengunjung Hari ini</a>
												<div class="font-weight-bold text-muted font-size-sm" id="pengunjungday">
												<span class="text-dark-75 font-weight-bolder font-size-h2 mr-2" ></span> Pengunjung</div>
												<div class="progress progress-xs mt-7 bg-info-o-60">
													<div class="progress-bar bg-info" role="progressbar"  id="pengunjungdaygrafik" style="" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 22-->
									</div>
                                    <div class="col-xl-3">
										<!--begin::Stats Widget 22-->
										<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-3.svg)">
											<!--begin::Body-->
											<div class="card-body my-4">
												<a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Pengunjung Didalam</a>
												<div class="font-weight-bold text-muted font-size-sm"  id="pengunjungdidalam">
												<span class="text-dark-75 font-weight-bolder font-size-h2 mr-2"></span>Pengunjung</div>
												<div class="progress progress-xs mt-7 bg-info-o-60">
													<div class="progress-bar bg-info" id="pengunjungdidalamgrafik" role="progressbar" style="" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 22-->
									</div>
                                   
</div>

            <div class="resize-triggers">
                <div class="expand-trigger">
                    <div style="width: 506px; height: 447px;"></div>
                </div>
                <div class="contract-trigger"></div>
            </div>
            <div class="row">
<div class="col-xl-6">
										<!--begin::Mixed Widget 18-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<div class="card-title font-weight-bolder">
													<div class="card-label">Data Pengunjung Perpustakaan
													<div class="font-size-sm text-muted mt-2"></div></div>
												</div>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
														<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Chart-->
												<div id="" style="height: 250px">
                                                <center><img alt="Logo" src="<?php echo base_url() ?>/assets/media/logos/logo-letter-13.png" class="max-h-160px" />
                                                </center>
                                                </div>
												<!--end::Chart-->
												<!--begin::Items-->
												<div class="mt-n12 position-relative zindex-0">
													<!--begin::Widget Item-->
													<div class="d-flex align-items-center mb-8">
														<!--begin::Symbol-->
														<div class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
															<div class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-gray-500">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																			<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																			<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																			<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Total Pengunjung Hari Ini</a>
															<div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $banyakpengunjungday ?> Pengunjung</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Widget Item-->
													<!--begin::Widget Item-->
													<div class="d-flex align-items-center mb-8">
														<!--begin::Symbol-->
														<div class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
															<div class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-gray-500">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-pie.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3" />
																			<path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Total Pengunjung Minggu Ini</a>
															<div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $banyakpengunjungweek ?> Pengunjung</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Widget Item-->
													<!--begin::Widget Item-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
															<div class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-gray-500">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Total Pengunjung Bulan Ini</a>
															<div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $banyakpengunjungmonth ?> Pengunjung</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Widget Item-->
												</div>
												<!--end::Items-->
</div>
</div>
</div>
<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<!--begin::Header-->
											<div class="card-header h-auto">
												<!--begin::Title-->
												<div class="card-title py-5">
													<h3 class="card-label">Grafik Pengunjung</h3>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
	
        var myChart = Highcharts.chart('chart', {
            
            chart: {
        zoomType: 'x'
      },
      title: {
        text: 'Grafik Pengunjung'
      },
      subtitle: {
        text: document.ontouchstart === undefined ?
          'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
      },
      xAxis: {
		title: {
          text: 'Tanggal'
        },
		categories: [<?php
                       foreach ($grafiktgl as $grafiktgl) {
                            echo "'" . $grafiktgl->tgl_masuk . "'" .  ",";
                        }
                    ?>]
      },
      yAxis: {
        title: {
          text: 'Total Pengunjung'
        }
      },
      legend: {
        enabled: false
      },
      plotOptions: {
        area: {
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, Highcharts.getOptions().colors[0]],
              [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
            ]
          },
          marker: {
            radius: 2
          },
          lineWidth: 1,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          threshold: null
        }
      },

      series: [{
        type: 'area',
		
        name: 'Pengunjung',
		// ['2021-11-15',2],['2021-11-16',5],['2021-11-17',12],['2021-11-18',22],['2021-11-19',3],['2021-11-20',7],['2021-11-21',54]
        data: [<?php
                       foreach ($datagrafik as $datagrafik) {
                            echo "['" . $datagrafik->tgl_masuk . "'" .  ",". $datagrafik->total."] ,";
                        }
                    ?>]
      }]
                    
            
        });
    });

	setInterval(function() {
                        $.ajax({
                            type: 'GET',
                            url: "<?=base_url("dashboard/tampildata")?>",
                            dataType: 'json',
                            success: function(json) {
								$('#pengunjungdidalam span').text(json['masuk']);
								$('#pengunjungdidalamgrafik').attr('style', 'width:'+json['masuk']+'0%;');
								$('#pengunjungday span').text(json['day']);
								$('#pengunjungdaygrafik').attr('style', 'width:'+json['day']+'0%;');
                                // console.log(json['masuk']);
                            }
                        });
				  

		}, 500);	
</script>
											<!--end::Body-->
										
										



