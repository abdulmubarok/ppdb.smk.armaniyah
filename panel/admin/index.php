<?php
 goto e1K4u; Z9JQg: SidebarMenu($Admin_row, $admin_nama); goto NJ5D4; oAkWw: require_once "\56\x2e\x2f\143\157\x72\x65\57\x73\x65\163\x73\x69\x6f\156\x2e\160\x68\160"; goto tOKoX; NJ5D4: HeaderMenu(); goto OxYR1; mLQ05: if ($_GET["\160\x61\147\x65"] == "\x64\x61\x73\x68\x62\157\x61\162\x64") { ?>
            <?php  $Dashboard = Dashboard(); $DashboardData = $Dashboard->fetch_array(); $JumlahGender = JumlahGender($DashboardData["\152\x6d\x6c\137\160\162\x69\x61"], $DashboardData["\x6a\155\154\x5f\x77\x61\156\151\x74\141"]); $PersentasePria = NilaiPersen($DashboardData["\152\x6d\154\x5f\x70\162\x69\x61"], $JumlahGender); $PersentaseWanita = NilaiPersen($DashboardData["\152\155\x6c\137\167\x61\x6e\x69\164\x61"], $JumlahGender); ?>
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="?page=dashboard">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

             <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                                               <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo JumlahPendaftar(); ?>
</h2>
                                                <span>Pendaftar</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $DashboardData["\x6a\155\x6c\x5f\166\145\x72\x69\x66\x69\x6b\141\x73\x69"]; ?>
</h2>
                                                <span>Belum Diverifikasi</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $DashboardData["\x6a\x6d\x6c\x5f\x74\145\162\x76\145\x72\x69\146\x69\153\x61\x73\x69"]; ?>
</h2>
                                                <span>Terverifikasi</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $DashboardData["\x6a\x6d\x6c\137\x64\151\164\x65\x72\151\x6d\141"]; ?>
</h2>
                                                <span>Diterima</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $DashboardData["\x6a\x6d\x6c\137\x64\x69\x74\x6f\x6c\141\x6b"]; ?>
</h2>
                                                <span>Ditolak</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <!-- RECENT REPORT 2-->
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h5 class="title-2 tm-b-5">Presentase</h5>
                                        <em class="small">Presentase pendaftar berdasarkan jenis kelamin</em>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>pria <?php  echo $PersentasePria; ?>
</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>wanita <?php  echo $PersentaseWanita; ?>
</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart93"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">data masuk</h3>
                                       <em class="small">Data masuk terakhir yang belum diverifikasi</em>
                                       <div class="table-responsive">
                                         <?php  $DataMasuk = DataMasuk(); $row = $DataMasuk->fetch_array(); $id_p = $row["\151\x64"]; $nama_p = $row["\156\x61\x6d\x61"]; $nomor_pendaftaran_p = $row["\x6e\157\155\157\162\137\160\x65\156\144\x61\146\164\141\162\141\x6e"]; $status_pendaftaran_p = $row["\x73\164\x61\x74\165\x73\x5f\x70\x65\156\x64\141\x66\164\141\x72\x61\156"]; $DataMasuk->free_result(); ?>
 
                                         <table class="table">
                                            <tr>
                                                <td>No. Pendft</td>
                                                <td><?php  echo $nomor_pendaftaran_p; ?>
</td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><?php  echo $nama_p; ?>
</td>
                                            </tr>
                                            <tr>
                                                <td>Status Pendaft</td>
                                                <td><?php  echo $status_pendaftaran_p; ?>
</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><a href=?page=verifikasi-data&id=<?php  echo $id_p; ?>
>Verifikasi</td>
                                                
                                            </tr>
                                        </table>   
                                       </div>
                                       
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                                <!-- END RECENT REPORT 2             -->
<?php  } elseif ($_GET["\160\141\x67\x65"] == "\x69\x6e\146\157\x72\155\141\163\151") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Informasi</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
            <?php  LoadInformasi(); } elseif ($_GET["\160\x61\x67\x65"] == "\151\156\146\x6f\x72\x6d\x61\163\151\x2d\x74\x61\155\x62\141\x68") { ?>
     <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Tambah Informasi</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section> 
        <?php  LoadInformasiTambah(); ?>
    
<?php  } elseif ($_GET["\x70\141\x67\145"] == "\x69\156\146\157\162\155\141\163\x69\55\x65\x64\x69\x74") { ?>
  <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Edit Informasi</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section> 
        <?php  if (!LoadInformasiEdit(trim($_GET["\151\144"]))) { echo "\xa\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x3c\x64\x69\166\x20\x63\x6c\x61\x73\x73\75\x22\143\x6f\156\x74\x61\x69\156\145\x72\55\x66\154\165\151\x64\40\x6d\164\55\x34\42\x3e\xa\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\74\x64\x69\166\40\143\154\141\x73\163\x3d\42\x61\x6c\145\x72\x74\40\141\165\55\141\154\145\x72\164\x2d\144\x61\x6e\x67\x65\162\40\141\154\x65\162\164\x2d\144\151\163\x6d\x69\x73\x73\x69\x62\154\x65\40\146\x61\144\x65\40\163\150\x6f\167\x20\x61\x75\x2d\x61\154\145\x72\x74\40\x61\x75\x2d\x61\x6c\145\x72\x74\55\55\67\x30\160\145\162\x22\x20\162\x6f\x6c\x65\75\x22\x61\x6c\145\162\x74\42\76\xa\x20\40\40\40\40\40\x20\x20\40\x20\40\40\40\x20\40\40\40\40\x20\40\x20\40\40\x20\74\151\x20\143\154\141\163\163\75\42\172\155\x64\x69\x20\x7a\x6d\x64\x69\55\x63\x6c\x6f\x73\x65\55\x63\151\162\143\154\x65\42\76\x3c\57\151\x3e\12\x20\x20\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\40\x3c\x73\x70\x61\156\40\143\x6c\141\163\163\x3d\42\x63\x6f\156\164\145\156\x74\x22\x3e\x44\x61\x74\x61\40\x74\151\x64\141\153\x20\x64\151\x74\x65\155\165\153\141\x6e\x2e\74\57\163\160\141\156\x3e\xa\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\40\x20\40\40\x20\40\x20\x20\40\40\40\40\74\x62\165\164\164\x6f\156\40\143\x6c\x61\x73\x73\x3d\x22\x63\x6c\x6f\163\145\42\x20\x74\171\160\x65\x3d\42\x62\165\x74\x74\x6f\x6e\x22\40\144\x61\x74\141\x2d\x64\x69\x73\155\151\163\163\x3d\x22\141\x6c\x65\162\x74\x22\x20\141\x72\x69\141\55\x6c\141\142\145\154\x3d\42\103\x6c\x6f\163\145\42\76\xa\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x20\40\40\40\x20\40\40\40\40\x20\x20\40\x20\x3c\x73\160\141\x6e\x20\x61\162\x69\x61\x2d\150\151\x64\x64\145\x6e\75\x22\164\162\x75\145\42\x3e\12\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\74\151\40\143\154\x61\x73\x73\x3d\42\x7a\155\x64\x69\x20\172\155\x64\151\x2d\x63\154\157\163\145\x2d\143\x69\x72\x63\x6c\145\x22\76\x3c\x2f\x69\x3e\xa\40\40\x20\40\40\x20\40\40\x20\x20\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x3c\x2f\x73\x70\141\156\76\xa\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x20\74\x2f\142\165\x74\x74\157\156\x3e\12\x20\40\x20\40\x20\40\x20\40\x20\40\40\40\x20\x20\40\x20\x20\40\x20\40\x3c\57\144\151\166\x3e\12\x20\40\40\40\40\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\x3c\57\144\151\x76\76\12\12\x20\40\x20\x20\40\x20\40\x20\40\40\40\40\40\40\40\40"; } else { LoadInformasiUpdate(); } ?>
  
<?php  } elseif ($_GET["\160\x61\x67\x65"] == "\151\x6e\146\x6f\162\x6d\x61\163\151\55\x64\x65\x6c\x65\164\145") { ?>
    <?php  if (!LoadInformasiEdit(trim($_GET["\151\144"]))) { echo "\12\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\74\144\151\166\x20\x63\x6c\x61\163\x73\x3d\42\x63\x6f\x6e\164\x61\x69\156\x65\162\55\x66\x6c\165\151\144\42\76\12\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\74\x64\x69\x76\40\143\x6c\x61\163\163\x3d\42\x63\157\156\164\x61\151\156\145\162\x2d\146\154\165\151\x64\40\155\x74\55\64\42\x3e\12\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\40\74\x64\151\x76\x20\143\154\141\x73\x73\75\42\x61\154\x65\x72\x74\40\141\165\x2d\x61\154\x65\162\x74\55\x64\x61\156\147\x65\x72\x20\x61\154\x65\162\x74\55\144\151\163\155\x69\163\x73\x69\142\x6c\145\x20\146\x61\144\x65\x20\x73\x68\x6f\x77\40\141\x75\55\141\x6c\145\x72\164\x20\141\165\55\141\x6c\145\x72\x74\x2d\55\x37\60\160\x65\x72\42\x20\162\x6f\154\x65\x3d\x22\141\x6c\145\x72\x74\x22\76\xa\x20\x20\40\40\40\40\x20\40\x20\x20\40\x20\40\40\40\x20\40\40\x20\x20\40\40\40\x20\74\x69\40\x63\x6c\x61\163\163\75\x22\x7a\x6d\x64\151\x20\x7a\x6d\144\x69\55\143\x6c\157\x73\x65\55\143\x69\162\x63\154\x65\x22\76\x3c\57\151\x3e\xa\x20\40\x20\x20\40\40\40\40\x20\x20\x20\40\40\40\40\40\40\x20\40\40\x20\x20\x20\40\x3c\x73\160\141\x6e\x20\143\x6c\x61\163\x73\75\42\143\157\x6e\164\x65\x6e\164\x22\x3e\104\141\x74\141\40\x74\x69\x64\x61\x6b\x20\144\151\164\145\x6d\165\x6b\x61\x6e\x2e\x3c\x2f\x73\x70\x61\x6e\76\12\x20\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\40\x20\40\40\40\x20\x20\40\x3c\142\x75\164\x74\x6f\156\40\x63\x6c\141\x73\x73\x3d\x22\143\154\157\163\x65\42\40\x74\171\x70\145\75\42\142\x75\x74\164\157\x6e\42\40\x64\141\164\x61\x2d\144\x69\x73\x6d\x69\x73\163\75\x22\x61\154\145\x72\x74\x22\40\x61\162\151\x61\55\x6c\141\x62\x65\x6c\x3d\x22\x43\x6c\157\163\x65\42\76\xa\40\40\40\40\x20\40\40\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\74\x73\160\141\156\40\141\x72\x69\x61\x2d\150\151\x64\144\145\x6e\75\x22\164\x72\165\145\x22\x3e\xa\40\40\40\40\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\40\74\x69\x20\143\x6c\x61\x73\163\75\x22\x7a\155\x64\151\40\x7a\x6d\144\x69\x2d\143\154\157\163\145\55\x63\x69\x72\x63\154\145\42\76\74\57\151\x3e\xa\40\x20\40\40\40\40\40\40\40\x20\40\x20\40\x20\40\x20\40\x20\40\40\40\40\x20\x20\40\x20\x20\40\x3c\x2f\163\160\141\x6e\76\xa\40\40\x20\40\x20\x20\x20\40\x20\40\40\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\40\x3c\57\x62\x75\164\x74\157\x6e\76\12\40\40\40\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x3c\x2f\144\x69\166\76\xa\x20\x20\x20\x20\40\x20\40\40\40\40\x20\x20\x20\40\40\x20\74\57\144\151\166\76\xa\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\40\40\x20\40\74\x2f\144\x69\x76\76\xa\40\40\40\40\x20\40\x20\40\x20\40\x20\40\40\x20\40\40"; } else { Load_DeleteInfo(); } ?>
  
<?php  } elseif ($_GET["\x70\141\x67\145"] == "\x64\141\164\x61\55\x70\x65\x6e\x64\x61\146\x74\x61\x72\x2d\163\x65\x6d\x75\x61") { ?>
 
        <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Data Pendaftar</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>           
         <?php  Pendaftar(); ?>
 
<?php  } elseif ($_GET["\160\x61\147\x65"] == "\x64\x61\x74\141\55\160\145\x6e\144\141\x66\x74\141\162\x2d\142\x76\145\162\151\x66\151\153\141\x73\x69") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Data Pendaftar / Belum Diverifikasi</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>  
         <?php  PendaftarBelumVerifikasi(); } elseif ($_GET["\x70\x61\147\x65"] == "\x64\x61\x74\141\55\x70\145\156\144\x61\x66\x74\141\162\55\x74\145\x72\x76\145\x72\x69\x66\151\x6b\x61\163\151") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Data Pendaftar / Terverifikasi</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>  
         <?php  PendaftarTerverifikasi(); ?>
  
<?php  } elseif ($_GET["\x70\141\147\x65"] == "\144\141\164\141\55\160\x65\156\x64\141\146\164\x61\162\x2d\144\151\164\145\162\x69\155\x61") { ?>
        <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                            <li class="list-inline-item">Data Pendaftar / Diterima </li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>  
         <?php  PendaftarDiterima(); ?>
 
<?php  } elseif ($_GET["\x70\141\147\x65"] == "\144\141\x74\x61\55\160\x65\x6e\x64\x61\146\164\141\162\55\x64\151\164\157\154\x61\153") { ?>
     <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Data Pendaftar / Ditolak </li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>  
         <?php  PendaftarDitolak(); ?>
 
<?php  } elseif ($_GET["\160\141\147\x65"] == "\144\141\x74\141\x2d\x70\x65\x6e\144\x61\x66\164\x61\162") { ?>
         <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Data Pendaftar</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section> 
         <?php  if (!DataPendaftarDetail($_GET["\151\144"])) { echo "\xa\x20\40\x20\40\40\x20\40\40\x20\x20\40\40\40\74\144\151\x76\x20\143\154\141\x73\163\75\x22\143\x6f\156\164\141\151\x6e\x65\x72\55\146\154\x75\151\144\40\155\164\x2d\64\42\x3e\12\x20\40\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\x20\x20\74\x64\x69\166\x20\x63\154\x61\163\x73\75\42\x61\x6c\145\162\x74\40\141\154\145\x72\x74\55\144\141\156\147\145\x72\40\x61\154\145\x72\x74\x2d\144\151\163\155\151\x73\x73\151\x62\154\145\x20\146\x61\144\145\x20\x73\x68\x6f\167\x22\x20\162\x6f\154\x65\x3d\x22\x61\x6c\x65\x72\x74\x22\76\xa\x20\x20\x20\x20\40\x20\x20\40\40\40\40\40\40\40\40\x20\40\40\x20\x20\40\x20\40\40\x3c\151\40\x63\x6c\141\163\163\75\42\172\x6d\x64\x69\x20\172\155\144\151\55\x63\x6c\157\163\145\55\x63\151\162\143\154\x65\x22\x3e\x3c\x2f\151\76\12\40\40\40\x20\x20\40\40\40\40\x20\40\x20\40\40\40\40\40\x20\40\x20\x20\x20\x20\40\x3c\163\160\x61\156\40\143\154\141\163\x73\75\42\143\157\x6e\x74\x65\x6e\164\x22\76\104\x61\x74\x61\x20\x74\x69\144\x61\x6b\x20\144\x69\x74\x65\x6d\165\x6b\x61\156\56\74\57\163\x70\x61\156\76\xa\x20\x20\x20\x20\40\40\40\40\40\40\40\40\40\40\40\40\40\40\x20\x20\40\40\x20\x20\74\142\165\x74\164\157\x6e\x20\x63\x6c\x61\163\163\75\42\143\154\x6f\163\145\42\x20\x74\171\x70\x65\x3d\42\x62\x75\x74\x74\x6f\156\42\40\144\x61\x74\141\55\144\151\163\x6d\151\163\x73\x3d\42\x61\154\x65\162\164\42\40\141\x72\151\141\55\x6c\x61\x62\x65\x6c\x3d\42\x43\154\x6f\x73\145\x22\x3e\12\x20\40\x20\x20\40\40\40\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\x20\40\x20\40\x20\40\x20\40\x20\74\163\x70\x61\x6e\40\x61\x72\x69\x61\55\150\151\144\144\145\x6e\75\x22\164\162\x75\x65\x22\76\12\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\x3c\151\x20\143\154\x61\163\x73\75\x22\x7a\155\x64\151\x20\x7a\x6d\x64\151\x2d\143\x6c\157\163\145\x2d\x63\151\x72\x63\x6c\145\42\76\74\x2f\151\x3e\xa\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\40\40\40\74\57\163\x70\x61\x6e\76\12\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\x20\40\x20\x20\x20\40\40\40\x20\x3c\57\142\x75\x74\164\157\x6e\x3e\xa\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\40\x20\74\x2f\144\151\x76\x3e\xa\40\40\40\x20\40\40\x20\x20\x20\40\x20\x20\74\x2f\144\151\x76\76\12\x20\40\x20\x20\x20\40\40\x20\40\x20\40\x20"; } else { LoadDataPendaftar(); } } elseif ($_GET["\160\141\x67\145"] == "\144\x61\164\141\55\160\x65\156\x64\141\146\164\141\x72\x2d\x64\x65\x6c\145\164\x65") { ?>
    <?php  if (!DataPendaftarDetail($_GET["\x69\x64"])) { echo "\xa\40\40\x20\40\40\40\x20\x20\40\x20\x20\x20\40\40\40\40\x3c\x64\x69\166\40\143\x6c\141\163\x73\x3d\42\143\157\x6e\x74\141\151\x6e\x65\x72\55\146\x6c\165\151\144\x20\155\x74\x2d\x34\x22\76\12\x20\40\40\x20\40\40\40\40\40\40\40\40\x20\x20\40\x20\x20\40\40\x20\74\144\x69\x76\40\x63\x6c\x61\163\x73\75\42\x61\x6c\x65\x72\x74\x20\141\165\x2d\141\x6c\145\x72\164\55\163\165\143\x63\x65\163\x73\40\x61\154\x65\x72\164\x2d\144\151\163\x6d\x69\163\x73\151\x62\x6c\145\40\x66\x61\x64\x65\x20\163\x68\x6f\x77\40\x61\x75\x2d\x61\x6c\145\x72\x74\x20\141\x75\x2d\x61\154\x65\x72\x74\x2d\x2d\67\60\160\145\162\x22\40\162\157\x6c\x65\75\x22\x61\x6c\x65\162\x74\42\76\12\40\40\40\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\40\74\151\x20\x63\x6c\x61\163\x73\75\x22\172\x6d\144\151\x20\x7a\155\x64\151\x2d\x63\154\157\x73\145\x2d\x63\x69\x72\x63\154\x65\x22\x3e\74\x2f\x69\x3e\12\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x3c\x73\x70\141\x6e\x20\143\x6c\141\163\x73\75\42\x63\157\x6e\164\x65\x6e\x74\x22\76\104\x61\x74\141\x20\x74\x69\144\141\153\x20\144\151\x74\145\155\165\153\141\156\56\74\57\x73\x70\x61\156\76\xa\40\x20\x20\x20\40\x20\40\40\x20\40\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\40\x20\x3c\x62\x75\164\x74\157\156\x20\x63\154\141\x73\x73\75\x22\x63\154\x6f\163\x65\42\x20\164\171\160\x65\x3d\42\x62\165\x74\164\x6f\156\42\x20\144\x61\x74\141\x2d\144\151\163\155\151\163\163\x3d\x22\141\154\145\x72\164\42\40\141\x72\x69\x61\x2d\x6c\x61\x62\x65\154\75\42\103\x6c\x6f\163\x65\x22\x3e\12\x20\40\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\74\163\160\141\x6e\x20\141\x72\x69\x61\x2d\150\x69\144\x64\145\x6e\x3d\42\x74\162\165\145\42\x3e\xa\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x3c\151\40\x63\x6c\x61\x73\x73\75\x22\x7a\155\144\151\40\172\x6d\x64\151\55\143\154\x6f\163\145\x2d\143\151\162\143\154\x65\42\76\x3c\x2f\x69\x3e\xa\40\40\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\40\74\x2f\163\x70\x61\x6e\x3e\xa\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\40\x20\40\x20\x20\40\40\40\x20\x20\40\74\x2f\142\165\x74\x74\157\x6e\x3e\xa\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\40\x3c\x2f\144\151\166\x3e\xa\x20\40\40\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\74\57\x64\151\x76\76\xa\xa\40\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\40\x20"; } else { PendaftarDelete_load(); } } elseif ($_GET["\x70\141\147\145"] == "\160\145\155\x62\141\x79\141\162\x61\x6e") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Data Pembayaran </li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>  
         <?php  Pembayaran(); ?>
 
<?php  } elseif ($_GET["\x70\141\x67\145"] == "\x76\x65\x72\x69\146\x69\153\x61\x73\151\55\144\x61\164\x61") { ?>
     <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Verifikasi Data</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         </section>
         <?php  if (!DataPendaftarDetail($_GET["\151\144"])) { echo "\12\x20\40\x20\40\x20\40\x20\x20\40\40\x20\40\x20\74\144\x69\x76\40\x63\154\x61\163\x73\x3d\x22\x63\157\156\x74\x61\151\x6e\145\x72\55\146\x6c\x75\x69\144\40\155\x74\x2d\64\x22\x3e\xa\40\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\74\144\151\166\x20\x63\x6c\141\x73\163\75\x22\141\x6c\x65\162\164\x20\x61\154\145\162\164\55\x64\x61\156\147\x65\x72\x20\141\154\x65\162\x74\55\x64\x69\163\x6d\151\x73\163\151\x62\x6c\x65\40\146\x61\x64\145\x20\x73\x68\x6f\x77\42\40\x72\x6f\154\x65\x3d\x22\x61\x6c\145\162\164\x22\76\12\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\74\151\x20\x63\154\x61\x73\163\x3d\x22\172\155\x64\151\x20\172\155\x64\x69\55\x63\x6c\157\x73\x65\55\x63\151\x72\x63\x6c\145\x22\x3e\x3c\x2f\151\x3e\xa\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\40\x20\40\40\40\40\x3c\163\160\x61\x6e\40\143\x6c\141\163\163\x3d\x22\143\x6f\156\x74\x65\156\164\42\76\x44\x61\x74\x61\40\164\x69\144\141\153\40\144\x69\164\145\155\x75\x6b\141\x6e\x2e\x3c\x2f\163\x70\141\x6e\x3e\12\40\40\x20\40\x20\x20\x20\40\40\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\40\40\x20\74\x62\165\x74\x74\x6f\x6e\x20\143\x6c\x61\x73\163\x3d\x22\143\x6c\x6f\163\145\42\40\164\x79\x70\145\75\42\x62\x75\164\x74\157\156\42\40\144\141\x74\x61\55\144\151\x73\155\151\x73\x73\x3d\x22\x61\x6c\x65\162\x74\x22\40\141\x72\x69\x61\55\154\x61\142\x65\x6c\75\42\103\154\x6f\163\145\x22\x3e\12\x20\x20\40\40\x20\40\x20\40\x20\40\40\40\40\x20\40\40\40\x20\x20\40\40\x20\40\x20\40\40\40\x20\74\163\160\x61\x6e\40\141\162\x69\141\55\150\151\144\x64\x65\x6e\75\42\164\162\165\x65\x22\76\xa\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\40\40\x20\74\x69\x20\x63\x6c\141\163\x73\75\42\x7a\x6d\x64\x69\x20\x7a\x6d\144\x69\55\143\x6c\157\163\145\55\x63\x69\162\143\x6c\x65\x22\x3e\x3c\x2f\151\x3e\12\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\74\x2f\163\160\x61\x6e\x3e\12\40\x20\x20\40\x20\40\40\x20\40\40\40\x20\40\x20\40\x20\40\40\x20\40\40\x20\40\40\x3c\57\142\165\x74\x74\157\x6e\76\xa\x20\x20\x20\40\x20\x20\40\40\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\x3c\57\144\x69\166\76\xa\40\40\40\40\x20\40\40\40\x20\40\x20\x20\x3c\x2f\144\x69\166\76\xa\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40"; } else { LoadVerifikasiPendaftar(); } ?>
  
<?php  } elseif ($_GET["\x70\141\x67\x65"] == "\x76\145\x72\x69\146\151\x6b\x61\163\151\x2d\x70\x65\x6d\x62\141\x79\141\162\141\x6e") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Verifikasi Pembayaran</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
     <?php  if (!DataPendaftarDetail($_GET["\151\x64"])) { echo "\xa\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\x3c\x64\151\x76\x20\143\x6c\141\x73\x73\75\42\x63\157\x6e\x74\141\151\156\145\x72\55\x66\x6c\x75\151\144\x20\x6d\164\x2d\x34\42\x3e\12\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\40\40\x3c\144\151\166\x20\143\154\x61\x73\163\x3d\x22\x61\154\x65\x72\164\40\141\x75\x2d\141\154\x65\162\x74\55\144\141\x6e\x67\x65\162\x20\x61\x6c\145\x72\x74\x2d\x64\151\163\155\151\x73\x73\151\142\x6c\x65\x20\x66\141\144\145\40\x73\150\x6f\167\40\141\165\55\x61\x6c\x65\x72\x74\x20\x61\165\x2d\x61\x6c\x65\x72\164\55\x2d\x37\x30\x70\145\x72\42\40\x72\157\x6c\x65\x3d\x22\x61\x6c\145\162\164\42\x3e\12\x20\40\40\x20\x20\40\x20\40\40\x20\40\40\x20\40\x20\x20\40\x20\x20\40\40\40\x20\40\x3c\151\40\143\154\141\x73\163\x3d\x22\x7a\x6d\144\151\x20\x7a\x6d\144\x69\x2d\143\x6c\x6f\163\x65\55\143\x69\162\143\154\x65\42\76\x3c\x2f\x69\x3e\xa\x20\40\x20\40\x20\40\40\40\40\x20\40\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x3c\163\160\x61\x6e\x20\x63\x6c\141\163\163\x3d\x22\143\x6f\x6e\164\x65\156\x74\42\76\x44\141\164\x61\40\x74\x69\144\141\153\x20\x64\151\x74\x65\155\x75\153\x61\x6e\56\74\x2f\163\160\x61\156\76\xa\x20\40\x20\x20\40\40\x20\40\x20\x20\40\40\40\40\40\40\40\40\40\x20\x20\40\40\x20\74\142\x75\164\x74\x6f\156\40\143\x6c\x61\163\163\x3d\42\x63\154\157\163\x65\42\x20\x74\171\160\x65\75\42\x62\x75\x74\x74\157\x6e\42\x20\x64\x61\x74\141\x2d\144\151\163\x6d\151\x73\x73\75\42\x61\154\145\x72\164\42\40\x61\162\x69\x61\55\x6c\141\x62\145\154\75\x22\103\154\x6f\x73\x65\42\76\12\x20\40\40\x20\40\40\x20\40\40\40\40\40\x20\40\x20\40\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\40\74\x73\x70\141\x6e\x20\141\x72\x69\x61\55\150\151\x64\x64\145\x6e\75\x22\x74\162\x75\145\42\x3e\xa\x20\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\40\40\40\74\151\x20\143\x6c\x61\163\163\75\x22\172\x6d\x64\151\40\x7a\155\x64\151\55\x63\x6c\x6f\x73\x65\x2d\143\x69\162\x63\154\x65\x22\x3e\x3c\57\151\x3e\12\40\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\40\x20\40\40\x20\x20\40\x20\40\74\57\163\160\141\x6e\76\12\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\x20\x20\x3c\57\142\x75\x74\x74\x6f\x6e\x3e\xa\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\74\x2f\x64\x69\x76\x3e\12\40\x20\40\40\40\x20\40\40\x20\40\x20\40\x3c\x2f\x64\151\166\x3e\xa\40\x20\x20\40\40\40\40\x20\40\40\x20\x20"; } else { LoadVerifikasiPembayaran(); } ?>
  
<?php  } elseif ($_GET["\x70\x61\147\x65"] == "\x70\x61\156\151\164\x69\141") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Panita</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  PanitiaLoad(); } elseif ($_GET["\x70\x61\x67\x65"] == "\160\x61\x6e\x69\x74\151\141\55\x74\141\155\x62\141\150") { ?>
    <?php  $username_err = $password_err = $confir_password_err = $nama_err = $email_err = $role_err = $foto_panitia_err = $simpan = ''; if (isset($_POST["\x74\141\x6d\x62\x61\x68\137\x70\x61\156\x69\164\151\x61"])) { if (empty(trim($_POST["\165\x73\145\x72\x6e\141\155\x65"]))) { $username_err = "\125\163\x65\162\156\x61\155\x65\x20\x50\141\x6e\151\x74\x69\141\40\x74\x69\x64\141\153\x20\x62\157\x6c\145\150\40\153\x6f\x73\x6f\156\x67"; } elseif (ValidateName($_POST["\x75\163\x65\162\x6e\x61\155\x65"])) { $username_err = "\x55\x73\x65\162\156\141\155\x65\40\150\141\156\171\141\40\x62\157\x6c\x65\x68\x20\x6b\141\x72\141\153\x74\145\x72\40\141\x6c\x70\150\141\x62\145\x74"; } else { if (CekUsername($_POST["\165\163\145\x72\x6e\141\x6d\x65"])) { $username_err = "\115\x61\x61\x66\40\165\163\x65\x72\156\141\155\145\40\164\x65\x72\x73\145\142\165\164\40\163\x75\x64\141\150\40\x64\151\147\165\x6e\141\x6b\x61\x6e"; } else { $username = test_input($_POST["\x75\163\x65\162\156\141\155\145"]); } } if (empty(trim($_POST["\160\141\x73\x73\167\157\162\144"]))) { $password_err = "\120\x61\163\x73\x77\157\x72\144\40\164\151\x64\x61\153\x20\142\157\154\x65\150\x20\x6b\157\x73\x6f\x6e\x67"; } elseif (strlen($_POST["\x70\x61\x73\x73\x77\157\162\144"]) < 6) { $password_err = "\x50\141\x73\x73\167\x6f\x72\144\40\164\x69\x64\141\153\40\x62\x6f\154\x65\150\40\x6b\x75\x72\141\x6e\147\40\144\x61\x72\151\40\x36\x20\x6b\x61\x72\141\x6b\141\x74\145\162"; } else { $password = trim($_POST["\x70\141\x73\163\x77\x6f\x72\x64"]); } if (empty(trim($_POST["\x63\157\156\146\151\x72\137\160\141\x73\x73\167\157\162\x64"]))) { $confir_password_err = "\113\x6f\156\x66\151\162\x6d\141\x73\151\x20\160\x61\x73\x73\167\x69\x72\x64\x20\x74\151\144\x61\153\40\x62\x6f\154\145\150\x20\x6b\157\x73\157\156\x67"; } else { $confir_password = trim($_POST["\143\157\x6e\146\151\x72\137\160\141\163\163\x77\x6f\162\144"]); if (empty($password_err) && $password != $confir_password) { $confir_password_err = "\x4b\x6f\x6e\146\151\x72\155\x61\163\151\40\160\x61\x73\163\167\x6f\x72\144\x20\x74\151\x64\141\x6b\x20\143\157\143\157\153"; } } if (empty(trim($_POST["\x65\155\141\151\154"]))) { $email_err = "\x45\x6d\141\x69\x6c\x20\x74\151\144\141\x6b\40\142\x6f\x6c\x65\150\40\153\157\x73\157\x6e\147"; } elseif (!filter_var($_POST["\x65\155\141\x69\154"], FILTER_VALIDATE_EMAIL)) { $email_err = "\x46\157\162\x6d\141\x74\40\160\x65\156\165\154\x69\163\141\x6e\x20\145\155\141\x69\x6c\40\x73\x61\154\x61\x68"; } else { if (CekEmail($_POST["\145\155\141\x69\154"])) { $email_err = "\115\141\141\x66\x20\145\x6d\141\151\x6c\x20\164\x65\162\163\x65\142\165\x74\x20\x73\x75\x64\x61\x68\40\x64\x69\147\165\x6e\x61\x6b\141\156"; } else { $email = test_input($_POST["\145\155\x61\151\154"]); $email = EscapeString($email); } } if (empty($_POST["\x6e\141\155\141"])) { $nama_err = "\116\x61\155\141\40\154\x65\156\x67\x6b\141\160\x20\x70\141\156\151\164\151\x61\40\x74\151\144\x61\153\x20\x62\x6f\154\x65\x68\40\153\157\163\x6f\x6e\x67"; } else { $nama = test_input($_POST["\x6e\x61\155\x61"]); $nama = EscapeString($nama); } if (empty($_POST["\162\157\x6c\145"])) { $role_err = "\x52\157\154\x65\40\160\141\156\x69\164\x69\141\40\164\x69\144\x61\153\x20\142\157\x6c\145\150\x20\153\x6f\163\157\x6e\x67"; } else { $role = test_input($_POST["\162\157\154\x65"]); $role = EscapeString($role); } $FileName = $_FILES["\146\x6f\164\157\x5f\160\141\156\151\164\151\x61"]["\156\141\155\145"]; $FileDir = $_FILES["\x66\157\164\157\137\160\x61\x6e\x69\x74\x69\141"]["\164\155\x70\x5f\156\141\x6d\x65"]; $FileSize = $_FILES["\x66\x6f\x74\157\137\x70\141\x6e\x69\x74\x69\x61"]["\163\x69\172\145"]; $FileDestination = "\x2e\x2e\57\151\155\x67\57"; $FileExtension = strtolower(pathinfo($FileName, PATHINFO_EXTENSION)); $FileValid = array("\x6a\160\x65\x67", "\x6a\x70\x67", "\160\x6e\x67"); $FileItem = $username . "\x2e" . $FileExtension; if (in_array($FileExtension, $FileValid)) { if ($FileSize > 150000) { $foto_panitia_err = "\x46\157\x74\x6f\x20\160\141\x6e\151\164\x69\141\x20\164\151\144\141\153\x20\142\157\x6c\145\150\40\x6c\145\142\x69\x68\x20\40\144\x61\162\151\40\61\x35\60\40\113\x42"; } else { $foto_panitia = $FileDir; } } else { $foto_panitia_err = "\115\141\x61\x66\x20\146\157\162\155\x61\164\40\146\x6f\x74\x6f\40\150\141\156\171\141\40\x62\157\154\145\x68\40\x6a\x70\x67\x2c\x20\152\160\145\147\x20\141\164\141\x75\x20\x70\x6e\147"; } if (empty($username_err) && empty($password_err) && empty($confir_password_err) && empty($email_err) && empty($nama_err) && empty($role_err) && empty($foto_panitia_err)) { if (PanitiaTambah($username, $password, $email, $nama, $role, $foto_panitia)) { $simpan = "\xa\40\40\40\40\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\12\x20\x20\40\40\x20\40\40\x20\40\40\40\x20\40\40\40\40\40\40\40\40\40\x20\40\40\x20\x20\40\40\74\144\x69\x76\40\143\x6c\x61\163\x73\75\x22\143\x6f\x6e\164\141\151\x6e\145\162\55\x66\x6c\x75\x69\144\40\x6d\164\55\x34\42\x3e\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\12\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\40\40\x20\x20\40\40\x20\40\40\40\40\x20\40\40\40\40\40\x3c\x64\x69\166\40\x63\x6c\141\x73\163\x3d\42\141\x6c\145\162\164\x20\x61\x75\x2d\141\x6c\x65\162\164\x2d\163\165\x63\143\145\x73\163\40\x61\154\x65\162\164\55\144\x69\x73\x6d\x69\x73\163\151\x62\x6c\145\x20\146\x61\144\145\x20\x73\x68\x6f\167\40\x61\x75\55\141\154\x65\162\x74\40\141\x75\55\x61\x6c\145\162\164\55\x2d\67\x30\x70\145\x72\x22\40\162\x6f\154\145\75\x22\x61\x6c\x65\162\x74\42\x3e\12\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\40\x20\40\x20\40\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\40\40\40\74\x69\40\x63\154\x61\163\163\x3d\x22\x7a\x6d\144\151\40\x7a\155\x64\151\55\143\150\x65\x63\x6b\55\x63\151\162\143\x6c\x65\42\76\x3c\57\x69\x3e\xa\40\40\40\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\x20\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\74\x73\160\141\x6e\x20\x63\x6c\141\163\x73\x3d\42\143\157\156\x74\145\x6e\x74\42\76\x50\141\156\151\164\x69\141\40\142\141\162\x75\x20\x62\x65\162\x68\141\163\x69\154\x20\144\151\x74\x61\155\x62\x61\x68\x6b\x61\x6e\74\x2f\x73\160\x61\x6e\x3e\xa\x20\x20\40\x20\x20\40\40\40\40\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\74\x62\x75\x74\x74\157\x6e\x20\143\154\141\x73\x73\x3d\x22\x63\x6c\x6f\x73\x65\x22\x20\x74\171\x70\145\75\42\142\165\x74\164\157\156\x22\x20\144\x61\164\141\x2d\144\x69\163\155\151\x73\x73\75\x22\141\154\x65\162\164\x22\x20\141\162\x69\x61\55\154\141\x62\145\154\x3d\42\x43\154\157\x73\145\x22\x3e\xa\x20\40\x20\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x3c\x73\160\141\x6e\40\x61\x72\151\x61\55\x68\x69\144\144\145\156\75\42\x74\x72\165\145\x22\x3e\xa\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\40\x20\40\40\40\x20\40\40\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\x20\40\40\x20\x3c\x69\x20\x63\x6c\141\x73\x73\75\x22\x7a\x6d\144\x69\x20\172\155\144\151\x2d\143\x6c\x6f\x73\145\55\143\151\162\x63\x6c\145\x22\x3e\74\x2f\x69\x3e\12\x20\40\x20\40\40\x20\40\x20\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\x3c\57\163\x70\x61\156\76\xa\40\40\x20\40\x20\40\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\x20\x20\74\x2f\x62\165\164\164\157\156\76\12\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\40\40\x20\x20\x20\40\x20\40\x20\x20\40\40\40\x20\40\40\40\40\74\57\x64\x69\x76\76\xa\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\40\x3c\x2f\x64\151\166\76"; } else { $simpan = "\x3c\144\151\x76\40\143\154\x61\163\x73\x3d\x22\x63\157\156\x74\141\x69\156\145\162\55\146\154\x75\151\x64\x20\x6d\164\55\x34\42\76\12\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\40\x20\40\74\x64\151\166\x20\143\154\141\x73\163\75\x22\141\154\x65\162\164\40\141\154\x65\x72\164\x2d\144\141\156\x67\x65\x72\x20\141\x6c\x65\x72\x74\55\x64\151\x73\155\151\x73\163\x69\142\154\145\40\x66\141\x64\x65\40\x73\150\x6f\167\42\40\x72\x6f\154\145\x3d\42\141\x6c\145\x72\x74\42\76\12\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x20\40\40\40\40\40\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x3c\151\40\143\x6c\x61\x73\163\75\42\x7a\x6d\x64\151\x20\172\x6d\144\151\x2d\x63\x6c\157\x73\145\x2d\x63\151\x72\143\x6c\x65\42\x3e\74\57\x69\x3e\12\40\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\40\40\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\74\x73\x70\141\156\40\143\x6c\141\x73\x73\75\42\143\x6f\156\x74\x65\156\164\x22\x3e\x44\141\x74\141\x20\x67\x61\x67\x61\154\40\144\x69\x73\151\x6d\x70\x61\x6e\x2e\x3c\x2f\x73\x70\141\156\76\xa\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\x3c\142\165\164\164\157\156\40\x63\x6c\141\163\163\75\42\143\x6c\x6f\x73\145\x22\40\164\171\x70\x65\x3d\42\142\x75\x74\164\x6f\156\x22\40\144\x61\x74\x61\x2d\x64\x69\163\x6d\x69\x73\163\75\x22\x61\x6c\x65\162\x74\42\40\x61\x72\151\141\x2d\x6c\x61\x62\145\154\x3d\42\x43\154\x6f\x73\x65\42\x3e\xa\x20\40\40\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\40\x20\40\40\40\40\40\x3c\163\x70\141\156\x20\x61\x72\x69\141\55\x68\151\144\x64\145\x6e\75\x22\x74\x72\165\145\42\76\12\40\40\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\40\x20\40\40\x20\x20\40\x3c\x69\x20\143\154\x61\x73\x73\75\x22\172\x6d\x64\151\40\x7a\155\x64\x69\55\x63\x6c\157\163\145\x2d\143\x69\x72\143\x6c\x65\x22\x3e\x3c\x2f\x69\x3e\12\40\40\40\x20\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\x3c\57\163\160\x61\156\76\12\x20\40\x20\40\40\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\40\40\40\x20\x20\x20\40\40\40\x3c\x2f\142\x75\x74\164\157\x6e\x3e\12\40\x20\x20\x20\40\40\x20\40\x20\40\40\x20\40\40\x20\40\x20\40\x20\x20\40\40\40\x20\40\40\40\x20\40\x20\40\40\40\x20\x20\40\74\x2f\x64\x69\166\x3e\12\40\x20\40\40\x20\40\x20\40\40\40\40\x20\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\x20\40\x20\40\x3c\57\x64\x69\x76\x3e\12\x20\x20\x20\40\x20\x20\40\40\40\x20\40\40\40\40\x20\40\x20\40\40\40"; } } } ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Tambah Panita</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  echo $simpan; ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-body">                                      
                                           <div class="card-title">
                                                <h3 class="text-center title-2">Panitia</h3>
                                            </div>
                                            <form action="<?php  echo htmlspecialchars(basename($_SERVER["\x52\105\121\x55\105\123\124\137\x55\x52\x49"])); ?>
" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="username" class="control-label mb-1">Username</label>  
                                                    <input class="form-control" type="text" id="username" name="username" required="" placeholder="Masukan username untuk panitia">
                                                    <span class="text-danger"><?php  echo $username_err; ?>
</span>               
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="password" class="control-label mb-1">Password</label>  
                                                            <input class="form-control" type="password" id="password" name="password" required="" placeholder="Masukan password">
                                                            <span class="text-danger"><?php  echo $password_err; ?>
</span>               
                                                        </div> 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="confir_password" class="control-label mb-1">Konfirmasi Password</label>  
                                                            <input class="form-control" type="password" id="confir_password" name="confir_password" required="" placeholder="Konfirmasi password">
                                                            <span class="text-danger"><?php  echo $confir_password_err; ?>
</span>               
                                                        </div> 
                                                    </div>
                                                </div>                                
                                                 <div class="form-group">
                                                    <label for="email" class="control-label mb-1">E-mail</label>  
                                                    <input class="form-control" type="text" id="email" name="email" required="" placeholder="Masukan email">
                                                    <span class="text-danger"><?php  echo $email_err; ?>
</span>               
                                                </div> 
                                                 <div class="form-group">
                                                    <label for="nama" class="control-label mb-1">Nama Lengkap</label>  
                                                    <input class="form-control" type="text" id="nama" name="nama" required="" placeholder="Masukan nama lengkap panitia">
                                                    <span class="text-danger"><?php  echo $nama_err; ?>
</span>               
                                                </div>                                                    
                                                <div class="form-group">
                                                    <label for="role" class="control-label mb-1"> role</label>
                                                        <select class="form-control" id="role" name="role">
                                                           <?php  $SelectRole = SelectRole(); while ($role = $SelectRole->fetch_array()) { echo "\12\40\40\40\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\40\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\40\40\40\40\40\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\74\x6f\x70\x74\x69\157\156\x20\x76\141\154\x75\x65\75" . $role["\x6e\141\155\145\137\162\x6f\x6c\x65"] . "\76" . $role["\x6e\141\x6d\145\x5f\x72\x6f\154\145"] . "\74\x2f\x6f\160\164\151\157\x6e\x3e\xa\x20\x20\x20\40\40\40\x20\40\40\40\40\x20\40\x20\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20"; } $SelectRole->free_result(); ?>
                                                                                         
                                                        </select>
                                                        <span class="text-danger"><?php  echo $role_err; ?>
</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_panitia" class="control-label mb-1">Foto</label>  
                                                    <input class="form-control" type="file" id="foto_panitia" name="foto_panitia" required="">
                                                    <span class="text-danger"><?php  echo $foto_panitia_err; ?>
</span>               
                                                </div>                              
                                                <div class="form-group">
                                                    <button id="tambah_panitia" name="tambah_panitia" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-user-circle"></i>&nbsp;
                                                    <span id="tambah_panitia">Simpan</span>
                                                    <span id="tambah_panitia" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>
                                            </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  } elseif ($_GET["\x70\x61\147\x65"] == "\160\141\x6e\x69\x74\151\x61\x2d\144\145\164\x61\151\154") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Panita</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  if (!PanitiaDetail($_GET["\151\x64"])) { echo "\12\x20\40\x20\x20\40\40\x20\x20\40\40\x20\40\40\40\x20\40\x3c\144\151\x76\x20\x63\x6c\x61\x73\163\75\x22\x63\157\x6e\164\141\151\x6e\145\162\x2d\x66\x6c\165\151\x64\40\x6d\164\x2d\x34\x22\76\12\40\x20\x20\x20\40\40\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\x3c\x64\151\166\x20\x63\154\141\x73\163\x3d\x22\x61\x6c\x65\162\164\40\x61\165\55\x61\154\x65\x72\x74\55\163\165\x63\x63\145\x73\x73\40\141\x6c\145\162\x74\x2d\x64\151\x73\x6d\151\x73\x73\151\142\x6c\x65\40\146\x61\144\145\40\163\x68\157\x77\40\141\165\55\141\154\x65\162\164\x20\x61\x75\55\x61\x6c\145\162\164\55\55\x37\60\160\145\162\x22\40\162\157\154\145\75\x22\141\154\145\162\164\42\x3e\12\x20\x20\40\x20\x20\40\x20\40\40\40\x20\40\40\x20\x20\x20\40\40\40\40\x20\40\40\40\74\151\40\x63\154\141\x73\163\75\x22\172\x6d\x64\151\x20\172\155\x64\x69\x2d\x63\x6c\157\163\145\55\143\x69\x72\143\x6c\x65\42\x3e\x3c\x2f\x69\x3e\12\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\x3c\x73\x70\x61\x6e\x20\x63\x6c\x61\163\x73\75\x22\x63\157\x6e\x74\x65\156\164\x22\x3e\104\141\164\141\40\164\151\x64\x61\153\40\x64\x69\x74\x65\155\x75\153\141\156\x2e\74\x2f\x73\x70\141\156\x3e\12\40\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\74\142\165\164\164\157\x6e\x20\x63\154\x61\x73\163\x3d\x22\143\x6c\x6f\163\x65\x22\40\x74\171\160\145\75\42\142\165\x74\164\157\156\x22\x20\144\x61\x74\x61\55\144\151\x73\155\151\x73\x73\x3d\42\141\154\145\162\x74\x22\40\x61\162\151\141\55\x6c\141\x62\145\154\75\42\103\154\x6f\163\x65\42\x3e\12\x20\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\40\40\40\x20\40\x20\x20\40\40\40\40\x20\40\74\x73\x70\x61\156\40\x61\162\151\x61\x2d\150\151\144\144\145\x6e\75\x22\164\x72\x75\145\x22\76\12\40\40\40\x20\40\40\x20\40\x20\40\40\40\40\x20\40\40\x20\40\40\40\40\40\x20\x20\x20\40\40\40\40\40\x20\x20\74\151\x20\x63\154\x61\x73\163\75\x22\172\x6d\x64\151\x20\x7a\x6d\x64\151\x2d\x63\x6c\157\x73\x65\x2d\x63\151\162\143\154\x65\42\x3e\74\x2f\151\x3e\12\40\x20\40\40\40\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\40\40\x20\x20\40\40\40\x20\40\40\74\x2f\163\x70\x61\156\76\12\40\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\74\57\142\165\164\x74\x6f\156\x3e\xa\x20\40\40\x20\40\x20\40\40\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\40\74\57\144\151\166\76\xa\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\40\x20\74\x2f\x64\151\166\x3e\12\xa\40\x20\40\x20\x20\x20\40\x20\x20\40\40\40\x20\x20\40\40"; } else { PanitiaDetail_load(); } } elseif ($_GET["\x70\x61\147\145"] == "\160\x61\x6e\x69\x74\151\x61\55\x65\x64\151\164") { ?>

    <?php  if (!PanitiaDetail($_GET["\x69\x64"])) { echo "\12\40\x20\x20\40\40\40\40\40\40\x20\40\x20\x20\40\40\40\74\144\151\166\40\x63\154\x61\163\163\75\x22\143\x6f\156\x74\x61\x69\156\145\162\55\146\154\x75\151\144\40\x6d\x74\55\x34\x22\x3e\12\40\x20\40\x20\40\40\40\x20\40\x20\40\40\40\40\x20\40\40\x20\x20\40\x3c\144\x69\x76\40\x63\x6c\x61\x73\x73\75\42\x61\x6c\x65\x72\164\40\141\165\x2d\x61\154\145\x72\164\x2d\163\x75\143\x63\x65\x73\x73\x20\x61\x6c\145\x72\x74\55\x64\151\x73\155\x69\x73\163\x69\142\x6c\145\x20\146\x61\x64\145\x20\163\x68\x6f\167\40\x61\x75\55\141\x6c\x65\162\x74\40\141\165\x2d\x61\154\x65\x72\x74\55\55\67\x30\x70\145\x72\x22\40\x72\157\154\x65\75\x22\141\154\x65\162\164\42\76\12\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\74\x69\x20\143\x6c\x61\163\x73\75\x22\x7a\x6d\144\x69\x20\172\x6d\144\x69\x2d\143\154\x6f\x73\145\x2d\143\x69\x72\143\x6c\x65\42\76\74\57\151\76\xa\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\74\x73\x70\141\x6e\40\x63\154\141\163\163\75\42\x63\157\156\164\x65\156\164\42\76\x44\141\x74\x61\40\164\x69\x64\141\153\40\x64\x69\x74\x65\155\x75\x6b\x61\x6e\x2e\x3c\x2f\x73\160\x61\156\76\xa\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\x20\x20\40\x20\74\142\x75\164\164\157\156\x20\x63\x6c\x61\x73\163\75\x22\143\x6c\x6f\163\x65\x22\40\x74\171\160\145\75\42\142\165\164\x74\x6f\x6e\42\40\144\141\164\141\x2d\x64\x69\163\155\x69\163\x73\x3d\42\x61\154\145\x72\164\x22\40\141\162\x69\141\55\154\x61\x62\x65\x6c\75\42\103\154\157\x73\x65\42\76\12\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\x20\40\40\40\40\74\x73\x70\x61\156\x20\x61\x72\151\x61\55\150\151\144\x64\x65\156\75\x22\164\162\x75\x65\42\x3e\12\x20\x20\40\40\40\40\x20\40\x20\40\x20\40\x20\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\74\x69\40\x63\x6c\x61\x73\163\x3d\x22\x7a\155\x64\x69\x20\x7a\155\144\151\55\143\x6c\157\163\x65\55\x63\151\x72\x63\x6c\x65\42\x3e\74\x2f\151\x3e\xa\40\40\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\74\x2f\163\x70\141\x6e\x3e\12\40\x20\40\40\40\40\40\40\40\40\40\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\x3c\57\x62\165\164\x74\x6f\156\76\12\40\x20\40\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\x20\40\x20\40\40\74\x2f\144\151\x76\76\xa\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\74\57\x64\x69\x76\x3e\xa\xa\x20\40\40\x20\x20\40\40\40\40\40\40\40\40\40\x20\40"; } $username_err = $password_err = $confir_password_err = $nama_err = $email_err = $role_err = $foto_panitia_err = $simpan = ''; if (isset($_POST["\x75\x70\144\x61\x74\x65\137\x70\141\x6e\x69\164\151\141"])) { if (empty(trim($_POST["\x75\x73\145\162\156\x61\155\145"]))) { $username_err = "\x55\x73\x65\x72\156\x61\155\145\40\x50\x61\x6e\x69\x74\151\141\x20\x74\x69\144\141\153\40\x62\x6f\154\x65\x68\x20\x6b\157\x73\x6f\x6e\147"; } elseif (ValidateName($_POST["\165\163\x65\x72\156\141\x6d\x65"])) { $username_err = "\125\163\145\x72\x6e\141\x6d\145\x20\150\141\156\171\141\40\142\x6f\x6c\145\150\x20\153\141\162\x61\153\164\x65\x72\x20\141\154\160\x68\141\x62\x65\164"; } else { if (trim($_POST["\165\x73\x65\x72\x6e\141\x6d\x65"]) != $username) { if (CekUsername($_POST["\x75\163\x65\x72\x6e\141\x6d\145"])) { $username_err = "\115\x61\141\146\x20\x75\163\145\162\156\141\155\x65\40\164\145\162\163\x65\x62\165\164\x20\163\165\x64\141\150\x20\144\x69\147\x75\156\141\x6b\141\156"; } else { $username = test_input($_POST["\x75\x73\x65\162\156\x61\x6d\145"]); } } else { $username = test_input($_POST["\165\163\145\x72\x6e\x61\155\145"]); $username = EscapeString($username); } } if (empty(trim($_POST["\x70\x61\x73\163\x77\x6f\x72\144"]))) { $password_err = "\120\x61\163\163\167\x6f\x72\x64\x20\164\x69\144\141\x6b\40\142\x6f\x6c\x65\150\x20\153\157\163\x6f\156\147"; } elseif (strlen($_POST["\x70\x61\x73\x73\x77\x6f\x72\144"]) < 6) { $password_err = "\120\141\x73\x73\167\x6f\x72\144\x20\x74\151\144\x61\153\40\142\157\154\145\x68\x20\153\x75\x72\141\156\x67\40\x64\141\x72\x69\x20\x36\x20\x6b\141\162\x61\x6b\141\x74\x65\x72"; } else { $password = trim($_POST["\160\141\x73\x73\167\x6f\162\144"]); } if (empty(trim($_POST["\143\157\156\146\x69\x72\137\160\x61\163\x73\167\157\162\x64"]))) { $confir_password_err = "\x4b\157\x6e\146\151\x72\x6d\x61\x73\151\40\160\141\x73\x73\x77\x69\162\x64\x20\x74\151\x64\141\153\40\142\157\154\x65\x68\x20\x6b\x6f\163\157\156\x67"; } else { $confir_password = trim($_POST["\x63\x6f\x6e\x66\x69\162\x5f\x70\x61\163\x73\x77\x6f\162\x64"]); if (empty($password_err) && $password != $confir_password) { $confir_password_err = "\113\x6f\x6e\146\x69\x72\155\x61\163\151\40\x70\x61\163\x73\x77\157\162\x64\x20\x74\x69\144\141\153\40\143\x6f\x63\x6f\x6b"; } } if (empty(trim($_POST["\145\155\x61\x69\x6c"]))) { $email_err = "\x45\155\x61\151\x6c\x20\164\151\144\x61\x6b\40\x62\x6f\x6c\x65\150\x20\153\x6f\163\x6f\156\147"; } elseif (!filter_var($_POST["\x65\x6d\x61\x69\x6c"], FILTER_VALIDATE_EMAIL)) { $email_err = "\106\x6f\x72\155\141\164\40\160\x65\x6e\165\154\151\163\x61\x6e\40\145\x6d\141\x69\154\x20\163\x61\x6c\141\x68"; } else { if (trim($_POST["\145\155\x61\151\x6c"]) != $email) { if (CekEmail($_POST["\x65\155\x61\151\154"])) { $email_err = "\x4d\141\x61\x66\40\145\x6d\141\x69\x6c\x20\164\x65\x72\163\145\x62\165\x74\x20\163\165\144\141\150\40\x64\x69\x67\x75\156\141\x6b\x61\x6e"; } else { $email = test_input($_POST["\145\155\x61\x69\154"]); $email = EscapeString($email); } } else { $email = test_input($_POST["\145\x6d\141\x69\x6c"]); $email = EscapeString($email); } } if (empty($_POST["\x6e\141\155\x61"])) { $nama_err = "\x4e\141\x6d\141\x20\x6c\x65\156\x67\153\141\x70\x20\x70\141\x6e\x69\164\151\141\40\164\151\x64\x61\x6b\x20\x62\157\x6c\x65\x68\40\153\157\x73\157\156\147"; } else { $nama = test_input($_POST["\156\x61\155\x61"]); $nama = EscapeString($nama); } if (empty($_POST["\x72\x6f\x6c\x65"])) { $role_err = "\x52\157\154\145\40\160\141\x6e\151\164\151\x61\40\x74\151\144\x61\153\40\142\157\x6c\145\x68\x20\x6b\x6f\x73\157\156\147"; } else { $role = test_input($_POST["\x72\157\154\145"]); $role = EscapeString($role); } if (empty($_FILES["\146\x6f\164\x6f\137\x70\x61\x6e\x69\x74\x69\x61"]["\x74\x6d\x70\137\x6e\141\x6d\145"])) { $FileItem = $foto_panitia; } else { $FileName = $_FILES["\146\157\x74\157\137\160\141\156\x69\164\151\x61"]["\x6e\141\155\x65"]; $FileDir = $_FILES["\146\157\x74\x6f\137\160\x61\156\151\x74\151\141"]["\164\x6d\160\137\x6e\x61\x6d\x65"]; $FileSize = $_FILES["\146\x6f\164\157\x5f\x70\x61\156\x69\164\x69\x61"]["\163\x69\x7a\x65"]; $FileDestination = "\x2e\x2e\57\x69\x6d\x67\57"; $FileExtension = strtolower(pathinfo($FileName, PATHINFO_EXTENSION)); $FileValid = array("\152\160\145\147", "\x6a\x70\147", "\160\156\147"); $FileItem = $username . "\56" . $FileExtension; if (in_array($FileExtension, $FileValid)) { if ($FileSize > 150000) { $foto_panitia_err = "\x46\x6f\164\157\x20\160\x61\x6e\151\x74\151\141\40\164\151\x64\141\153\x20\x62\x6f\154\x65\x68\x20\x6c\x65\x62\x69\150\40\40\144\x61\x72\151\40\x31\x35\x30\40\113\102"; } else { $foto_panitia = $FileDir; } } else { $foto_panitia_err = "\115\x61\141\x66\x20\146\x6f\162\155\x61\x74\40\x66\157\x74\157\40\x68\141\156\x79\141\40\x62\157\154\x65\150\x20\x6a\160\147\54\40\x6a\160\145\x67\x20\141\164\141\x75\40\160\156\x67"; } } if (empty($username_err) && empty($password_err) && empty($confir_password_err) && empty($email_err) && empty($nama_err) && empty($role_err) && empty($foto_panitia_err)) { if (PanitiaUpdate($username, $password, $email, $nama, $role, $foto_panitia, $uid)) { $simpan = "\12\40\40\x20\40\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\40\x20\12\x20\40\x20\40\40\x20\40\40\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\40\74\x64\x69\x76\x20\x63\154\141\x73\163\x3d\42\143\157\x6e\x74\141\151\156\x65\162\x2d\146\x6c\x75\151\x64\x20\x6d\164\55\x34\42\x3e\x20\x20\40\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\40\x20\40\x20\x20\12\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x3c\144\x69\x76\40\x63\x6c\x61\163\x73\x3d\42\x61\x6c\145\x72\x74\x20\141\x75\x2d\x61\154\x65\x72\164\55\x73\x75\143\143\145\x73\163\x20\141\x6c\x65\162\164\55\144\x69\x73\x6d\x69\x73\x73\x69\142\x6c\145\40\146\141\x64\x65\40\163\150\157\x77\x20\x61\x75\55\x61\x6c\145\162\164\40\141\x75\x2d\141\x6c\145\x72\164\55\55\x37\x30\160\x65\x72\x22\40\162\157\154\x65\75\x22\141\154\145\x72\164\42\76\12\40\40\40\40\40\x20\40\x20\x20\40\x20\x20\x20\40\40\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\74\x69\40\x63\154\x61\x73\x73\75\x22\x7a\155\144\x69\40\x7a\x6d\144\151\55\143\x68\145\143\153\55\x63\151\162\x63\x6c\145\42\x3e\x3c\x2f\151\x3e\xa\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\74\163\160\x61\x6e\40\x63\154\x61\163\163\x3d\x22\x63\157\156\x74\145\x6e\164\42\76\104\141\164\x61\40\142\145\x72\150\x61\163\x69\154\40\144\151\x70\x65\162\142\x61\x68\141\162\x75\151\74\x2f\163\160\x61\x6e\x3e\12\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\40\40\40\x20\40\40\40\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\40\x20\74\142\x75\164\x74\157\156\40\143\154\141\x73\x73\75\x22\143\154\157\x73\145\42\40\164\x79\x70\145\75\x22\x62\x75\164\x74\x6f\x6e\42\x20\x64\x61\x74\x61\55\x64\151\x73\x6d\151\x73\x73\75\42\x61\154\145\x72\x74\x22\x20\x61\x72\151\141\x2d\x6c\141\x62\x65\154\x3d\x22\103\154\x6f\163\x65\x22\76\xa\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\74\x73\160\x61\x6e\40\141\162\151\141\x2d\150\151\x64\x64\145\x6e\x3d\42\164\162\x75\145\42\x3e\12\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\x20\40\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\x3c\x69\40\143\154\141\x73\163\75\x22\x7a\155\x64\x69\40\172\155\x64\x69\55\x63\154\x6f\x73\x65\55\x63\151\162\143\x6c\x65\42\x3e\x3c\57\x69\76\xa\40\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\x20\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x3c\x2f\x73\x70\x61\x6e\76\12\x20\40\x20\40\40\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\40\74\57\x62\165\x74\164\x6f\x6e\76\xa\x20\x20\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\40\x20\40\x20\40\x20\x3c\x2f\x64\151\x76\x3e\12\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\40\40\40\40\40\x20\40\40\x20\74\x2f\144\151\x76\76"; echo "\12\40\40\40\40\x20\40\40\40\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\40\74\155\145\x74\141\40\150\164\x74\x70\55\x65\161\x75\151\x76\75\x22\x72\x65\x66\162\x65\163\150\x22\x63\157\156\x74\145\x6e\164\75\x22\x35\73\x55\122\114\x3d\x3f\x70\x61\x67\145\75\x70\141\156\151\x74\x69\141\x22\40\x2f\76\12\x20\x20\x20\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20"; } else { $simpan = "\74\144\151\x76\x20\143\x6c\x61\x73\x73\x3d\x22\143\157\x6e\x74\x61\151\x6e\x65\x72\55\x66\x6c\165\151\144\x20\155\164\x2d\64\42\76\xa\40\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\40\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\74\144\151\166\x20\x63\x6c\141\x73\x73\75\x22\141\154\x65\162\x74\40\141\154\x65\162\164\55\x64\x61\x6e\147\x65\162\x20\x61\x6c\145\x72\164\x2d\144\151\163\155\151\x73\163\151\x62\154\x65\x20\x66\x61\x64\x65\40\163\x68\x6f\167\x22\40\x72\x6f\154\x65\75\x22\x61\154\x65\x72\x74\x22\x3e\xa\40\40\40\40\x20\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\74\x69\40\x63\x6c\141\x73\x73\75\42\172\x6d\x64\x69\40\x7a\x6d\x64\x69\x2d\x63\154\x6f\x73\145\55\143\x69\162\x63\154\145\42\x3e\x3c\x2f\x69\x3e\xa\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\40\x20\40\40\x20\40\x3c\163\x70\x61\156\x20\143\x6c\141\163\163\75\x22\x63\157\156\164\x65\156\x74\x22\76\104\x61\164\x61\x20\x67\x61\x67\141\154\40\x64\x69\x73\x69\x6d\x70\x61\156\56\74\57\163\x70\141\156\x3e\12\x20\x20\40\40\x20\40\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\40\74\x62\x75\x74\x74\x6f\156\40\x63\x6c\141\163\163\75\x22\143\154\157\x73\x65\42\x20\x74\x79\160\x65\75\x22\x62\165\164\164\157\156\x22\x20\x64\x61\x74\141\55\144\x69\x73\155\151\163\163\75\x22\x61\x6c\x65\x72\164\42\x20\141\162\151\141\x2d\x6c\141\142\x65\154\75\42\x43\154\157\163\x65\x22\76\12\x20\40\x20\x20\40\40\40\40\x20\40\x20\40\40\x20\40\40\x20\x20\40\40\x20\40\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\x20\x3c\x73\160\x61\x6e\40\141\162\151\141\x2d\150\x69\144\x64\145\x6e\75\x22\164\x72\x75\x65\42\76\xa\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\40\40\40\x20\40\x20\40\40\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\40\x20\x20\40\40\x20\x3c\x69\40\143\x6c\x61\163\x73\x3d\42\172\x6d\144\151\40\172\155\144\151\x2d\143\x6c\157\x73\x65\x2d\143\x69\162\x63\x6c\145\42\x3e\74\x2f\151\x3e\xa\x20\x20\40\x20\40\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\40\x20\40\x3c\x2f\163\x70\141\156\x3e\xa\x20\40\40\x20\40\x20\40\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\40\40\x20\40\x20\40\40\x20\40\74\57\142\165\x74\x74\157\156\x3e\xa\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\40\x20\40\40\40\40\x20\40\x20\40\40\x3c\57\x64\x69\166\x3e\12\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\40\40\x3c\57\x64\x69\x76\76\xa\40\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40"; } } } ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Update Panita</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  echo $simpan; ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-body">    
                                    <div class="float-right mt-3 mb-4">
                                     <img src="../img/<?php  echo $foto_panitia; ?>
" width="60" height="80" class="img-fluid" alt="foto">
                                    </div>                                                               
                                           <div class="card-title">
                                                <h3 class="text-center title-2">Update Panitia</h3>
                                            </div>

                                            <form action="<?php  echo htmlspecialchars(basename($_SERVER["\x52\105\x51\125\x45\x53\x54\x5f\x55\x52\111"])); ?>
" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="username" class="control-label mb-1">Username</label>  
                                                    <input class="form-control" type="text" id="username" name="username" value="<?php  echo $username; ?>
" required="" placeholder="Masukan username untuk panitia">
                                                    <span class="text-danger"><?php  echo $username_err; ?>
</span>               
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="password" class="control-label mb-1">Password</label>  
                                                            <input class="form-control" type="password" id="password" name="password" required="" placeholder="Masukan password">
                                                            <span class="text-danger"><?php  echo $password_err; ?>
</span>               
                                                        </div> 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="confir_password" class="control-label mb-1">Konfirmasi Password</label>  
                                                            <input class="form-control" type="password" id="confir_password" name="confir_password" required="" placeholder="Konfirmasi password">
                                                            <span class="text-danger"><?php  echo $confir_password_err; ?>
</span>               
                                                        </div> 
                                                    </div>
                                                </div>                                
                                                 <div class="form-group">
                                                    <label for="email" class="control-label mb-1">E-mail</label>  
                                                    <input class="form-control" type="text" id="email" name="email" value="<?php  echo $email; ?>
" required="" placeholder="Masukan email">
                                                    <span class="text-danger"><?php  echo $email_err; ?>
</span>               
                                                </div> 
                                                 <div class="form-group">
                                                    <label for="nama" class="control-label mb-1">Nama Lengkap</label>  
                                                    <input class="form-control" type="text" id="nama" name="nama" value="<?php  echo $nama; ?>
" required="" placeholder="Masukan nama lengkap panitia">
                                                    <span class="text-danger"><?php  echo $nama_err; ?>
</span>               
                                                </div>                                                    
                                                <div class="form-group">
                                                    <label for="role" class="control-label mb-1"> role</label>
                                                        <select class="form-control" id="role" name="role">
                                                            <option value="<?php  echo $role; ?>
"><?php  echo $role; ?>
</option>
                                                           <?php  $SelectRole = SelectRole(); while ($role = $SelectRole->fetch_array()) { echo "\xa\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\40\x20\40\40\40\x20\40\x20\40\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\40\40\40\40\40\x3c\x6f\160\x74\151\157\x6e\40\x76\x61\x6c\165\x65\75" . $role["\x6e\x61\x6d\145\x5f\x72\157\154\145"] . "\x3e" . $role["\156\141\155\145\x5f\x72\x6f\154\145"] . "\74\x2f\157\160\x74\x69\157\x6e\76\xa\40\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\40"; } $SelectRole->free_result(); ?>
                                                                                         
                                                        </select>
                                                        <span class="text-danger"><?php  echo $role_err; ?>
</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_panitia" class="control-label mb-1">Foto</label>                  
           
                                                    <input class="form-control" type="file" id="foto_panitia" name="foto_panitia">
                                                    <span class="text-danger"><?php  echo $foto_panitia_err; ?>
</span>
                                                                   
                                                </div>                              
                                                <div class="form-group">
                                                    <button id="update_panitia" name="update_panitia" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-user-circle"></i>&nbsp;
                                                    <span id="update_panitia">Simpan</span>
                                                    <span id="update_panitia" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>
                                            </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  } elseif ($_GET["\x70\x61\147\145"] == "\160\x61\x6e\x69\164\151\141\x2d\144\145\x6c\x65\164\x65") { ?>
    <?php  if (!PanitiaDetail($_GET["\151\x64"])) { echo "\xa\x20\40\40\x20\40\40\x20\40\40\40\x20\x20\x20\x20\40\40\74\x64\x69\166\40\143\x6c\x61\163\x73\x3d\x22\143\x6f\156\164\x61\151\156\145\x72\55\146\154\x75\x69\x64\x20\x6d\x74\x2d\x34\x22\76\12\40\x20\x20\40\40\40\40\40\40\40\x20\x20\40\40\x20\x20\40\40\x20\x20\x3c\x64\151\x76\x20\x63\154\141\x73\x73\75\x22\141\154\145\162\164\40\x61\165\x2d\141\154\145\x72\164\x2d\x73\x75\x63\x63\x65\163\163\40\141\x6c\145\162\x74\55\144\151\x73\155\x69\163\x73\x69\x62\x6c\145\40\146\141\144\x65\x20\x73\x68\157\x77\x20\x61\x75\55\141\x6c\145\x72\x74\x20\141\x75\x2d\141\x6c\145\x72\x74\x2d\55\x37\60\x70\145\162\42\x20\162\x6f\x6c\145\x3d\42\141\x6c\x65\x72\x74\42\76\xa\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\x3c\x69\40\x63\x6c\x61\163\x73\75\42\172\x6d\x64\151\40\172\x6d\x64\151\55\x63\154\157\x73\x65\x2d\x63\151\x72\x63\154\145\42\76\74\x2f\151\x3e\xa\40\40\40\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\x20\x3c\163\x70\x61\x6e\40\x63\154\x61\163\163\75\42\x63\x6f\156\164\x65\x6e\x74\x22\x3e\104\141\x74\141\x20\164\x69\144\141\x6b\x20\x64\x69\x74\145\155\x75\x6b\x61\x6e\56\74\57\x73\x70\x61\x6e\76\12\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\74\142\x75\164\164\157\156\40\x63\154\x61\163\163\75\42\x63\154\157\163\145\42\40\x74\171\x70\x65\x3d\x22\x62\x75\164\164\x6f\156\x22\x20\144\x61\164\141\x2d\x64\x69\x73\155\151\163\x73\x3d\x22\141\154\x65\162\164\42\40\141\162\151\141\55\154\141\x62\x65\x6c\x3d\42\x43\154\157\163\x65\42\x3e\xa\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\40\x3c\x73\x70\x61\156\40\x61\162\151\x61\x2d\150\151\x64\x64\145\156\x3d\x22\x74\x72\165\145\42\76\xa\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\x3c\x69\x20\x63\154\x61\163\163\x3d\42\172\x6d\144\151\x20\172\155\x64\x69\x2d\x63\154\x6f\163\145\x2d\x63\151\162\x63\x6c\145\42\x3e\74\57\x69\76\12\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\40\x20\40\x20\40\74\57\163\160\141\x6e\76\xa\x20\40\40\40\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x3c\57\x62\x75\x74\x74\x6f\156\76\12\x20\x20\40\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\40\74\x2f\x64\x69\x76\76\xa\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\x20\x20\40\40\x3c\57\144\x69\x76\x3e\12\xa\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\40"; } else { PanitiaDelete_load(); } } elseif ($_GET["\160\141\x67\x65"] == "\152\x61\154\165\162\55\144\141\x66\x74\141\x72") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Jalur Pendaftaran</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  LoadJalur_Daftar(); } elseif ($_GET["\x70\141\147\145"] == "\152\141\154\165\162\x2d\x64\145\x6c\145\164\145") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Delete jalur daftar</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  if (DeleteJalur(trim($_GET["\x69\144"]))) { $simpan = "\xa\40\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\12\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\74\x64\151\x76\x20\143\154\141\163\x73\75\42\143\157\156\x74\141\151\156\145\162\x2d\146\154\165\x69\144\x20\x6d\164\55\x34\x22\x3e\40\40\40\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\40\x20\40\40\x20\x20\x20\x20\40\40\x20\xa\x20\x20\40\40\40\40\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\40\x20\40\40\x20\40\x20\x20\40\x20\x3c\x64\151\x76\x20\143\x6c\141\163\163\75\x22\x61\x6c\145\x72\x74\x20\x61\165\x2d\141\x6c\145\162\164\x2d\x73\165\x63\143\145\163\x73\40\141\154\x65\x72\x74\x2d\144\151\x73\x6d\151\x73\x73\x69\x62\x6c\145\x20\x66\x61\144\x65\40\163\150\x6f\167\40\141\x75\55\141\154\145\x72\164\x20\x61\165\x2d\x61\x6c\x65\x72\164\55\55\67\x30\160\x65\x72\42\x20\x72\x6f\x6c\x65\75\42\x61\154\x65\162\x74\x22\x3e\12\40\x20\40\x20\40\x20\40\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\40\74\151\x20\143\154\x61\163\x73\75\42\x7a\155\144\151\x20\172\x6d\x64\x69\x2d\143\150\145\143\153\55\143\x69\162\x63\x6c\145\x22\x3e\x3c\x2f\x69\x3e\xa\40\40\x20\40\40\x20\x20\x20\40\x20\x20\40\40\40\40\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\x20\40\74\163\160\x61\x6e\x20\143\154\x61\163\x73\x3d\x22\143\157\x6e\164\145\156\x74\x22\x3e\104\141\164\141\x20\142\x65\x72\x68\x61\x73\151\154\x20\144\x69\x68\x61\160\x75\163\x3c\57\x73\160\x61\x6e\x3e\xa\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\x3c\142\165\x74\164\x6f\x6e\x20\143\x6c\x61\163\163\75\42\143\154\x6f\x73\145\42\40\164\171\160\x65\75\x22\142\165\x74\164\x6f\156\x22\x20\x64\x61\164\x61\x2d\144\x69\x73\x6d\151\163\x73\75\42\141\x6c\145\x72\x74\x22\40\x61\162\x69\x61\55\154\x61\x62\x65\x6c\x3d\42\103\x6c\157\x73\x65\x22\76\12\x20\40\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x3c\x73\x70\x61\x6e\40\x61\162\x69\x61\55\150\151\144\x64\x65\x6e\75\x22\164\x72\165\x65\x22\x3e\12\x20\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\40\74\x69\x20\x63\x6c\x61\x73\163\75\x22\172\x6d\144\x69\40\172\x6d\144\151\55\143\154\x6f\163\x65\55\x63\151\162\143\154\145\42\76\74\x2f\151\x3e\xa\x20\40\40\x20\40\x20\x20\40\40\40\40\40\40\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\40\74\x2f\163\160\141\156\76\xa\40\40\x20\40\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\74\57\142\x75\x74\x74\157\156\76\12\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\40\x20\x20\x20\40\40\40\x20\40\40\40\40\x20\40\40\74\57\x64\x69\166\x3e\12\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x3c\x2f\144\151\x76\76"; echo "\40\74\x6d\x65\x74\141\40\150\164\164\x70\55\x65\x71\x75\x69\166\x3d\x22\162\145\x66\162\145\163\150\x22\x63\157\x6e\x74\x65\156\164\x3d\x22\x31\73\x55\x52\x4c\x3d\x3f\160\x61\147\145\x3d\152\141\154\165\x72\x2d\x64\141\x66\164\141\x72\x22\x20\x2f\76\xa\x20\40\40\40\40\x20\x20\x20\40\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20"; } else { $simpan = "\74\144\151\166\40\x63\154\141\x73\x73\75\42\143\157\x6e\164\141\x69\156\145\x72\x2d\146\x6c\x75\x69\144\40\155\x74\55\x34\42\x3e\xa\40\x20\40\x20\x20\40\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\40\40\x20\x20\x20\x3c\x64\x69\x76\x20\143\x6c\x61\163\x73\75\x22\141\x6c\x65\162\164\40\141\154\145\x72\164\x2d\x64\x61\156\x67\x65\162\40\141\x6c\145\x72\164\55\144\151\163\x6d\151\x73\163\x69\x62\x6c\145\x20\146\141\144\x65\40\163\150\157\167\x22\40\162\x6f\154\x65\75\42\x61\x6c\145\x72\164\42\x3e\12\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\40\74\151\40\x63\x6c\141\163\163\75\x22\x7a\155\144\151\40\172\x6d\x64\151\55\x63\x6c\157\x73\x65\x2d\x63\151\162\143\x6c\x65\x22\x3e\x3c\x2f\x69\76\12\40\x20\40\x20\x20\40\40\40\40\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\40\40\x20\x20\x3c\x73\160\141\x6e\x20\143\x6c\141\x73\163\75\x22\x63\x6f\156\x74\145\156\164\x22\76\x44\141\x74\141\40\x67\x61\147\141\154\40\x64\x69\150\141\x70\165\163\x2e\74\x2f\x73\160\141\x6e\x3e\12\40\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\40\40\40\40\40\x20\40\x3c\142\165\x74\164\157\x6e\40\x63\154\141\163\x73\x3d\x22\143\x6c\x6f\x73\145\x22\x20\164\171\160\x65\75\42\142\165\164\164\157\x6e\42\40\x64\141\x74\x61\55\x64\151\x73\155\151\163\x73\75\x22\141\154\x65\162\164\42\40\141\162\x69\141\x2d\154\x61\x62\145\154\75\42\103\154\x6f\163\145\x22\76\12\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\74\x73\160\141\x6e\x20\141\162\x69\141\x2d\x68\151\x64\x64\x65\156\x3d\42\164\162\165\x65\x22\76\xa\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\40\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\74\151\40\x63\154\x61\163\x73\x3d\x22\172\155\x64\151\x20\172\155\x64\x69\55\x63\x6c\x6f\163\x65\55\x63\x69\162\143\x6c\145\42\x3e\x3c\57\x69\76\12\40\x20\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\40\40\74\x2f\x73\x70\141\156\76\xa\40\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x3c\x2f\x62\165\164\164\157\x6e\76\xa\40\40\x20\40\40\x20\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\40\40\40\x20\x20\40\x3c\57\x64\151\x76\x3e\xa\x20\x20\40\40\x20\40\40\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\40\40\x20\x3c\x2f\x64\x69\x76\76\xa\40\x20\40\40\40\40\40\x20\x20\x20\40\40\40\x20\40\40"; } echo $simpan; } elseif ($_GET["\160\x61\x67\145"] == "\x6a\165\162\165\163\141\156") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Jurusan</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  Load_Jurusan(); } elseif ($_GET["\160\x61\147\145"] == "\152\165\x72\165\x73\141\156\55\x64\x65\154\145\x74\x65") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Delete jurusan</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  if (DeleteJurusan(trim($_GET["\151\144"]))) { $simpan = "\xa\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\40\40\xa\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x20\40\x20\40\40\x20\40\74\144\151\x76\40\143\x6c\141\163\163\x3d\x22\143\157\x6e\x74\x61\151\156\145\162\x2d\146\154\x75\151\144\40\x6d\x74\x2d\64\x22\x3e\40\x20\40\x20\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\xa\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\40\x20\x3c\144\x69\x76\40\143\154\141\163\x73\x3d\42\x61\x6c\x65\162\164\x20\x61\x75\55\141\154\x65\x72\164\x2d\x73\x75\143\x63\145\x73\x73\40\x61\x6c\145\162\164\x2d\x64\151\x73\x6d\151\x73\163\x69\x62\154\145\40\146\x61\x64\145\40\163\150\157\x77\x20\x61\165\55\141\154\145\x72\x74\40\141\165\55\141\x6c\145\162\x74\x2d\55\67\60\160\145\162\x22\40\162\157\154\145\x3d\x22\141\154\x65\x72\x74\42\x3e\12\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x3c\151\x20\143\154\x61\163\x73\75\x22\x7a\155\144\x69\40\x7a\x6d\x64\151\55\x63\x68\x65\143\x6b\55\143\151\162\143\x6c\x65\x22\x3e\x3c\x2f\x69\76\xa\40\x20\40\40\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\40\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\40\40\x20\74\x73\x70\x61\x6e\x20\x63\x6c\141\163\x73\x3d\x22\143\157\x6e\x74\145\x6e\164\x22\76\x44\141\164\x61\40\x62\145\162\150\141\163\151\x6c\40\144\x69\x68\x61\x70\165\163\x3c\x2f\163\160\141\x6e\76\xa\40\40\x20\40\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\74\x62\x75\164\x74\x6f\x6e\x20\x63\154\141\163\163\75\42\143\154\x6f\x73\x65\42\x20\164\x79\160\x65\75\42\x62\x75\x74\164\x6f\x6e\42\x20\144\x61\164\141\x2d\144\x69\163\155\151\x73\x73\75\x22\x61\x6c\145\x72\164\x22\40\141\162\151\x61\x2d\154\141\x62\x65\x6c\75\42\x43\x6c\157\163\x65\42\76\xa\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\x20\40\40\40\40\x20\x3c\163\x70\141\156\40\x61\x72\x69\x61\x2d\150\151\144\x64\145\156\75\x22\164\x72\x75\145\42\76\xa\x20\40\40\40\x20\40\40\40\40\x20\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\74\151\40\143\x6c\141\x73\x73\75\42\172\155\x64\x69\x20\172\x6d\144\x69\55\143\154\x6f\x73\x65\55\x63\x69\162\x63\154\x65\42\76\74\57\x69\x3e\xa\40\x20\40\40\40\40\40\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\40\x20\40\40\40\40\40\x20\40\x20\40\x20\x20\x3c\x2f\x73\x70\x61\156\76\xa\40\40\x20\x20\40\40\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\40\40\40\40\x20\40\x20\40\40\40\40\40\x20\40\x20\40\x20\x20\74\x2f\x62\165\x74\164\x6f\156\76\xa\x20\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x3c\x2f\x64\151\166\76\12\x20\40\40\40\40\x20\40\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\74\57\x64\x69\166\76"; echo "\40\74\155\x65\164\x61\x20\x68\x74\164\160\55\145\161\x75\151\166\x3d\42\162\x65\x66\x72\x65\x73\150\x22\x63\x6f\156\x74\145\156\x74\x3d\42\x33\x3b\125\x52\x4c\75\77\x70\141\x67\x65\x3d\x6a\x75\x72\x75\163\x61\156\x22\x20\57\76\xa\40\40\40\40\40\40\x20\x20\40\x20\40\x20\40\x20\40\40\40\40\40\x20\40\40\40\40"; } else { $simpan = "\x3c\x64\x69\166\40\143\x6c\141\x73\163\x3d\x22\x63\x6f\x6e\164\x61\x69\156\x65\x72\x2d\x66\x6c\165\x69\x64\x20\x6d\164\55\64\x22\76\xa\x20\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\40\x20\40\x20\40\40\x20\x20\74\x64\151\166\40\143\x6c\141\163\163\x3d\42\x61\x6c\x65\x72\164\x20\141\x6c\145\x72\x74\55\x64\x61\156\147\145\162\x20\x61\x6c\145\x72\164\55\x64\x69\x73\x6d\151\x73\x73\151\142\x6c\145\40\146\141\144\145\40\x73\x68\157\167\42\40\x72\157\x6c\x65\75\42\141\x6c\x65\162\164\x22\x3e\12\40\x20\40\x20\x20\40\40\x20\40\40\40\40\x20\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\74\x69\x20\x63\154\141\163\163\75\42\x7a\x6d\x64\x69\x20\172\155\x64\x69\55\143\154\157\x73\x65\55\x63\x69\x72\x63\x6c\x65\42\76\74\x2f\151\x3e\xa\x20\x20\40\x20\40\40\40\x20\40\x20\40\x20\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\40\x20\x3c\163\x70\141\x6e\40\x63\x6c\141\163\163\x3d\42\143\157\x6e\x74\145\156\164\42\76\x44\141\164\x61\x20\147\x61\147\x61\154\40\144\x69\x68\x61\x70\x75\163\x2e\74\57\x73\160\141\x6e\76\12\x20\x20\40\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\40\40\x20\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\40\x20\40\x20\40\40\x3c\142\x75\x74\x74\x6f\156\40\x63\x6c\141\x73\163\x3d\42\143\154\157\163\145\x22\40\164\171\x70\x65\75\x22\x62\x75\164\164\157\156\42\40\144\x61\164\x61\55\x64\x69\163\x6d\151\x73\163\75\x22\141\x6c\x65\162\x74\x22\x20\x61\x72\x69\x61\55\154\141\x62\145\x6c\75\42\103\x6c\x6f\x73\145\x22\76\xa\x20\40\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\x20\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\74\163\x70\x61\x6e\x20\x61\162\151\141\x2d\150\151\x64\144\x65\x6e\75\x22\164\x72\165\x65\42\x3e\xa\40\x20\x20\40\x20\x20\40\x20\40\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\40\40\x20\x3c\x69\40\143\x6c\x61\163\x73\x3d\x22\x7a\155\144\151\x20\172\155\144\151\55\143\x6c\157\x73\145\55\x63\151\x72\x63\x6c\145\x22\x3e\x3c\57\151\76\xa\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\40\x20\40\40\40\40\40\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x3c\x2f\163\160\x61\156\76\12\x20\40\40\40\40\40\40\x20\40\40\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\40\x20\40\40\x20\x20\40\x3c\57\x62\165\164\164\157\x6e\76\xa\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\40\40\40\x20\x20\40\40\40\x20\x20\40\x3c\57\x64\x69\x76\76\12\x20\x20\x20\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\40\40\x20\x20\40\x20\40\40\x20\74\57\x64\151\166\76\12\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\x20\x20"; } echo $simpan; } elseif ($_GET["\160\x61\x67\145"] == "\x6b\x65\x6c\x61\x73") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Kelas</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  Load_Kelas(); } elseif ($_GET["\160\x61\147\145"] == "\153\145\154\x61\x73\55\x64\145\154\145\164\x65") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Delete kelas</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <?php  if (DeleteKelas(trim($_GET["\x69\144"]))) { $simpan = "\xa\x20\x20\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\40\x20\40\40\40\x20\x20\40\xa\40\x20\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\74\x64\x69\x76\40\x63\154\x61\x73\x73\x3d\42\x63\x6f\156\x74\x61\x69\156\145\162\55\x66\154\x75\151\x64\40\155\164\x2d\x34\x22\76\x20\40\x20\x20\40\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\x20\xa\40\x20\40\40\x20\40\40\40\40\40\40\40\x20\40\x20\40\x20\x20\40\40\40\40\40\40\40\40\40\40\x3c\x64\x69\x76\x20\143\154\141\163\163\x3d\x22\141\154\x65\162\x74\x20\141\165\55\141\154\x65\x72\x74\x2d\163\x75\x63\x63\x65\x73\x73\x20\141\x6c\145\x72\x74\55\x64\151\163\155\x69\163\x73\x69\x62\x6c\x65\x20\146\x61\x64\x65\x20\x73\x68\x6f\x77\40\141\x75\55\x61\x6c\x65\x72\164\x20\x61\x75\55\x61\x6c\145\x72\x74\x2d\x2d\x37\x30\160\145\162\42\40\162\x6f\x6c\x65\75\42\x61\x6c\x65\x72\164\x22\76\12\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\40\40\40\x20\x20\40\40\40\x20\40\x20\40\40\40\40\40\x20\40\x20\x20\40\x20\40\40\x3c\151\x20\143\x6c\x61\163\163\x3d\42\x7a\x6d\x64\151\40\172\x6d\144\x69\55\143\150\145\143\153\x2d\143\151\x72\143\x6c\145\42\76\74\57\151\76\12\40\40\40\x20\40\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\x3c\163\x70\141\x6e\40\143\x6c\141\x73\x73\75\42\x63\157\156\x74\x65\x6e\164\42\x3e\104\141\164\x61\x20\x62\x65\162\x68\141\163\151\154\40\144\x69\150\141\x70\x75\163\74\57\x73\x70\141\156\76\xa\40\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\40\40\x20\40\x20\x3c\142\165\x74\164\x6f\x6e\x20\x63\x6c\141\x73\163\x3d\x22\x63\154\x6f\163\x65\42\40\x74\x79\x70\145\75\x22\x62\165\164\x74\157\156\x22\40\x64\x61\164\141\55\x64\x69\163\x6d\x69\x73\163\x3d\x22\141\154\x65\162\164\42\x20\141\x72\x69\x61\x2d\154\x61\142\x65\154\x3d\42\103\154\x6f\x73\x65\42\76\xa\x20\x20\x20\x20\x20\40\40\40\x20\40\40\x20\40\x20\40\40\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\x3c\x73\x70\x61\156\40\141\x72\x69\x61\55\150\x69\144\144\145\x6e\x3d\42\x74\x72\165\x65\42\76\12\x20\x20\x20\x20\40\x20\40\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\40\40\40\40\40\x20\x20\40\40\x20\40\40\40\40\x20\x20\40\x20\74\x69\x20\x63\x6c\x61\163\163\75\x22\172\155\x64\151\x20\172\155\x64\x69\55\143\154\x6f\163\x65\55\143\151\162\x63\154\145\x22\76\74\57\151\76\xa\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x3c\57\x73\160\141\x6e\x3e\xa\40\40\40\40\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\x3c\57\x62\x75\x74\x74\157\156\76\12\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\40\40\40\x20\x20\x20\40\40\x20\40\40\40\74\57\144\x69\x76\76\xa\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\40\40\40\40\x3c\x2f\x64\x69\166\76"; echo "\40\74\155\x65\164\141\x20\150\164\x74\160\x2d\145\161\165\151\x76\75\x22\162\145\x66\x72\145\163\x68\42\143\157\x6e\x74\145\156\x74\x3d\x22\x33\73\x55\x52\114\x3d\x3f\x70\141\x67\x65\75\x6b\145\154\x61\163\x22\40\x2f\x3e\12\40\40\40\40\40\x20\40\x20\40\40\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\40\40"; } else { $simpan = "\74\x64\x69\166\40\x63\x6c\x61\x73\x73\75\42\x63\x6f\x6e\164\x61\x69\x6e\145\x72\55\146\154\x75\151\x64\40\x6d\x74\55\64\x22\76\12\x20\x20\x20\40\40\x20\40\40\40\40\x20\40\x20\40\40\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\40\40\74\144\151\166\x20\143\x6c\141\x73\x73\75\x22\x61\x6c\145\x72\x74\x20\141\x6c\145\162\164\55\x64\x61\x6e\x67\x65\162\x20\141\x6c\145\x72\164\x2d\144\x69\163\155\151\163\163\x69\142\x6c\145\40\146\x61\x64\145\x20\x73\x68\x6f\167\x22\x20\x72\x6f\x6c\145\75\x22\x61\x6c\145\162\164\42\76\12\40\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\40\40\40\x20\x20\40\x20\40\x20\40\x20\x20\40\40\x20\40\x20\40\x20\40\40\x20\74\x69\x20\x63\154\x61\163\163\75\42\172\155\144\151\40\172\155\144\151\55\x63\x6c\157\163\145\55\x63\x69\162\143\x6c\145\42\x3e\x3c\x2f\151\76\12\40\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\x20\x20\x3c\x73\160\141\156\40\x63\x6c\141\163\x73\x3d\x22\x63\157\x6e\164\145\156\164\x22\76\104\141\164\x61\x20\147\x61\147\141\154\x20\144\151\x68\x61\x70\x75\x73\56\74\57\163\x70\x61\156\76\12\x20\x20\40\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\x20\40\40\40\x20\40\40\x20\40\74\x62\165\164\164\x6f\x6e\x20\x63\154\141\163\x73\x3d\x22\x63\x6c\x6f\x73\145\42\40\164\171\x70\x65\75\x22\x62\165\164\x74\x6f\x6e\x22\x20\x64\x61\164\x61\55\144\x69\x73\x6d\x69\163\x73\75\42\x61\x6c\145\x72\x74\x22\40\x61\162\x69\x61\55\x6c\x61\142\145\154\x3d\42\103\154\157\x73\x65\x22\x3e\12\40\40\40\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\40\40\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\x20\x20\x20\74\x73\160\141\x6e\40\x61\x72\151\141\55\x68\x69\x64\144\145\156\75\42\x74\162\165\145\x22\x3e\xa\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\40\x20\40\x20\40\40\40\x20\40\40\40\40\x20\40\40\x20\x20\x20\x3c\151\x20\x63\x6c\141\x73\163\75\42\172\x6d\x64\x69\40\x7a\155\144\x69\x2d\x63\x6c\157\163\145\x2d\x63\x69\x72\143\154\145\x22\76\74\57\151\x3e\xa\40\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\40\x20\40\40\40\40\40\40\40\40\x20\x20\40\x20\x20\40\40\x20\40\40\40\40\74\57\x73\x70\141\x6e\76\xa\40\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\40\40\40\40\40\x20\x20\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\40\40\x20\74\x2f\142\165\164\164\157\156\x3e\12\x20\40\x20\40\40\x20\40\40\40\40\40\40\40\40\x20\40\40\x20\40\x20\x20\40\40\x20\40\40\40\40\40\40\40\40\x3c\57\x64\x69\166\x3e\12\40\40\x20\x20\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\x20\40\x20\x3c\57\x64\151\x76\x3e\xa\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\x20\40"; } echo $simpan; ?>
    
<?php  } elseif ($_GET["\160\x61\x67\145"] == "\x73\145\164\x74\151\156\x67") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Setting</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
        <?php  LoadSetting(); $d = DB_NAME; $d .= "\x2e\x73\161\x6c"; ?>

        <?php  $DataSetting = DataSetting(); $Row = $DataSetting->fetch_array(); $logo_situs = $Row["\x6c\x6f\x67\x6f\137\x73\151\164\165\163"]; $sidebarlogo_situs = $Row["\163\151\144\145\142\141\162\154\x6f\147\x6f\x5f\x73\151\x74\x75\163"]; $pendaftaran = $Row["\x70\x65\156\144\141\x66\x74\141\162\x61\x6e"]; $id = $Row["\x69\144"]; $logo_situs_err = $sidebarlogo_situs_err = $simpan = ''; if (isset($_POST["\x75\160\144\x61\x74\x65\137\154\157\x67\x6f"])) { if (empty($_FILES["\154\x6f\x67\x6f\x5f\163\151\x74\165\x73"]["\x74\x6d\160\137\x6e\x61\155\145"])) { $FileItem = $logo_situs; } else { $FileName = $_FILES["\154\x6f\x67\x6f\137\163\x69\164\165\x73"]["\156\141\155\145"]; $FileDir = $_FILES["\x6c\x6f\147\157\137\163\x69\x74\165\x73"]["\x74\155\x70\x5f\156\141\x6d\145"]; $FileSize = $_FILES["\154\x6f\x67\x6f\x5f\163\151\x74\x75\163"]["\x73\151\x7a\x65"]; $FileDestination = "\56\56\57\56\56\x2f\x61\x73\x73\x65\164\x73\57\x69\155\147\x2f"; $FileExtension = strtolower(pathinfo($FileName, PATHINFO_EXTENSION)); $FileValid = array("\152\x70\x67", "\152\x70\145\x67", "\160\x6e\x67"); $FileItem = "\154\x6f\x67\157\x2e" . $FileExtension; if (in_array($FileExtension, $FileValid)) { if ($FileSize > 300000) { $logo_situs_err = "\125\153\165\x72\141\x6e\x20\154\x6f\147\157\40\164\x69\144\x61\153\40\x62\x6f\x6c\145\150\40\x6c\x65\x62\151\150\40\144\141\162\x69\40\x33\x30\x30\x4b\102"; } else { $logo_situs = $FileDir; } } else { $logo_situs_err = "\127\141\x6a\151\x62\40\x64\x69\x69\163\151\40\x64\x65\156\x67\x61\x6e\x20\146\x6f\162\x6d\x61\x74\40\x4a\x50\x47\54\40\112\120\x45\107\x2c\x20\x61\x74\x61\x75\x20\120\116\x47"; } } if (empty($logo_situs_err)) { if (SimpanLogo($logo_situs, $id)) { $simpan = "\12\40\x20\40\40\40\x20\40\40\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\12\x20\x20\40\40\x20\40\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\x3c\144\151\x76\x20\x63\x6c\x61\x73\163\75\x22\x63\x6f\156\164\141\x69\x6e\145\x72\55\146\x6c\165\x69\x64\40\155\164\55\64\42\x3e\40\40\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\x20\x20\40\40\40\40\x20\40\40\x20\40\x20\xa\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\40\40\40\x20\x20\40\40\40\40\40\x20\40\40\x20\40\x20\40\x20\x20\x20\x3c\144\x69\x76\40\x63\x6c\141\x73\163\x3d\x22\141\154\x65\162\x74\x20\141\165\x2d\x61\154\x65\162\164\55\163\x75\x63\x63\145\x73\163\x20\141\154\145\x72\x74\55\144\x69\x73\155\x69\163\163\x69\142\x6c\145\40\x66\x61\144\x65\40\x73\x68\x6f\x77\40\x61\x75\x2d\x61\154\x65\162\164\x20\x61\165\x2d\x61\x6c\145\162\164\55\55\67\60\x70\145\162\42\x20\x72\x6f\154\x65\x3d\42\141\154\x65\162\164\x22\x3e\xa\x20\x20\40\40\40\40\40\40\40\x20\x20\40\x20\40\40\40\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\40\74\151\40\x63\x6c\x61\x73\163\x3d\42\172\x6d\144\151\x20\172\x6d\144\151\x2d\143\150\145\x63\x6b\55\x63\151\x72\x63\154\145\x22\76\x3c\x2f\x69\76\xa\40\x20\40\x20\40\40\40\x20\40\40\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\x3c\163\x70\141\156\x20\143\x6c\x61\x73\x73\x3d\42\x63\x6f\x6e\164\x65\x6e\164\42\x3e\104\x61\164\x61\40\154\157\147\x6f\40\x62\x65\162\x68\x61\x73\x69\154\40\x64\x69\x73\x69\155\x70\x61\x6e\74\57\163\160\x61\x6e\x3e\12\x20\40\x20\40\x20\40\x20\40\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x3c\142\x75\164\x74\157\156\x20\143\154\141\x73\163\x3d\42\x63\x6c\157\x73\x65\x22\40\164\x79\160\145\x3d\42\142\x75\x74\x74\157\x6e\42\40\144\x61\x74\x61\x2d\x64\x69\163\155\x69\163\x73\x3d\42\x61\154\145\x72\x74\x22\x20\141\162\151\x61\55\x6c\141\x62\x65\154\75\42\x43\x6c\157\163\145\42\76\xa\40\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\40\40\x20\40\x3c\x73\x70\x61\156\x20\141\162\x69\x61\55\x68\x69\144\x64\x65\156\x3d\42\x74\x72\165\145\42\x3e\xa\40\40\x20\40\x20\x20\40\x20\40\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\74\151\40\143\x6c\141\163\x73\75\x22\x7a\155\x64\151\x20\x7a\x6d\x64\x69\55\143\154\x6f\163\145\55\143\151\162\143\x6c\x65\x22\x3e\74\x2f\151\76\xa\x20\40\40\40\40\x20\40\x20\40\40\x20\40\40\40\x20\40\x20\40\40\40\40\x20\40\x20\40\40\x20\40\40\40\40\40\x20\40\x20\40\40\40\40\40\40\x20\x20\x20\x3c\x2f\163\160\141\156\x3e\xa\40\x20\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\x3c\x2f\x62\165\x74\164\157\x6e\x3e\xa\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\40\x3c\x2f\x64\x69\166\76\xa\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\40\40\40\x20\x20\x20\x20\x20\x3c\x2f\x64\151\x76\x3e"; echo "\xa\x20\40\x20\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\x3c\x6d\145\x74\141\x20\x68\x74\164\160\55\x65\x71\x75\151\x76\75\42\162\x65\x66\x72\x65\163\x68\x22\143\157\156\x74\x65\x6e\164\75\x22\x32\x3b\x55\122\x4c\75\x3f\160\141\147\x65\x3d\163\145\x74\164\151\x6e\147\x22\40\57\x3e\xa\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\x20"; } else { $simpan = "\x3c\144\151\x76\40\x63\x6c\141\x73\x73\x3d\42\x63\157\x6e\x74\x61\151\156\x65\x72\55\x66\x6c\x75\x69\x64\40\155\x74\55\x34\42\76\12\x20\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\74\144\x69\166\x20\x63\x6c\x61\163\x73\x3d\x22\x61\154\x65\162\164\40\141\x6c\x65\162\x74\x2d\144\141\x6e\147\x65\162\x20\141\154\x65\162\x74\x2d\144\151\x73\155\x69\x73\x73\151\x62\154\x65\40\x66\x61\x64\145\x20\x73\x68\x6f\167\x22\40\162\157\154\145\75\x22\141\154\145\x72\164\x22\76\xa\x20\40\40\40\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\x20\40\40\40\40\40\40\40\74\151\40\x63\154\141\x73\163\75\x22\172\x6d\144\x69\x20\x7a\155\x64\151\x2d\x63\x6c\157\163\x65\55\143\151\162\x63\x6c\145\x22\x3e\74\57\151\76\12\x20\40\40\40\40\40\40\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\74\163\160\x61\x6e\x20\143\154\x61\x73\x73\x3d\42\x63\x6f\x6e\164\x65\156\164\x22\x3e\104\141\164\141\40\x67\141\x67\x61\154\40\144\x69\163\x69\x6d\160\141\x6e\56\x3c\57\163\x70\141\156\x3e\xa\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\40\40\40\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\x3c\x62\x75\164\x74\157\x6e\x20\143\x6c\141\x73\x73\75\x22\x63\154\157\x73\x65\42\x20\x74\171\x70\145\75\x22\x62\x75\164\x74\x6f\156\x22\40\144\x61\x74\x61\55\144\151\163\155\x69\x73\x73\x3d\x22\x61\x6c\145\x72\164\x22\40\x61\162\x69\x61\55\x6c\x61\x62\x65\154\x3d\x22\103\x6c\157\x73\145\42\x3e\xa\40\40\x20\x20\40\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\40\x20\74\163\160\x61\x6e\x20\x61\x72\x69\x61\x2d\150\x69\144\x64\145\x6e\75\42\164\162\165\145\x22\x3e\xa\40\x20\40\40\x20\40\40\40\40\x20\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\40\40\x3c\151\40\143\154\141\x73\163\75\42\172\x6d\x64\151\40\x7a\x6d\144\x69\x2d\143\154\x6f\163\x65\55\143\151\x72\x63\x6c\x65\x22\x3e\x3c\x2f\151\76\12\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\40\x20\40\x20\x20\74\x2f\x73\x70\x61\156\76\12\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\40\x20\x20\40\40\40\40\x20\x20\40\x3c\57\142\x75\x74\164\157\156\x3e\12\40\x20\x20\x20\40\40\x20\40\40\x20\40\x20\40\40\x20\40\40\x20\40\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x3c\x2f\x64\151\x76\76\12\40\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\74\x2f\144\x69\x76\76\12\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\40\40\x20"; } } } if (isset($_POST["\165\x70\144\x61\x74\145\137\163\x69\144\x65\x62\x61\162\x6c\157\x67\x6f"])) { if (empty($_FILES["\163\151\x64\x65\x62\x61\162\x6c\157\x67\x6f\137\163\x69\164\x75\163"]["\164\x6d\160\x5f\x6e\x61\x6d\x65"])) { $FileItem = $sidebarlogo_situs; } else { $FileName = $_FILES["\163\x69\x64\x65\x62\x61\x72\x6c\157\147\x6f\x5f\163\151\164\x75\x73"]["\x6e\x61\x6d\145"]; $FileDir = $_FILES["\x73\x69\x64\145\142\x61\x72\154\x6f\x67\x6f\x5f\x73\x69\x74\165\x73"]["\x74\155\160\x5f\x6e\x61\155\145"]; $FileSize = $_FILES["\x73\151\144\x65\142\141\162\154\157\x67\157\x5f\x73\x69\x74\x75\163"]["\x73\x69\x7a\145"]; $FileDestination = "\x2e\x2e\x2f\x2e\56\57\141\163\x73\145\164\x73\57\x69\x6d\147\x2f"; $FileExtension = strtolower(pathinfo($FileName, PATHINFO_EXTENSION)); $FileValid = array("\152\x70\147", "\x6a\160\x65\147", "\x70\156\147"); $FileItem = "\163\x69\x64\x65\x62\141\162" . "\x2e" . $FileExtension; if (in_array($FileExtension, $FileValid)) { if ($FileSize > 300000) { $sidebarlogo_situs_err = "\125\x6b\165\162\x61\156\40\x6c\157\x67\157\x20\164\x69\x64\141\153\40\142\x6f\x6c\145\150\40\154\145\142\151\150\40\144\x61\162\151\x20\x33\60\60\x4b\102"; } else { $sidebarlogo_situs = $FileDir; } } else { $sidebarlogo_situs_err = "\x57\x61\x6a\x69\142\x20\144\151\151\163\x69\40\144\145\156\x67\141\x6e\40\146\157\x72\x6d\x61\164\40\x4a\x50\107\x2c\x20\x4a\x50\105\x47\54\40\x61\164\x61\165\40\x50\116\107"; } } if (empty($sidebarlogo_situs_err)) { if (SimpanLogoSidebar($sidebarlogo_situs, $id)) { $simpan = "\12\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\40\40\40\x20\x20\40\40\x20\40\x20\x20\xa\x20\40\40\x20\40\x20\x20\40\x20\40\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\74\144\151\166\40\x63\x6c\141\x73\x73\x3d\x22\x63\x6f\x6e\x74\141\x69\x6e\x65\162\x2d\146\154\x75\151\x64\40\x6d\164\55\64\42\76\40\40\x20\x20\x20\x20\x20\40\40\40\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\12\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\40\40\40\x20\40\40\40\40\40\40\x20\40\40\74\x64\x69\x76\40\x63\x6c\141\x73\x73\x3d\42\141\x6c\145\162\164\x20\x61\165\x2d\x61\154\x65\162\164\x2d\x73\165\x63\x63\x65\x73\x73\x20\141\x6c\145\162\x74\55\x64\x69\163\x6d\x69\x73\x73\x69\142\x6c\x65\40\146\141\x64\145\40\x73\150\x6f\x77\40\141\165\x2d\141\x6c\x65\x72\x74\40\x61\165\x2d\141\x6c\145\x72\164\55\55\67\x30\x70\145\162\42\40\162\157\154\x65\75\x22\x61\154\145\x72\x74\x22\x3e\xa\x20\40\40\x20\40\40\x20\40\40\40\40\x20\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\40\x3c\151\x20\143\154\141\163\163\75\x22\172\155\144\151\40\x7a\155\x64\151\x2d\143\x68\145\x63\x6b\55\x63\151\162\143\154\145\x22\x3e\74\57\151\x3e\12\x20\x20\x20\40\40\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\40\40\x3c\x73\x70\141\156\40\143\x6c\141\x73\x73\x3d\x22\x63\157\156\164\145\156\x74\42\x3e\x44\x61\164\x61\x20\114\157\x67\157\40\123\x69\x64\145\142\x61\x72\x20\142\x65\162\x68\141\163\151\x6c\x20\x64\151\163\x69\x6d\x70\x61\156\x3c\x2f\163\160\141\x6e\x3e\12\x20\x20\x20\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\74\x62\165\164\x74\157\156\40\143\x6c\141\163\x73\75\42\x63\x6c\157\x73\x65\42\x20\x74\x79\x70\x65\x3d\x22\x62\x75\164\x74\157\156\42\40\144\141\164\x61\55\144\x69\x73\155\151\163\x73\x3d\x22\x61\154\145\162\164\42\x20\141\162\x69\x61\55\x6c\x61\142\145\x6c\x3d\x22\x43\154\157\163\145\42\76\xa\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\74\x73\x70\x61\x6e\x20\141\162\x69\x61\55\x68\x69\144\x64\x65\156\x3d\x22\164\162\x75\145\x22\x3e\12\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\40\x3c\151\40\x63\x6c\x61\163\163\x3d\42\x7a\155\144\x69\x20\172\155\144\151\x2d\143\x6c\157\163\145\55\143\151\x72\x63\x6c\x65\42\76\x3c\57\151\76\12\40\40\x20\40\40\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\40\40\x20\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\40\40\40\40\x3c\x2f\163\x70\x61\156\76\xa\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\40\40\40\40\40\40\40\40\40\40\40\40\40\x20\40\x20\x20\x3c\57\x62\x75\164\164\157\156\x3e\xa\x20\40\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\40\40\40\40\x3c\x2f\x64\x69\x76\x3e\xa\40\40\x20\x20\40\40\x20\x20\40\40\40\40\40\x20\40\40\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\40\74\57\x64\x69\166\76"; echo "\xa\40\40\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x3c\x6d\x65\164\141\x20\x68\x74\164\x70\x2d\x65\161\165\151\x76\x3d\42\x72\145\146\162\x65\163\150\42\143\x6f\x6e\164\x65\x6e\164\x3d\x22\62\73\x55\122\x4c\75\x3f\160\x61\147\145\75\163\x65\164\164\x69\x6e\147\x22\40\57\x3e\12\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\x20\x20"; } else { $simpan = "\x3c\144\x69\166\40\x63\x6c\141\163\x73\75\42\143\157\156\x74\141\151\x6e\145\162\x2d\146\x6c\x75\x69\144\x20\x6d\x74\x2d\64\x22\76\12\x20\x20\40\40\x20\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\x3c\144\x69\166\40\x63\x6c\x61\163\163\75\42\x61\x6c\x65\x72\164\40\141\x6c\145\x72\164\x2d\144\x61\156\x67\x65\162\x20\x61\x6c\145\162\164\x2d\x64\151\163\x6d\151\x73\163\151\x62\154\145\40\146\141\144\145\40\163\x68\157\167\42\40\x72\x6f\x6c\x65\x3d\x22\x61\x6c\145\162\x74\42\76\xa\x20\40\x20\40\40\40\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\40\x20\40\x20\x20\40\x20\x20\x20\74\151\x20\143\154\141\x73\163\x3d\42\x7a\x6d\144\x69\40\x7a\x6d\144\151\x2d\x63\154\157\163\x65\x2d\143\151\162\143\x6c\145\42\76\x3c\x2f\x69\76\12\x20\40\x20\40\40\x20\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\40\40\74\x73\x70\141\156\40\143\154\x61\x73\163\75\42\143\x6f\156\x74\145\156\164\x22\76\x44\x61\164\141\x20\147\141\147\x61\154\40\144\x69\x68\141\x70\x75\163\56\x3c\x2f\163\160\x61\x6e\76\xa\40\x20\40\x20\40\x20\x20\40\x20\40\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\40\74\x62\x75\164\x74\157\x6e\x20\143\154\141\x73\163\x3d\42\x63\154\x6f\x73\x65\x22\x20\x74\x79\160\145\x3d\42\142\x75\164\164\157\156\x22\x20\144\x61\x74\x61\x2d\x64\x69\x73\x6d\x69\x73\163\x3d\42\x61\154\x65\x72\x74\42\40\141\162\151\141\x2d\154\141\x62\145\x6c\x3d\42\103\x6c\157\x73\145\42\x3e\xa\40\x20\40\40\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\74\x73\x70\x61\x6e\40\x61\x72\151\141\55\x68\x69\144\x64\145\x6e\75\42\164\x72\165\x65\x22\76\12\40\40\x20\40\x20\40\40\40\40\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\40\40\x20\x20\40\x20\40\x3c\x69\x20\x63\x6c\x61\163\x73\x3d\42\172\x6d\x64\x69\x20\x7a\x6d\144\151\55\143\x6c\x6f\x73\145\x2d\143\x69\162\x63\154\x65\x22\x3e\x3c\57\x69\x3e\12\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\x20\x20\40\x20\x20\x3c\57\x73\160\141\156\76\12\x20\x20\40\40\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\40\40\x20\x3c\x2f\x62\165\164\x74\157\156\x3e\12\40\x20\x20\x20\40\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\74\57\144\151\x76\x3e\12\40\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\74\57\x64\x69\x76\x3e\xa\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\x20"; } } } echo $simpan; echo "\12\40\40\40\40\40\x20\40\40\74\x66\x6f\x72\x6d\x20\141\143\x74\x69\157\x6e\75\42" . htmlspecialchars(basename($_SERVER["\x52\x45\121\125\x45\123\x54\x5f\125\x52\x49"])) . "\42\x20\155\145\x74\x68\x6f\x64\75\x22\160\157\x73\164\x22\40\145\x6e\x63\x74\x79\160\x65\75\x22\x6d\165\x6c\164\151\x70\141\x72\164\x2f\146\157\162\x6d\x2d\x64\x61\164\x61\x22\x20\156\x6f\x76\x61\154\151\144\x61\164\x65\75\42\156\157\x76\141\154\x69\144\x61\164\x65\42\x3e\12\40\40\x20\40\40\x20\40\x20\x20\40\x20\40\40\x20\x20\40\74\x64\x69\x76\x20\143\x6c\x61\x73\x73\75\x22\146\157\162\155\55\147\162\x6f\x75\x70\x22\76\xa\x20\x20\x20\40\x20\40\40\40\x20\40\40\40\x20\40\40\x20\40\40\x20\x20\74\154\x61\142\145\154\40\x66\x6f\x72\75\42\154\x6f\147\x6f\137\163\151\x74\x75\163\42\x20\143\x6c\141\x73\x73\x3d\42\x63\x6f\156\x74\162\157\x6c\x2d\x6c\x61\x62\x65\x6c\40\x6d\x62\55\61\x22\76\114\157\x67\157\x3c\x2f\x6c\x61\142\x65\x6c\x3e\x20\40\40\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\40\12\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x20\74\x69\156\x70\x75\164\x20\x63\154\141\x73\x73\x3d\x22\146\157\162\x6d\x2d\x63\157\x6e\164\x72\157\x6c\x22\40\164\171\160\145\75\42\146\151\x6c\x65\x22\x20\x69\x64\75\42\x6c\x6f\147\157\137\x73\151\164\165\163\42\x20\156\141\155\145\x3d\42\154\x6f\x67\157\137\163\x69\164\165\163\x22\76\12\x20\x20\40\x20\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\x3c\x70\x3e\12\40\40\40\40\40\40\40\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\40\40\x20\x20\40\40\x20\40\x20\x20\x3c\151\155\147\x20\x63\x6c\141\x73\163\75\x22\x69\x6d\x67\x2d\x66\154\165\151\x64\x22\40\163\162\x63\75\42\x2e\56\x2f\56\x2e\x2f\x61\163\163\145\164\163\x2f\x69\155\147\57" . $logo_situs . "\x22\40\x77\151\144\x74\x68\x3d\42\63\60\42\x20\x68\x65\151\x67\x68\164\75\42\63\60\x22\x20\x61\x6c\164\x3d\42\x42\x65\x6c\165\x6d\40\x61\x64\141\x22\x20\164\151\x74\x6c\x65\75\42\x4c\157\x67\x6f\x20\x53\151\x74\x75\163\42\x3e\12\40\x20\40\x20\40\x20\40\40\x20\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\x3c\x2f\x70\76\xa\x20\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\74\x65\x6d\x20\x63\x6c\141\163\x73\x3d\42\x73\155\141\x6c\154\42\x3e\x4c\157\x67\157\x2f\111\143\x6f\156\40\163\151\164\165\163\40\144\x69\x73\141\162\141\156\153\x61\x6e\x20\x75\153\x75\x72\141\156\x20\x33\62\x20\170\x20\x33\x32\40\160\x78\40\106\x6f\162\155\x61\x74\x20\x50\116\x47\x3c\x2f\145\155\x3e\40\40\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\xa\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\x3c\163\x70\x61\x6e\x20\x63\154\141\163\x73\75\x22\x74\145\x78\x74\x2d\x64\x61\156\x67\145\x72\42\x3e" . $logo_situs_err . "\x3c\x2f\x73\x70\x61\156\76\xa\40\x20\40\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x3c\x2f\144\x69\166\76\xa\40\40\x20\40\x20\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\40\x20\12\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\x20\40\x20\40\40\40\x20\40\x20\40\40\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\xa\40\x20\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\40\74\x64\151\x76\x20\143\x6c\x61\163\x73\75\42\x66\157\162\x6d\x2d\x67\x72\157\165\x70\42\x3e\xa\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\40\x20\40\40\40\x20\40\x20\74\x62\165\x74\x74\157\x6e\40\x69\x64\x3d\42\165\x70\144\141\x74\145\x5f\154\157\147\157\x22\40\x6e\x61\x6d\x65\75\x22\x75\x70\144\x61\164\145\x5f\x6c\157\x67\157\42\40\x74\x79\160\145\x3d\42\x73\165\142\x6d\151\x74\42\x20\143\x6c\x61\163\x73\x3d\42\142\164\156\40\142\164\156\55\163\155\x20\142\x74\x6e\x2d\x69\x6e\146\x6f\x22\76\12\x20\40\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\x20\40\x20\40\40\40\40\x20\x20\x20\x3c\x69\x20\x63\x6c\x61\x73\163\x3d\x22\x7a\x6d\x64\151\40\x7a\x6d\144\x69\55\163\145\x74\164\x69\156\147\163\40\146\x61\x2d\x6c\147\42\76\x3c\57\x69\76\x26\156\142\163\160\x3b\12\40\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\40\40\x20\x20\x20\x20\40\40\40\40\74\x73\x70\141\156\40\151\144\x3d\x22\x75\160\144\141\x74\145\x5f\154\x6f\x67\157\x22\76\123\x69\155\160\x61\156\x3c\57\x73\x70\x61\156\76\xa\x20\x20\40\40\40\40\40\40\x20\40\x20\40\x20\40\x20\40\x20\40\40\x20\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\74\163\160\141\x6e\x20\x69\144\x3d\42\165\160\x64\x61\164\145\x5f\x6c\x6f\147\x6f\x22\40\x73\x74\x79\154\x65\75\42\x64\151\x73\x70\154\x61\171\x3a\x6e\x6f\156\145\x3b\x22\x3e\x53\145\x6e\x64\x69\156\147\xe2\x80\xa6\x3c\x2f\163\160\141\156\76\xa\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\40\40\40\40\x20\74\57\x62\x75\164\164\x6f\x6e\x3e\xa\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\x20\x20\74\57\x64\x69\x76\x3e\xa\x20\40\40\40\40\40\x20\x20\x3c\57\x66\x6f\162\x6d\x3e\12\40\x20\40\x20\x20\x20\x20\40\74\146\x6f\162\155\40\141\143\x74\151\x6f\156\x3d\42" . htmlspecialchars(basename($_SERVER["\x52\x45\x51\125\x45\123\124\137\x55\x52\x49"])) . "\x22\x20\155\145\x74\150\x6f\144\75\42\x70\157\x73\x74\42\x20\x65\156\x63\x74\171\160\145\75\x22\155\x75\x6c\164\151\160\x61\x72\x74\x2f\146\157\162\155\55\144\x61\164\x61\x22\40\156\x6f\x76\141\154\x69\x64\141\x74\x65\x3d\x22\x6e\x6f\x76\x61\154\151\x64\x61\164\x65\x22\76\12\x20\x20\40\x20\x20\40\x20\40\x20\40\40\x20\x20\x20\40\x20\x3c\x64\x69\x76\40\143\x6c\141\163\x73\x3d\x22\146\x6f\x72\155\x2d\x67\x72\157\165\160\x22\x3e\12\x20\40\40\x20\40\40\40\x20\40\x20\x20\40\40\40\40\x20\40\40\40\40\74\x6c\141\142\145\x6c\x20\x66\x6f\162\75\42\x73\x69\x64\x65\142\x61\x72\154\157\147\157\x5f\163\x69\x74\x75\x73\42\x20\x63\x6c\141\x73\x73\x3d\x22\143\157\x6e\x74\x72\157\x6c\x2d\x6c\x61\x62\145\154\40\155\142\x2d\61\42\x3e\x4c\x6f\147\157\x20\x53\151\x64\145\142\x61\x72\74\57\154\x61\x62\145\x6c\76\40\40\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\40\x20\x20\40\40\40\x20\x20\x20\40\xa\40\x20\x20\40\x20\x20\40\40\x20\40\40\40\40\40\40\40\x20\x20\40\40\74\x69\x6e\160\165\164\x20\x69\144\x3d\42\x73\x69\x64\x65\x62\141\x72\154\157\x67\x6f\137\x73\x69\x74\x75\x73\x22\x20\x6e\x61\x6d\145\75\42\x73\x69\144\145\142\141\162\154\x6f\x67\157\137\x73\x69\164\165\163\42\40\164\171\160\145\x3d\42\x66\151\x6c\x65\x22\x20\143\154\x61\163\x73\75\42\146\157\x72\x6d\x2d\143\157\x6e\164\162\157\154\x22\76\12\40\x20\40\40\x20\x20\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\x3c\x70\x3e\xa\40\x20\40\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\x20\40\x3c\151\155\147\40\x63\x6c\141\x73\x73\75\42\151\155\147\x2d\x66\154\x75\151\x64\x22\40\x73\162\143\75\x22\56\56\x2f\56\x2e\57\x61\163\x73\145\164\163\x2f\151\155\147\57" . $sidebarlogo_situs . "\x22\x20\x77\151\144\164\x68\x3d\x22\63\60\42\40\x68\x65\x69\147\x68\x74\x3d\42\63\x30\42\40\x61\x6c\x74\x3d\42\102\x65\154\x75\x6d\40\141\x64\x61\42\40\x74\x69\x74\154\x65\x3d\42\x4c\157\x67\x6f\x20\x53\x69\164\x75\163\x22\76\xa\40\40\x20\40\x20\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\40\74\57\x70\x3e\xa\40\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\40\74\x65\155\x20\x63\154\141\x73\x73\75\x22\163\155\x61\154\x6c\42\76\x4c\x6f\x67\157\x20\144\x69\x73\x61\x72\x61\x6e\x6b\x61\x6e\40\x75\153\165\x72\x61\156\40\61\x30\x30\170\61\60\60\40\x70\170\40\x46\x6f\162\x6d\141\x74\x20\120\116\107\74\x2f\x65\155\x3e\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\40\40\x20\40\40\xa\40\40\40\x20\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\x3c\163\160\141\156\40\x63\154\x61\163\163\x3d\x22\x74\145\x78\x74\55\x64\x61\x6e\147\145\x72\42\x3e" . $sidebarlogo_situs_err . "\x3c\57\x73\160\141\156\76\12\40\x20\x20\x20\40\x20\40\40\x20\x20\40\40\40\x20\x20\40\x3c\x2f\144\151\166\76\40\x20\40\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\x20\40\x20\40\40\x20\40\40\x20\40\40\x20\40\40\x20\x20\40\12\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\x20\x20\x3c\x64\x69\x76\x20\x63\x6c\x61\x73\x73\75\42\146\x6f\162\x6d\x2d\x67\x72\x6f\165\x70\x22\76\xa\40\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\x20\74\x62\x75\x74\x74\157\156\40\151\x64\75\x22\165\x70\x64\141\164\x65\137\x73\151\144\x65\x62\141\x72\x6c\x6f\x67\x6f\42\x20\x6e\x61\x6d\145\x3d\42\165\x70\x64\141\164\145\137\x73\x69\144\x65\142\x61\162\x6c\x6f\147\x6f\42\x20\164\171\160\x65\x3d\x22\163\x75\142\155\151\x74\x22\40\143\154\141\x73\x73\75\42\142\x74\x6e\40\142\164\x6e\55\x73\x6d\40\142\x74\156\x2d\x69\x6e\146\157\x22\76\xa\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\x3c\x69\x20\143\x6c\x61\x73\163\x3d\x22\172\x6d\144\151\x20\172\155\x64\151\x2d\x73\x65\164\x74\151\x6e\x67\x73\x20\x66\x61\x2d\x6c\147\x22\x3e\x3c\x2f\151\76\x26\x6e\x62\163\x70\73\12\40\x20\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\74\x73\x70\141\156\x20\151\144\x3d\42\x75\160\x64\141\164\145\137\x73\151\144\145\x62\x61\162\x6c\x6f\x67\x6f\x22\x3e\x53\151\x6d\160\x61\156\x3c\x2f\163\x70\x61\x6e\x3e\12\40\40\x20\40\x20\40\40\40\40\x20\40\40\x20\x20\x20\40\40\40\40\40\74\163\x70\x61\156\x20\151\144\x3d\42\x75\x70\x64\141\x74\145\x5f\x73\151\144\x65\142\x61\162\x6c\157\x67\157\x22\x20\163\164\171\x6c\x65\75\42\x64\x69\163\160\154\x61\171\72\156\157\x6e\x65\73\42\76\x53\145\156\144\151\156\147\xe2\x80\246\x3c\x2f\x73\x70\x61\156\76\12\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\74\x2f\x62\165\x74\164\x6f\x6e\76\12\40\x20\x20\40\40\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\x3c\57\x64\x69\x76\x3e\xa\40\40\40\40\40\x20\40\x20\x3c\x2f\x66\157\x72\155\76\12\x20\40\x20\40\x20\40\x20\x20\40\74\144\x69\166\x20\143\x6c\x61\163\x73\x3d\42\146\x6f\x72\155\55\147\x72\x6f\x75\x70\x22\x3e\xa\40\x20\40\40\40\x20\40\40\40\x20\40\40\40\40\40\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\40\x20\x20\x3c\x6c\x61\x62\x65\154\40\x66\157\162\x3d\x22\156\141\x6d\141\x22\x20\143\154\x61\x73\163\75\42\143\x6f\156\164\x72\x6f\x6c\55\154\141\142\145\154\40\155\142\x2d\61\x22\76\102\x61\x63\153\165\x70\40\104\x61\164\141\x62\141\163\145\74\x2f\x6c\141\x62\145\154\76\xa\40\x20\40\x20\x20\40\40\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\74\x66\x69\x65\154\x64\163\x65\x74\40\144\x69\163\141\x62\x6c\x65\144\76\xa\x20\x20\x20\x20\x20\40\40\x20\x20\40\40\40\40\40\40\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\40\40\x20\x20\40\40\x20\40\x20\x3c\151\156\160\165\164\x20\x63\x6c\x61\163\163\75\42\146\157\162\x6d\x2d\x63\157\x6e\x74\x72\x6f\x6c\42\x20\141\162\x69\141\x2d\x72\x65\x71\165\151\x72\145\x64\x3d\42\x74\162\165\x65\x22\40\141\162\x69\141\x2d\151\x6e\166\141\154\x69\144\75\42\x66\x61\x6c\x73\x65\x22\x20\x76\x61\154\x75\145\x3d\x22" . $d . "\42\76\xa\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\40\x20\40\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\40\40\x20\74\57\146\151\x65\x6c\144\x73\145\x74\x3e\xa\12\40\40\40\40\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x3c\x2f\144\x69\x76\76\xa\40\x20\40\40\x20\x20\x20\40\40\40\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\x3c\x64\151\x76\40\x63\154\141\x73\x73\75\x22\146\157\162\155\x2d\x67\162\x6f\165\x70\42\x3e\xa\40\x20\40\40\40\40\40\x20\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\74\x61\40\x68\162\x65\x66\75\42\x64\x62\x73\x65\143\57\142\x61\x63\153\165\x70\137\144\142\56\160\150\x70\x22\40\x63\154\x61\163\x73\75\42\x62\164\x6e\x20\142\x74\156\55\x70\x72\x69\x6d\141\x72\x79\42\x20\164\x61\162\147\x65\x74\75\42\137\142\x6c\x61\156\153\x22\76\x53\151\x6d\160\x61\x6e\74\x2f\x61\x3e\12\40\40\40\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x3c\x2f\144\x69\166\x3e\xa\40\x20\40\x20\x20\40\40\40\x3c\x66\x6f\x72\x6d\x20\x61\x63\164\x69\x6f\x6e\75\42" . htmlspecialchars(basename($_SERVER["\x52\x45\x51\x55\x45\x53\124\137\125\x52\x49"])) . "\x22\x20\155\x65\x74\150\157\x64\x3d\x22\x70\x6f\x73\164\42\40\x65\x6e\143\x74\x79\x70\x65\x3d\x22\155\x75\x6c\x74\x69\160\x61\162\164\57\x66\x6f\x72\155\55\x64\141\x74\x61\42\x20\x6e\x6f\166\x61\x6c\x69\144\141\x74\145\x3d\x22\x6e\157\x76\141\154\x69\x64\x61\x74\x65\42\76\xa\40\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\40\x3c\144\x69\166\x20\143\154\x61\163\x73\75\x22\146\x6f\162\155\55\147\162\x6f\x75\160\42\76\12\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\40\40\40\74\x64\151\166\40\x63\x6c\141\x73\163\75\42\x61\x6c\x65\x72\164\40\141\154\x65\162\164\55\144\141\156\147\x65\162\x20\141\x6c\145\162\x74\x2d\x64\x69\x73\155\x69\163\x73\151\142\154\145\40\146\x61\x64\x65\x20\163\150\157\167\x22\40\162\x6f\x6c\145\x3d\42\x61\x6c\145\162\x74\x22\76\12\40\x20\x20\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\40\x20\40\x20\x20\74\x69\40\x63\x6c\141\x73\163\x3d\42\x7a\x6d\x64\x69\x20\x7a\155\x64\x69\x2d\143\154\157\163\x65\55\143\x69\162\x63\154\145\x22\x3e\74\x2f\x69\76\xa\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\74\163\x70\141\156\x20\143\x6c\141\163\x73\75\x22\x63\157\x6e\x74\x65\x6e\164\x22\x3e\120\x65\x72\151\x6e\x67\x61\164\x61\x6e\x20\x3a\40\101\x6b\x73\151\40\x64\x69\142\141\x77\x61\150\x20\x69\x6e\151\x20\x64\x61\x70\x61\164\40\x6d\145\156\x67\141\150\x70\x75\163\40\x73\x65\154\165\162\165\150\x20\x64\141\x74\141\x20\x2d\x20\144\141\164\x61\40\160\145\156\144\x61\146\x74\141\x72\x20\171\x61\156\x67\40\164\x65\x6c\141\x68\40\x6d\x61\163\165\153\40\41\56\74\x2f\163\160\x61\156\76\12\40\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\40\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\40\x20\x20\40\x20\74\x62\165\x74\x74\157\x6e\x20\143\x6c\x61\x73\163\x3d\x22\143\x6c\x6f\x73\x65\x22\x20\x74\171\160\x65\75\x22\142\165\x74\164\157\156\42\x20\x64\141\164\141\55\x64\x69\163\155\151\163\163\x3d\x22\141\154\x65\x72\164\x22\x20\141\x72\x69\141\x2d\154\141\x62\x65\x6c\x3d\42\x43\154\157\x73\145\42\76\xa\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\40\40\x20\40\x20\40\x20\40\40\40\40\x20\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\74\163\x70\141\x6e\x20\x61\x72\151\x61\x2d\150\x69\144\x64\x65\x6e\75\42\164\162\165\x65\42\x3e\12\40\x20\40\x20\40\x20\x20\x20\40\40\40\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\x20\x3c\151\40\143\154\x61\163\163\x3d\42\x7a\x6d\144\x69\x20\x7a\155\144\151\55\143\x6c\x6f\163\x65\x2d\143\151\162\x63\154\145\42\76\x3c\x2f\151\76\xa\x20\x20\x20\40\40\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\40\x20\x20\x20\74\x2f\x73\160\x61\156\76\12\x20\x20\x20\40\40\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\x20\40\40\x20\40\40\x20\x20\40\40\40\40\40\40\40\x20\40\x20\x20\40\x20\74\x2f\x62\165\164\x74\157\x6e\x3e\12\40\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\x20\40\40\40\40\x20\40\40\40\40\x20\x20\40\x20\x3c\x2f\144\x69\x76\76\xa\40\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\x20\40\x20\40\x20\40\x20\40\40\40\40\x20\x20\74\x2f\144\x69\x76\76\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\40\12\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\x20\x3c\144\x69\x76\x20\x63\x6c\141\163\x73\75\42\146\157\162\x6d\x2d\x67\x72\x6f\165\x70\x22\76\xa\x20\x20\x20\x20\40\40\40\40\x20\x20\x20\40\40\40\x20\40\40\x20\x20\x20\74\x61\40\150\162\145\x66\x3d\42\77\x70\x61\x67\145\75\162\x65\x73\145\164\42\40\151\144\75\x22\x72\145\163\x65\x74\42\40\x6e\x61\x6d\x65\75\42\162\145\163\x65\x74\x22\40\x63\x6c\x61\163\163\75\42\142\164\x6e\x20\x62\164\156\x2d\x73\x6d\40\142\x74\156\x2d\x64\141\x6e\x67\x65\162\x22\76\40\x52\x65\x73\145\x74\40\104\x61\164\x61\x20\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\xa\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\40\74\57\141\76\12\40\40\40\40\40\x20\40\40\x20\40\40\40\x20\x20\x20\40\74\x2f\144\151\x76\76\xa\40\40\x20\x20\40\x20\40\40\74\57\146\157\162\155\76\12\40\40\x20\x20\40\40\x20\x20\x3c\x2f\144\151\x76\x3e\xa\x20\40\x20\40\x20\x20\x20\x20\x3c\x2f\144\x69\x76\76\xa\x20\40\x20\x20\x20\40\x20\x20\x3c\x2f\x64\x69\166\76\xa\x20\x20\40\x20\40\40\40\x20\74\x2f\144\151\x76\76\xa\x20\40\40\x20\x20\40\40\x20\74\57\144\151\x76\76\xa\x20\x20\40\40\x20\x20\x20\x20\x3c\57\x64\x69\166\x3e\12\x20\40\x20\40\x20\x20\40\x20\74\57\x64\151\x76\76\xa\40\x20\x20\40\40\40\x20\x20"; } elseif ($_GET["\x70\x61\147\x65"] == "\x72\x65\x73\x65\164") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Setting / Reset</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
    </section>
    
    
       <?php  Load_Reset_Data(); } elseif ($_GET["\x70\x61\x67\145"] == "\152\141\144\x77\141\154\55\164\x65\x73\x74") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Jadwal Test</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
        <?php  Load_JadwalTest(); } elseif ($_GET["\160\x61\147\x65"] == "\x61\x63\x63\157\x75\x6e\x74") { ?>
    <?php  $username_err = $password_err = $confir_password_err = $nama_err = $email_err = $role_err = $foto_panitia_err = $simpan = ''; if (isset($_POST["\x75\160\x64\x61\x74\x65\x5f\x61\x64\x6d\x69\x6e"])) { if (empty(trim($_POST["\x75\163\x65\162\x6e\x61\x6d\x65"]))) { $username_err = "\x55\163\145\x72\156\141\155\x65\x20\x50\x61\156\151\x74\x69\141\x20\x74\151\x64\x61\x6b\x20\x62\x6f\154\145\x68\40\153\157\x73\x6f\156\x67"; } elseif (ValidateName($_POST["\165\x73\145\162\156\x61\x6d\145"])) { $username_err = "\x55\x73\x65\x72\x6e\141\155\145\x20\x68\141\156\x79\x61\x20\x62\157\x6c\145\x68\x20\153\141\162\141\x6b\x74\145\x72\x20\141\x6c\160\x68\141\x62\x65\x74"; } else { if (trim($_POST["\x75\x73\145\x72\x6e\141\155\145"]) != $admin_username) { if (CekUsername($_POST["\165\163\145\162\156\x61\x6d\145"])) { $username_err = "\115\x61\x61\x66\40\165\x73\x65\x72\x6e\x61\155\x65\40\164\x65\162\163\x65\x62\165\164\x20\163\x75\x64\141\150\x20\144\151\147\165\156\141\153\x61\x6e"; } else { $username = test_input($_POST["\165\163\145\x72\156\141\155\145"]); } } else { $username = test_input($_POST["\x75\x73\145\162\156\x61\155\145"]); $username = EscapeString($username); } } if (empty(trim($_POST["\160\141\x73\163\x77\x6f\162\x64"]))) { $password_err = "\x50\x61\163\163\167\x6f\x72\144\x20\x74\151\144\141\x6b\40\142\x6f\154\145\150\40\153\x6f\163\x6f\156\x67"; } elseif (strlen($_POST["\160\141\163\163\x77\157\x72\x64"]) < 6) { $password_err = "\120\141\x73\x73\x77\157\x72\144\x20\164\151\144\141\153\x20\x62\x6f\x6c\145\x68\x20\x6b\x75\x72\141\156\147\40\x64\x61\162\x69\40\66\x20\x6b\141\162\141\153\x61\164\x65\162"; } else { $password = trim($_POST["\x70\141\163\x73\x77\157\x72\x64"]); } if (empty(trim($_POST["\143\157\156\146\x69\162\x5f\x70\x61\163\163\167\x6f\162\144"]))) { $confir_password_err = "\113\x6f\156\x66\151\162\155\141\x73\x69\40\160\141\163\163\x77\x69\x72\144\40\164\x69\144\x61\153\40\x62\x6f\x6c\145\150\40\x6b\157\x73\157\x6e\x67"; } else { $confir_password = trim($_POST["\x63\157\156\146\151\x72\137\160\x61\163\x73\x77\x6f\162\144"]); if (empty($password_err) && $password != $confir_password) { $confir_password_err = "\x4b\x6f\156\146\151\x72\x6d\141\163\151\x20\x70\x61\163\163\167\x6f\162\144\40\164\x69\x64\x61\153\x20\x63\157\143\x6f\153"; } } if (empty(trim($_POST["\145\155\x61\x69\154"]))) { $email_err = "\x45\x6d\141\151\154\x20\164\151\144\x61\153\x20\142\x6f\154\x65\x68\40\153\157\x73\x6f\x6e\x67"; } elseif (!filter_var($_POST["\x65\155\x61\151\154"], FILTER_VALIDATE_EMAIL)) { $email_err = "\x46\157\x72\x6d\x61\164\40\160\x65\156\x75\154\151\x73\x61\x6e\40\145\155\x61\151\x6c\x20\x73\x61\154\141\x68"; } else { if (trim($_POST["\x65\x6d\x61\151\154"]) != $admin_email) { if (CekEmail($_POST["\145\155\x61\151\x6c"])) { $email_err = "\x4d\141\141\146\40\145\x6d\141\x69\x6c\x20\x74\x65\x72\163\x65\x62\x75\x74\x20\163\x75\x64\141\150\x20\144\151\147\165\x6e\x61\153\141\156"; } else { $email = test_input($_POST["\145\x6d\141\151\x6c"]); $email = EscapeString($email); } } else { $email = test_input($_POST["\145\155\141\x69\x6c"]); $email = EscapeString($email); } } if (empty(trim($_POST["\x6e\141\x6d\x61"]))) { $nama_err = "\116\x61\x6d\141\40\154\145\x6e\147\153\141\160\40\160\141\156\151\x74\151\141\x20\x74\x69\x64\x61\153\x20\x62\157\154\x65\150\x20\153\157\163\x6f\156\x67"; } else { $nama = test_input($_POST["\x6e\141\155\141"]); $nama = EscapeString($nama); } if (empty($_FILES["\x66\157\x74\x6f\137\x70\141\156\x69\x74\151\141"]["\164\155\x70\137\156\x61\155\x65"])) { $foto_panitia = $Admin_row["\146\157\x74\157\137\160\141\156\151\164\151\141"]; $FileItem = $foto_panitia; } else { $FileName = $_FILES["\x66\157\x74\x6f\137\160\141\x6e\151\x74\151\141"]["\x6e\x61\x6d\x65"]; $FileDir = $_FILES["\x66\157\164\157\137\160\141\156\151\x74\x69\x61"]["\x74\x6d\x70\137\x6e\141\x6d\145"]; $FileSize = $_FILES["\x66\157\164\157\137\160\x61\156\151\164\x69\x61"]["\163\x69\x7a\x65"]; $FileDestination = "\56\x2e\x2f\x69\155\x67\57"; $FileExtension = strtolower(pathinfo($FileName, PATHINFO_EXTENSION)); $FileValid = array("\x6a\160\145\x67", "\x6a\160\x67", "\160\156\x67"); $FileItem = $username . "\x2e" . $FileExtension; if (in_array($FileExtension, $FileValid)) { if ($FileSize > 150000) { $foto_panitia_err = "\106\157\x74\x6f\x20\160\141\156\x69\x74\151\141\x20\x74\x69\x64\141\x6b\40\142\157\154\145\150\x20\154\x65\x62\x69\150\x20\40\x64\x61\x72\151\x20\61\x35\60\x20\113\x42"; } else { $foto_panitia = $FileDir; } } else { $foto_panitia_err = "\115\x61\x61\x66\x20\x66\x6f\x72\155\141\x74\x20\146\157\x74\157\x20\150\141\x6e\x79\141\40\x62\157\x6c\145\150\x20\152\x70\147\x2c\40\152\x70\145\147\x20\x61\x74\x61\165\x20\x70\156\x67"; } } if (empty($username_err) && empty($password_err) && empty($confir_password_err) && empty($email_err) && empty($nama_err) && empty($foto_panitia_err)) { if (UpdateAdmin($username, $password, $email, $nama, $foto_panitia, $admin_uid)) { $_SESSION["\165\x73\145\x72\156\x61\155\x65"] = $username; $_SESSION["\145\155\141\151\x6c"] = $email; $_SESSION["\x6e\141\x6d\x61"] = $nama; $_SESSION["\x66\157\x74\157"] = $foto_panitia; $simpan = "\12\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\x20\40\40\xa\x20\40\40\40\40\40\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\40\40\40\40\40\74\x64\151\166\x20\x63\x6c\141\163\163\75\x22\x63\157\x6e\x74\x61\151\156\145\x72\x2d\146\x6c\165\151\x64\x20\155\164\x2d\x34\42\x3e\40\40\x20\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\40\40\x20\x20\xa\40\x20\40\x20\x20\x20\40\40\40\40\x20\40\40\x20\40\x20\x20\x20\40\40\40\x20\40\40\40\40\x20\40\x20\x20\40\40\74\x64\151\x76\x20\x63\154\x61\163\x73\75\x22\141\154\x65\162\x74\40\x61\165\55\141\154\x65\x72\x74\55\x73\165\143\143\x65\x73\163\x20\x61\154\145\162\164\x2d\x64\151\163\155\x69\x73\x73\x69\x62\154\x65\x20\146\x61\144\x65\40\163\x68\x6f\x77\40\141\165\55\141\x6c\145\x72\164\x20\141\x75\x2d\141\x6c\145\x72\x74\55\55\67\60\160\x65\162\42\x20\162\157\x6c\x65\x3d\42\x61\x6c\145\162\164\42\x3e\12\40\x20\x20\40\40\40\40\x20\x20\40\40\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\x20\x20\x3c\x69\x20\143\154\141\163\163\75\x22\x7a\155\x64\x69\x20\172\x6d\x64\151\55\143\150\x65\143\x6b\55\x63\151\x72\x63\154\x65\x22\x3e\74\x2f\x69\76\xa\40\x20\x20\x20\40\40\40\40\x20\x20\40\40\40\40\40\40\40\x20\x20\40\40\x20\40\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\40\74\x73\160\141\156\x20\x63\154\x61\x73\x73\75\42\x63\157\156\164\x65\x6e\164\42\76\x44\141\164\x61\x20\x41\x64\155\151\x6e\x20\x62\x65\162\x68\141\163\x69\154\x20\144\151\x70\145\162\x62\141\150\141\162\165\x69\74\57\163\x70\x61\x6e\x3e\xa\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\40\x20\x20\x3c\x62\165\x74\x74\x6f\x6e\40\143\x6c\x61\163\x73\75\42\x63\154\157\163\145\x22\40\x74\x79\x70\145\x3d\42\142\x75\x74\x74\157\156\42\40\x64\x61\x74\x61\55\x64\151\x73\155\x69\x73\163\x3d\x22\141\154\x65\x72\x74\x22\40\141\x72\151\x61\x2d\154\x61\x62\145\154\75\x22\x43\x6c\157\x73\x65\x22\x3e\xa\40\x20\40\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\40\40\x20\x20\74\163\160\x61\x6e\40\x61\162\151\141\55\x68\151\144\x64\x65\x6e\75\x22\x74\162\165\145\x22\x3e\xa\40\40\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\40\x20\40\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\40\40\40\40\x20\40\x20\x3c\151\40\x63\x6c\x61\x73\163\75\42\172\155\x64\x69\40\172\155\x64\151\55\143\x6c\157\163\145\x2d\143\151\162\x63\x6c\145\x22\x3e\x3c\57\151\x3e\xa\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x3c\x2f\x73\160\x61\156\x3e\xa\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\40\40\40\40\40\40\x20\x20\x20\x20\40\40\40\74\57\142\165\164\164\x6f\x6e\76\12\x20\40\x20\x20\40\40\x20\40\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x3c\57\x64\x69\x76\76\xa\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\40\40\74\x2f\x64\x69\166\x3e"; echo "\xa\40\x20\40\x20\x20\40\x20\40\40\40\40\40\40\40\40\40\40\x20\x20\x20\x20\74\x6d\x65\164\x61\40\x68\x74\x74\x70\x2d\x65\161\165\151\x76\75\x22\162\145\x66\x72\x65\163\x68\42\143\x6f\156\x74\145\156\164\75\42\x32\73\125\122\x4c\x3d\x3f\x70\x61\x67\145\x3d\141\x63\143\157\x75\x6e\164\42\40\57\x3e\xa\x20\40\40\x20\40\x20\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\x20\40"; } else { $simpan = "\74\x64\151\166\x20\x63\x6c\141\x73\163\75\x22\x63\x6f\x6e\164\141\151\156\145\162\x2d\146\154\x75\151\x64\40\155\164\55\64\x22\x3e\xa\40\x20\x20\40\x20\40\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\40\x20\40\40\40\74\x64\x69\166\40\x63\x6c\141\x73\163\75\42\141\x6c\145\x72\x74\x20\x61\154\x65\162\x74\x2d\144\141\x6e\x67\x65\162\40\141\154\145\162\x74\x2d\x64\151\x73\155\151\163\163\x69\142\154\x65\40\146\141\144\145\40\x73\x68\x6f\x77\42\40\162\x6f\154\145\x3d\42\141\154\x65\162\164\42\x3e\xa\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\40\x20\40\74\151\x20\x63\154\x61\163\x73\x3d\x22\x7a\x6d\144\x69\40\x7a\155\x64\x69\55\143\x6c\x6f\x73\x65\55\x63\151\162\143\154\145\42\76\74\57\x69\76\12\40\40\40\40\40\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\40\x20\x3c\x73\160\x61\x6e\40\x63\x6c\141\163\x73\75\x22\x63\157\x6e\x74\145\156\164\x22\x3e\104\x61\x74\141\x20\x67\141\147\141\154\x20\144\151\163\x69\x6d\160\141\x6e\56\x3c\x2f\x73\x70\141\156\76\12\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x3c\142\x75\x74\164\x6f\156\x20\143\154\x61\x73\163\x3d\42\143\154\157\163\x65\42\40\164\x79\x70\x65\75\42\142\x75\164\x74\x6f\156\42\40\144\141\x74\141\55\144\151\163\155\x69\x73\x73\75\42\x61\154\145\162\x74\x22\x20\141\x72\151\141\x2d\x6c\x61\x62\x65\154\x3d\x22\103\x6c\x6f\x73\x65\42\76\12\40\40\x20\40\40\x20\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\40\40\40\40\40\x20\40\40\40\40\x20\40\40\x20\x20\40\40\40\74\163\x70\x61\x6e\40\141\x72\151\141\55\150\x69\144\144\x65\156\75\42\164\162\165\145\x22\76\xa\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\40\40\40\40\x20\x20\40\x20\40\40\x20\40\40\x20\x20\x20\40\40\40\40\40\40\40\40\40\x20\40\40\x20\40\x20\x3c\x69\40\x63\x6c\x61\x73\x73\x3d\42\172\155\x64\151\x20\x7a\x6d\144\151\55\x63\x6c\157\x73\145\55\x63\x69\x72\143\154\x65\x22\76\74\x2f\x69\76\xa\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\40\x20\x20\40\40\x20\x20\x20\40\x3c\x2f\163\160\141\x6e\76\12\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\40\40\x20\40\40\40\40\74\57\x62\x75\x74\164\x6f\x6e\x3e\12\40\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\40\40\x20\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\x20\40\x20\x3c\57\x64\151\x76\x3e\xa\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\x20\x20\40\40\x20\40\40\x20\74\57\x64\151\166\76\xa\40\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20"; } } } ?>

   <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Account</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
     <?php  echo $simpan; ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-body">    
                                    <div class="float-right mt-3 mb-4">
                                     <img src="../img/<?php  echo $Admin_row["\x66\157\164\x6f\x5f\x70\141\x6e\151\x74\151\141"]; ?>
" width="60" height="80" class="img-fluid" alt="foto">
                                    </div>                                                               
                                           <div class="card-title">
                                                <h3 class="text-center title-2">Account Admin</h3>
                                            </div>

                                            <form action="<?php  echo htmlspecialchars(basename($_SERVER["\x52\105\121\x55\105\x53\124\x5f\x55\x52\x49"])); ?>
" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="username" class="control-label mb-1">Username</label>  
                                                    <input class="form-control" type="text" id="username" name="username" value="<?php  echo $admin_username; ?>
" required="" placeholder="Masukan username untuk panitia">
                                                    <span class="text-danger"><?php  echo $username_err; ?>
</span>               
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="password" class="control-label mb-1">Password</label>  
                                                            <input class="form-control" type="password" id="password" name="password" required="" placeholder="Masukan password">
                                                            <span class="text-danger"><?php  echo $password_err; ?>
</span>               
                                                        </div> 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="confir_password" class="control-label mb-1">Konfirmasi Password</label>  
                                                            <input class="form-control" type="password" id="confir_password" name="confir_password" required="" placeholder="Konfirmasi password">
                                                            <span class="text-danger"><?php  echo $confir_password_err; ?>
</span>               
                                                        </div> 
                                                    </div>
                                                </div>                                
                                                 <div class="form-group">
                                                    <label for="email" class="control-label mb-1">E-mail</label>  
                                                    <input class="form-control" type="text" id="email" name="email" value="<?php  echo $admin_email; ?>
" required="" placeholder="Masukan email">
                                                    <span class="text-danger"><?php  echo $email_err; ?>
</span>               
                                                </div> 
                                                 <div class="form-group">
                                                    <label for="nama" class="control-label mb-1">Nama Lengkap</label>  
                                                    <input class="form-control" type="text" id="nama" name="nama" value="<?php  echo $admin_nama; ?>
" required="" placeholder="Masukan nama lengkap panitia">
                                                    <span class="text-danger"><?php  echo $nama_err; ?>
</span>               
                                                </div>                                                    
                                                
                                                <div class="form-group">
                                                    <label for="foto_panitia" class="control-label mb-1">Foto</label>                 
                                                    <input class="form-control" type="file" id="foto_panitia" name="foto_panitia">
                                                    <span class="text-danger"><?php  echo $foto_panitia_err; ?>
</span>
                                                                   
                                                </div>                              
                                                <div class="form-group">
                                                    <button id="update_admin" name="update_admin" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-user-circle"></i>&nbsp;
                                                    <span id="update_admin">Simpan</span>
                                                    <span id="update_admin" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>
                                            </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<?php  } elseif ($_GET["\160\x61\x67\145"] == "\x72\145\x73\145\164\x2d\x70\x61\163\163") { ?>
    <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
        <div class="au-breadcrumb-left">
                    <span class="au-breadcrumb-span">You are here:</span>
                <ul class="list-unstyled list-inline au-breadcrumb__list">
            <li class="list-inline-item active">
                <a href="?page=dashboard">Home</a>
            </li>
            <li class="list-inline-item seprate">
            <span>/</span>
            </li>
            <li class="list-inline-item">Reset Password</li>
            </ul>
        </div>
                                           
        </div>
        </div>
        </div>
         </div>
        </div>
    </section> 
         <?php  if (!DataPendaftarDetail($_GET["\151\x64"])) { echo "\xa\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\74\144\151\166\40\143\154\141\x73\x73\x3d\x22\x63\157\x6e\x74\x61\151\x6e\145\x72\55\x66\x6c\165\x69\144\40\155\164\x2d\x34\42\x3e\12\x20\x20\40\x20\40\40\x20\x20\x20\40\40\x20\40\x20\40\x20\x3c\144\151\x76\40\143\154\141\x73\163\x3d\42\x61\x6c\x65\x72\x74\40\141\165\x2d\141\x6c\x65\x72\x74\x2d\x73\x75\143\x63\x65\163\163\40\141\154\x65\x72\x74\x2d\x64\151\x73\x6d\151\x73\x73\x69\x62\154\145\x20\146\x61\x64\x65\40\x73\x68\157\x77\40\x61\x75\55\141\x6c\x65\162\x74\x20\141\x75\x2d\141\x6c\145\162\164\x2d\x2d\x37\60\x70\145\x72\42\x20\162\157\154\145\75\42\141\x6c\x65\x72\x74\x22\x3e\12\x20\40\40\x20\x20\40\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\40\74\x69\40\143\154\x61\x73\x73\x3d\42\x7a\155\144\151\40\172\155\x64\x69\55\143\154\157\163\145\55\143\x69\x72\x63\154\x65\x22\x3e\74\57\151\x3e\12\x20\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\40\40\40\40\40\40\40\40\x20\40\74\163\160\x61\156\40\143\x6c\x61\x73\x73\75\x22\143\157\156\164\x65\x6e\164\x22\x3e\104\141\x74\141\x20\x74\151\x64\x61\x6b\40\144\151\164\145\x6d\165\153\x61\156\56\74\x2f\163\x70\141\x6e\76\xa\40\x20\40\40\40\x20\40\x20\40\40\x20\40\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\74\x62\x75\164\x74\157\156\x20\x63\154\141\163\x73\75\42\143\x6c\157\163\145\42\40\164\171\x70\145\x3d\x22\142\165\164\x74\157\156\x22\40\x64\141\164\141\55\144\x69\163\155\151\x73\x73\75\x22\x61\x6c\145\162\164\42\x20\x61\162\151\141\x2d\x6c\x61\x62\145\154\x3d\x22\103\154\x6f\163\145\x22\76\xa\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\40\40\40\x20\40\40\x20\x3c\163\x70\x61\x6e\x20\x61\x72\151\x61\55\x68\151\144\144\145\x6e\75\42\164\162\165\145\x22\x3e\12\40\40\40\x20\x20\40\40\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\x3c\x69\40\x63\154\141\163\163\75\42\x7a\x6d\x64\x69\40\x7a\155\x64\x69\x2d\x63\x6c\x6f\x73\145\x2d\x63\x69\x72\x63\154\145\x22\76\x3c\x2f\x69\76\12\40\40\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\74\x2f\x73\160\141\x6e\x3e\12\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\40\x20\x3c\x2f\142\x75\164\164\x6f\x6e\x3e\xa\x20\40\40\x20\40\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\74\57\144\151\166\x3e\12\40\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\74\57\144\151\x76\76\12\40\40\x20\40\x20\x20\x20\40\40\x20\x20\x20"; } else { Load_ResetPass(); } ?>
  
<?php  } elseif ($_GET["\x70\x61\x67\145"] == "\x6c\157\x67\157\165\x74") { ?>
     <div class="main-content">
        <div class="section__content section__content--p30">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                                   
                                    <div class="card-body">                                      
                                      <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                
                                        Anda berhasil logout.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        </div>                                           
                                       
                                    </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        <?php  UnsetDataUser(); } elseif ($_GET["\x70\141\147\x65"] == "\x70\x65\156\x67\141\164\165\162\x61\156\x20\x70\145\x6d\142\x61\171\141\162\x61\156") { ?>
    <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Pengaturan Pembayaran</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
     <?php  LoadUpdatePengaturanPembayaran(); } elseif ($_GET["\160\141\x67\x65"] == "\160\x61\x6e\144\165\x61\x6e") { ?>
      <section class="au-breadcrumb m-t-75">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="au-breadcrumb-content">
                                            <div class="au-breadcrumb-left">
                                                <span class="au-breadcrumb-span">You are here:</span>
                                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                    <li class="list-inline-item active">
                                                        <a href="?page=dashboard">Home</a>
                                                    </li>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <li class="list-inline-item">Panduan Aplikasi</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <div class="section__content section__content--p30 mt-4">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BxOQNLPduzI" allowfullscreen></iframe>
     </div>
     </div>
<?php  } else { ?>
    <?php  echo "\xa\11\x3c\155\145\x74\x61\x20\150\164\x74\x70\55\x65\x71\165\x69\166\x3d\42\162\x65\146\x72\x65\x73\150\42\143\x6f\x6e\164\x65\x6e\164\x3d\x22\60\x3b\125\x52\x4c\75\x69\x6e\144\x65\x78\56\160\150\160\x3f\160\x61\147\145\75\144\x61\x73\150\142\x6f\x61\x72\144\x22\x20\x2f\x3e\12\x9"; } goto BeyZd; PwvUR: if (AdministratorCek()) { die("\145\162\x72\157\x72"); } else { UserAktif(); $admin_uid = $DataUser[0]; $admin_username = $DataUser[1]; $admin_email = $DataUser[2]; $admin_nama = $DataUser[3]; $admin_role = $DataUser[4]; $admin_foto = $DataUser[5]; } goto N8FHI; TsgBF: ?>

<?php  goto mLQ05; hKkpZ: ?>
,<?php  goto D5ENG; qb7yo: head(); goto bMv21; c24cD: $AdminData->free_result(); goto hhUD0; JtXtn: echo $DashboardData["\152\155\154\137\x70\162\151\141"]; goto hKkpZ; UBlY1: require_once "\56\56\x2f\143\x6f\162\x65\x2f\146\x75\156\143\x74\x69\157\156\56\x70\x68\x70"; goto PwvUR; cLfWM: $Admin_row = $AdminData->fetch_array(); goto c24cD; tOKoX: require_once "\x2e\x2e\x2f\x2e\56\57\x63\157\156\146\x69\x67\x2f\x64\x61\x74\x61\142\141\x73\x65\56\160\150\160"; goto UBlY1; OxYR1: ?>

<?php  goto P3B2C; P3B2C: if (!isset($_GET["\x70\x61\147\x65"])) { $_GET["\160\141\x67\145"] = ''; } goto TsgBF; BeyZd: ?>

<?php  goto XF73B; D5ENG: echo $DashboardData["\x6a\155\154\137\x77\x61\156\x69\x74\141"]; goto PqCGb; iNDKQ: ?>
<script>
var ctx = document.getElementById("percent-chart93");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [<?php  goto JtXtn; hhUD0: ?>

<?php  goto qb7yo; N8FHI: $AdminData = AdminData($admin_uid); goto cLfWM; XF73B: footer(); goto iNDKQ; bMv21: css(); goto Z9JQg; e1K4u: session_start(); goto oAkWw; PqCGb: ?>
],
              backgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              hoverBackgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              borderWidth: [
                0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: [
            'Pria',
            'Wanita'
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false
          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16
          }
        }
      });
    }
</script>