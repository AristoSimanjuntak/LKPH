<?= $this->include('layouts/verticalmenu/header'); ?>

<!-- Mutipleselect css-->
<link rel="stylesheet" href="<?php echo base_url('assets/img/logo.png'); ?>">

</head>

<?= $this->include('layouts/verticalmenu/master'); ?>

<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5">Realisasi Penerimaan dan Pengeluaran Tahun Anggaran 2022</h2>
	</div>
</div>

<!-- End Page Header -->
<div class="row square">
	<div class="col-lg-12 col-md-12">
		<div class="card custom-card">
			<div class="card-body">

				<div class="row row-sm mg-b-20">
					<div class="col-lg-6">
						<p class="mg-b-10"><b>SKPD</b> </p>
						<select class="form-control select2">
							<option value="Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan">
								Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan
							</option>

						</select>

					</div><!-- col-4 -->
					<div class="col-lg-6 mg-t-20 mg-lg-t-0">
						<p class="mg-b-10"> <b>Klasifikasi Laporan</b> </p>
						<select class="form-control select2">
							<option value="pendapatan">
								Laporan Pendapatan Daerah
							</option>
							<option value="belanja">
								Laporan Belanja Daerah
							</option>
						</select>
					</div><!-- col-4 -->
				</div>

				<div class="row row-sm">
					<div class="col-lg-6">

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fe fe-calendar lh--9 op-6"></i>
								</div>
							</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
						</div>
					</div><!-- col-4 -->
					<div class="col-lg-4 mg-t-20 mg-lg-t-0">
						<div class="btn-list">
							<button class="btn ripple btn-success">Terapkan</button>
							<button class="btn ripple btn-warning">Reset</button>
							<button class="btn ripple btn-info" data-target="#modaldemo1" data-toggle="modal" href="">Tambah</button>
						</div>
					</div><!-- col-4 -->

					<!-- Form Modal -->
					<div class="modal" id="modaldemo1">
						<div class="modal-dialog modal-xl" role="document">
							<div class="modal-content">
								<div class="modal-body pd-20 pd-sm-40">
									<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									<h5 class="modal-title mb-4 text-center">Tambah Laporan</h5>
									<div class="form-group">
										<label class="">SKPD</label>
										<select class="form-control select2">
											<option value="Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan">
												Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan
											</option>

										</select>
									</div>
									<div class="form-group">
										<label class="">Klasifikasi Laporan</label>
										<select class="form-control select2">
											<option value="pendapatan">
												Laporan Pendapatan Daerah
											</option>
											<option value="belanja">
												Laporan Belanja Daerah
											</option>
										</select>
									</div>
									<div class="form-group">
										<label class="">Tanggal</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fe fe-calendar lh--9 op-6"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="">Uraian</label>
										<input class="form-control" placeholder="Uraian" type="text">
									</div>
									<div class="form-group">
										<label class="">Nilai</label>
										<input class="form-control" placeholder="Nilai" type="text">
									</div>
									<div>
										<button class="btn ripple btn-primary pd-x-30 mg-r-5">Tambah</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Form Modal End-->

				</div>
				<br>
				<div class="profile-tab tab-menu-heading">
					<nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
						<a class="nav-link  active" data-toggle="tab" href="#details">Laporan Pendapatan Daerah</a>
						<a class="nav-link" data-toggle="tab" href="#ringkasan">Laporan Belanja Daerah</a>
						<a class="nav-link" data-toggle="tab" href="#opd">Laporan Realisasi</a>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Row -->
<div class="row row-sm">
	<div class="col-lg-12 col-md-12">
		<div class="card custom-card main-content-body-profile">
			<div class="tab-content">
				<div class="main-content-body tab-pane p-4 border-top-0 active" id="details">
					<!-- Relasi Pendapatan Daerah -->
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h4 class="main-content-label mb-3 tx-16">Realisasi Pendapatan Daerah</h4>
								</div>
								<div>
									<button class="btn ripple btn-info pd-x-30 mg-r-5 mb-3" data-target="#modaldemo1" data-toggle="modal" href="">Tambah</button>
								</div>
								<!-- Form Modal -->
								<div class="modal" id="modaldemo1">
									<div class="modal-dialog modal-xl" role="document">
										<div class="modal-content">
											<div class="modal-body pd-20 pd-sm-40">
												<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												<h5 class="modal-title mb-4 text-center">Tambah Laporan Pendapatan Daerah</h5>
												<div class="form-group">
													<label class="">SKPD</label>
													<select class="form-control select2">
														<option value="Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan">
															Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan
														</option>

													</select>
												</div>
												<div class="form-group">
													<label class="">Klasifikasi Laporan</label>
													<select class="form-control select2">
														<option value="pendapatan">
															Laporan Pendapatan Daerah
														</option>
														<option value="belanja">
															Laporan Belanja Daerah
														</option>
													</select>
												</div>
												<div class="form-group">
													<label class="">Tanggal</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
													</div>
												</div>
												<div class="form-group">
													<label class="">Uraian</label>
													<input class="form-control" placeholder="Uraian" type="text">
												</div>
												<div class="form-group">
													<label class="">Nilai</label>
													<input class="form-control" placeholder="Nilai" type="text">
												</div>
												<div>
													<button class="btn ripple btn-primary pd-x-30 mg-r-5">Tambah</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Form Modal End-->
								<div class="table-responsive">
									<table id="example3" class="table table-striped table-bordered text-nowrap">
										<thead>
											<tr>
												<th class="wd-5">No</th>
												<th class="wd-25p">SKPD</th>
												<th class="wd-20p">Tanggal</th>
												<th class="wd-25p">Uraian</th>
												<th class="wd-20p">Nilai</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>

											</tr>
											<tr>
												<td>2</td>
												<td>Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>63</td>

											</tr>
											<tr>
												<td>3</td>
												<td>Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- Relasi Pendapatan Daerah END-->
				</div>

				<div class="main-content-body tab-pane p-4 border-top-0" id="ringkasan">
					<!-- Relasi Pendapatan Daerah -->
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="main-content-label mb-3 tx-16">Realisasi Belanja Daerah</h6>
								</div>
								<div>
									<button class="btn ripple btn-info pd-x-30 mg-r-5 mb-3" data-target="#modaldemo2" data-toggle="modal" href="">Tambah</button>
								</div>
								<!-- Form Modal -->
								<div class="modal" id="modaldemo2">
									<div class="modal-dialog modal-xl" role="document">
										<div class="modal-content">
											<div class="modal-body pd-20 pd-sm-40">
												<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												<h5 class="modal-title mb-4 text-center">Tambah Laporan Belanja Daerah</h5>
												<div class="form-group">
													<label class="">SKPD</label>
													<select class="form-control select2">
														<option value="Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan">
															Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan
														</option>

													</select>
												</div>
												<div class="form-group">
													<label class="">Klasifikasi Laporan</label>
													<select class="form-control select2">
														<option value="pendapatan">
															Laporan Pendapatan Daerah
														</option>
														<option value="belanja">
															Laporan Belanja Daerah
														</option>
													</select>
												</div>
												<div class="form-group">
													<label class="">Tanggal</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
													</div>
												</div>
												<div class="form-group">
													<label class="">Uraian</label>
													<input class="form-control" placeholder="Uraian" type="text">
												</div>
												<div class="form-group">
													<label class="">Jenis Belanja</label>
													<input class="form-control" placeholder="Jenis Belanja" type="text">
												</div>
												<div class="form-group">
													<label class="">Nilai</label>
													<input class="form-control" placeholder="Nilai" type="text">
												</div>
												<div>
													<button class="btn ripple btn-primary pd-x-30 mg-r-5">Tambah</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Form Modal End-->
								<div class="table-responsive">
									<table id="example1" class="table table-striped table-bordered text-nowrap">
										<thead>
											<tr>
												<th class="wd-5p">No</th>
												<th class="wd-20p">SKPD</th>
												<th class="wd-15">Tanggal</th>
												<th class="wd-20p">Uraian</th>
												<th class="wd-20p">Jenis Belanja</th>
												<th class="wd-20p">Nilai</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>61</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>63</td>
												<td>61</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>61</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- Relasi Pendapatan Daerah END-->
				</div>


				<div class="main-content-body  tab-pane border-top-0" id="opd">
					<div class="row row-sm">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="main-content-label mb-4">Laporan Realisasi</h6>
									</div>
									<div class="row row-sm">
										<div class="col-md-6">
											<div class=" mg-b-30">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
													</div><input class="form-control" placeholder="Date Range" type="text" id="datepicker-date">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mg-b-30">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-calendar lh--9 op-6"></i>
														</div>
													</div><input class="form-control" placeholder="Month Range" type="text" id="datepicker-month">
												</div>
											</div>
										</div>
	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
<!-- End Row -->




<!-- col end -->
</div><!-- Row end -->

</div>
</div>
</div>

<?= $this->include('layouts/verticalmenu/footer'); ?>
<?= $this->include('layouts/verticalmenu/sidebar'); ?>


</div>

<?= $this->include('layouts/verticalmenu/scripts'); ?>

<!-- Internal Chart.Bundle js-->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

<!-- Peity js-->
<script src="<?php echo base_url('assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

<!-- Internal Morris js -->
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js'); ?>"></script>

<!-- Circle Progress js-->
<script src="<?php echo base_url('assets/js/circle-progress.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/chart-circle.js'); ?>"></script>

<!-- Internal Dashboard js-->
<script src="<?php echo base_url('assets/js/index.js'); ?>"></script>

</body>

</html>