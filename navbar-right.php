<?php
//session_start();
//require_once '../config/koneksi.php';
//require_once '../user/class.user.php';
?>

<!-- ==================================================================================================== -->
				<ul class="nav nav-list">
					<li>
						<a href="javascript:void(0)" onclick="swapContent('home')">
							<i class="icon-home"></i>
							<span class="menu-text"> Home </span>
						</a>
					</li>			
<!-- ==================================================================================================== -->
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-tasks"></i>
							<span class="menu-text"> Master </span>

							<b class="arrow icon-angle-down"></b>
						</a>
<!-- ==================================================================================================== -->
						<ul class="submenu">
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/user/user')">
									<i class="icon-double-angle-right"></i>
									User
								</a>
							</li>
<!-- ==================================================================================================== -->
							<?php if ($_SESSION['s_level'] == 'administrator' || $_SESSION['s_level'] == 'supervisor' ) { ?>
							<!--
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/puskesmas/puskesmas')">
									<i class="icon-double-angle-right"></i>
									Puskesmas
								</a>
							</li>
							-->
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/unit_kerja/unit_kerja')">
									<i class="icon-double-angle-right"></i>
									Unit Kerja
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/kategori_jabatan/kat_jab')">
									<i class="icon-double-angle-right"></i>
									Kategori Jabatan
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/jabatan/jabatan')">
									<i class="icon-double-angle-right"></i>
									Jabatan
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/pegawai/pegawai')">
									<i class="icon-double-angle-right"></i>
									Pegawai
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/dokter/dokter')">
									<i class="icon-double-angle-right"></i>
									Dokter
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/dokter_unit/dokter_unit')">
									<i class="icon-double-angle-right"></i>
									Dokter Unit
								</a>
							</li>
<!-- ====================================================================================================
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/pengirim_rujukan/pengirim_rujukan')">
									<i class="icon-double-angle-right"></i>
									Pengirim/Rujukan
								</a>
							</li>
						<?php } ?>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/perusahaan_penjamin/perusahaan_penjamin')">
									<i class="icon-double-angle-right"></i>
									Perusahaan Penjamin
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/kode_penjamin/kode_penjamin')">
									<i class="icon-double-angle-right"></i>
									Kode Penjamin
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="#" class="dropdown-toggle">
									<i class="icon-tasks"></i>
									<span class="menu-text"> Referensi Wilayah </span>
									<b class="arrow icon-angle-down"></b>
								</a>
								<ul class="submenu">
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/propinsi/propinsi')">
											<i class="icon-double-angle-right"></i>
											Propinsi
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/kabupaten/kabupaten')">
											<i class="icon-double-angle-right"></i>
											Kabupaten/Kota
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/kecamatan/kecamatan')">
											<i class="icon-double-angle-right"></i>
											Kecamatan
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/kelurahan/kelurahan')">
											<i class="icon-double-angle-right"></i>
											Kelurahan
										</a>
									</li>
								</ul>
							</li>

<!-- ==================================================================================================== -->					
						</ul>
					</li>
					<!--
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Apoteker </span>
							<b class="arrow icon-angle-down"></b>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Asisten Apoteker </span>
							<b class="arrow icon-angle-down"></b>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Dokter Umum </span>
							<b class="arrow icon-angle-down"></b>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Dokter Gigi </span>
							<b class="arrow icon-angle-down"></b>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Perawat </span>
							<b class="arrow icon-angle-down"></b>
						</a>
					</li>
					-->
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Input Kegiatan </span>
							<b class="arrow icon-angle-down"></b>
						</a>
						<ul class="submenu">
							<li>
								<a href="javascript:void(0)" onclick="swapContent('kegiatan/kegiatan')">
									<i class="icon-double-angle-right"></i>
									Kegiatan Harian
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" onclick="swapContent('kegiatan_bulanan/keg_bln')">
									<i class="icon-double-angle-right"></i>
									Kegiatan Bulanan
								</a>
							</li>
						</ul>
					</li>
					
					
<!-- ==================================================================================================== -->
														
										
<!-- ==================================================================================================== 	-->		
					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Laporan </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						
<!-- ==================================================================================================== -->
						
						<ul class="submenu">
							<!--
							<li>
								<a href="#" class="dropdown-toggle">
									<i class="icon-double-angle-right"></i>
									Kegiatan Harian
								</a>
								<ul class="submenu">
									<li><a href="javascript:void(0)" onclick="swapContent('kegiatan/js_lap_kegharian')">View</a></li>
									<li><a href="javascript:void(0)" onclick="swapContent('kegiatan/js_lap_pdf')">PDF</a></li>
									<li><a href="javascript:void(0)" onclick="swapContent('kegiatan/js_lap_xls')">Xls</a></li>	
								</ul>
							</li>
							-->
							<li>
								<a href="javascript:void(0)" onclick="swapContent('kegiatan/js_lap_kegharian')">
									<i class="icon-double-angle-right"></i>
									Kegiatan Harian
								</a>
							</li>

							<li>
								<a href="javascript:void(0)" onclick="swapContent('kegiatan_bulanan/js_bln')">
									<i class="icon-double-angle-right"></i>
									Kegiatan Bulanan
								</a>
							</li>

							<li>
								<a href="javascript:void(0)" onclick="swapContent('cl/js_cl')">
									<i class="icon-double-angle-right"></i>
									CL
								</a>
							</li>

							<li>
								<a href="javascript:void(0)" onclick="swapContent('lap_dupak/js_usulan_dupak')">
									<i class="icon-double-angle-right"></i>
									Dupak
								</a>
							</li>

							<li>
								<a href="javascript:void(0)" onclick="swapContent('lap_dupak/js_pak')">
									<i class="icon-double-angle-right"></i>
									PAK
								</a>
							</li>
							<!--
							<li>
								<a href="javascript:void(0)" onclick="swapContent('lap-pelkes/lap-pelkes')">
									<i class="icon-double-angle-right"></i>
									Pelayanan Kesehatan
								</a>
							</li>
							-->
						</ul>
					</li>
					
<!-- ==================================================================================================== -->					
					
<!-- ==================================================================================================== -->					
					<li>
						<a href="logout.php">
							<i class="icon-lock"></i>
							<span class="menu-text"> Logout </span>
						</a>
					</li>
				</ul><!--/.nav-list-->
<!-- ==================================================================================================== -->				