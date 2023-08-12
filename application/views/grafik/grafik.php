
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan<small>Kuisioner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="ion ion-stats-bars"></i> Laporan</a></li>
      </ol>
    </section>
    <?php 
      $bulan = 
        array(
        '1'=>'Januari',
        '2'=>'Februari',
        '3'=>'Maret',
        '4'=>'April',
        '5'=>'Mei',
        '6'=>'Juni',
        '7'=>'Juli',
        '8'=>'Agustus',
        '9'=>'September',
        '10'=>'Oktober',
        '11'=>'November',
        '12'=>'Desember',
        )?>    
  <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-file-pdf-o"></i>&nbsp; Unduh File pdf</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-file-excel-o"></i>&nbsp; Unduh File Excel</a></li>
              <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-chart"></i>&nbsp; Grafik</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                  
      <form method="post" action="<?php echo base_url('grafik/cetakpdf')?>" charset='UTF-8' class="form-horizontal form-label-left" style="margin-top: 20px" novalidate>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Bulan<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="bulan" required="">
                <option value="empty">Pilih Bulan</option>
                <?php for ($i=1; $i <= count($bulan) ; $i++) {  
                  echo "<option value='$i'>$bulan[$i]</option>";
                } ?>
              </select>
            </div>
          </div>

          <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Tahun<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="tahun" required="">
                <option value="empty">Pilih Tahun</option>
                <?php for ($i=2016; $i <= 2050 ; $i++) {  
                  echo "<option value='$i'>$i</option>";
                } ?>
              </select>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="cari" name="cari" type="submit" class="btn btn-danger"><i class="fa fa-print"></i>&nbsp; Unduh PDF</button>
            </div>
          </div>
      </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form method="post" action="<?php echo base_url('grafik/cetakexcel')?>" charset='UTF-8' class="form-horizontal form-label-left" style="margin-top: 20px" novalidate>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Bulan<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="bulan" required="">
                <option value="empty">Pilih Bulan</option>
                <?php for ($i=1; $i <= count($bulan) ; $i++) {  
                  echo "<option value='$i'>$bulan[$i]</option>";
                } ?>
              </select>
            </div>
          </div>

          <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Tahun<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="tahun" required="">
                <option value="empty">Pilih Tahun</option>
                <?php for ($i=2016; $i <= 2050 ; $i++) {  
                  echo "<option value='$i'>$i</option>";
                } ?>
              </select>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="cari" name="cari" type="submit" class="btn btn-success"><i class="fa fa-print"></i>&nbsp; Unduh Excel</button>
            </div>
          </div>
      </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <form method="post" action="#" charset='UTF-8' class="form-horizontal form-label-left" style="margin-top: 20px" novalidate>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Bulan<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="bulan" required="">
                <option value="empty">Pilih Bulan</option>
                <?php for ($i=1; $i <= count($bulan) ; $i++) {  
                  echo "<option value='$i'>$bulan[$i]</option>";
                } ?>
              </select>
            </div>
          </div>

          <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Tahun<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="tahun" required="">
                <option value="empty">Pilih Tahun</option>
                <?php for ($i=2016; $i <= 2050 ; $i++) {  
                  echo "<option value='$i'>$i</option>";
                } ?>
              </select>
            </div>
          </div>

           <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Filter<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="filter" name="filter" required="">
                <option value="empty">Pilih Filter</option>
                <option value='jenis kelamin'>Berdasarkan Jenis Kelamin</option>
                <option value='pendidikan'>Berdasarkan Pendidikan</option>
                <option value='pekerjaan'>Berdasarkan Pekerjaan</option>
                <option value='usia'>Berdasarkan Usia</option>
              </select>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="cari" name="cari" type="submit" class="btn btn-primary" disabled="true"><i class="fa fa-print"></i>&nbsp; Lihat Grafik</button>
            </div>
          </div>
      </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
        </div>
        <!--row-->
    </section>

 <?php 
      if(isset($_REQUEST['cari'])){
          $bulan = bulan($_REQUEST['bulan']);
          $tahun = $_REQUEST['tahun'];
          if($_REQUEST['bulan'] == "empty" || $_REQUEST['tahun'] == "empty" || $_REQUEST['filter'] == "empty"){
            echo "<script>alert('tidak boleh kosong')</script>";
          }else{
        ?>
           
          
              <?php $respon = array(); $value = array();
             
            //filter berdasarkan jenis kelamin
              if($_REQUEST['filter'] == 'jenis kelamin'){
                $report =  
                 $this->db->query("
                  SELECT 
                    laki, perempuan , t_responden FROM
                  (
                    SELECT su.sub_unit, r.id, 
                    SUM(IF(r.JENIS_KELAMIN='Laki-Laki',1,0)) AS laki, 
                    SUM(IF(r.JENIS_KELAMIN='Perempuan',1,0)) AS perempuan 
                    
                    FROM detail_survey d
                    INNER JOIN t_responden s on s.id = d.id
                    where month(j.tanggal_survei) = '$_REQUEST[bulan]' and year(j.tanggal_survei)
                    = '$_REQUEST[tahun]' GROUP BY r.id, d.no_soal) 
                    as s GROUP BY id");
                    
                    if($report->num_rows() == 0){
                      echo "<script>alert('laporan untuk bulan $bulan $tahun tidak ada')</script>";
                    }else{
                      /* Mengambil query report*/
                      foreach($report->result() as $result ){
                          $respon[] = $result->t_responden;
                          $laki[] = (int)$result->laki;
                          $perempuan[] = (int)$result->perempuan;
                      /* end mengambil query*/             
                      }
                      ?>
                      <script type="text/javascript">
                      $(function () {
                      Highcharts.setOptions({
                          chart: {
                              backgroundColor: {
                                  linearGradient: [0, 0, 500, 500],
                                  stops: [
                                      [0, 'rgb(255, 255, 255)'],
                                      [1, 'rgb(240, 240, 255)']
                                      ]
                              },
                              borderWidth: 2,
                              borderHeight: 5,
                              plotBackgroundColor: 'rgba(255, 255, 255, .9)',
                              plotShadow: true,
                              plotBorderWidth: 1,
                          }
                      });
                        
                      $('#container').highcharts({
                          chart: {
                              type: 'column',
                              options3d: {
                              }
                          },
                          title: {
                                  text: 'Laporan Bulan <?php echo $bulan.' '.$tahun ;?>',
                                  style: {
                                          fontSize: '18px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                              subtitle: {
                                 text: 'Jumlah Responden Berdasarkan Jenis Kelamin',
                                 style: {
                                          fontSize: '15px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                          xAxis: {
                              categories: <?php echo json_encode($respon);?>
                          },

                          yAxis: {
                              allowDecimals: false,
                              min: 0,
                              title: {
                                  text: 'Jumlah'
                              }
                          },

                          tooltip: {
                              headerFormat: '<b>{point.key}</b><br>',
                              pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
                          },
                          plotOptions: {
                              column: {
                                  stacking: 'normal',
                                  depth: 40
                              }
                          },
                          series: [{
                              name: 'Laki-Laki',
                              data: <?php echo json_encode($laki)?>,
                              stack: 'male'
                          }, {
                              name: 'Perempuan',
                              data: <?php echo json_encode($perempuan)?>,
                              stack: 'male'
                          }]
                      });
                  });
                      </script>

                    <?php }
              }else if($_REQUEST['filter'] == 'pendidikan'){
                $report =  
                 $this->db->query("
                  SELECT 
                    sd, smp, sma, s1, s2, s3, t_responden FROM
                  (
                    SELECT su.t_responden, r.id, 
                    SUM(IF(r.PENDIDIKAN_TERAKHIR='SD ke bawah',1,0)) AS sd, 
                    SUM(IF(r.PENDIDIKAN_TERAKHIR='SMP',1,0)) AS smp, 
                    SUM(IF(r.PENDIDIKAN_TERAKHIR='SMA',1,0)) AS sma, 
                    SUM(IF(r.PENDIDIKAN_TERAKHIR='S1',1,0)) AS s1, 
                    SUM(IF(r.PENDIDIKAN_TERAKHIR='S2',1,0)) AS s2, 
                    SUM(IF(r.PENDIDIKAN_TERAKHIR='S3',1,0)) AS s3, 
                   
                    
                    FROM detail_survey d
                    INNER JOIN t_responden s on s.id = d.id_survey
                    where month(j.tanggal_survei) = '$_REQUEST[bulan]' and year(j.tanggal_survei)
                    = '$_REQUEST[tahun]' GROUP BY r.id, d.no_soal) 
                    as s GROUP BY id");
                    
                    // echo $report->num_rows();
                    if($report->num_rows() == 0){
                      echo "<script>alert('laporan untuk bulan $bulan $tahun tidak ada')</script>";
                    }else{
                      /* Mengambil query report*/
                      foreach($report->result() as $result ){
                          $respon[] = $result->t_responden;
                          $sd[] = (int)$result->sd;
                          $smp[] = (int)$result->smp;
                          $sma[] = (int)$result->sma;
                          $s1[] = (int)$result->s1;
                          $s2[] = (int)$result->s2;
                          $s3[] = (int)$result->s3;
                      /* end mengambil query*/             
                      }?>
                      <script type="text/javascript">
                      $(function () {
                      Highcharts.setOptions({
                          chart: {
                              backgroundColor: {
                                  linearGradient: [0, 0, 500, 500],
                                  stops: [
                                      [0, 'rgb(255, 255, 255)'],
                                      [1, 'rgb(240, 240, 255)']
                                      ]
                              },
                              borderWidth: 2,
                              borderHeight: 5,
                              plotBackgroundColor: 'rgba(255, 255, 255, .9)',
                              plotShadow: true,
                              plotBorderWidth: 1,
                          }
                      });
                        
                      $('#container').highcharts({
                          chart: {
                              type: 'column',
                              options3d: {
                                  // enabled: true,
                                  // alpha: 15,
                                  // beta: 15,
                                  // viewDistance: 25,
                                  // depth: 40
                              }
                          },
                          title: {
                                  text: 'Laporan Bulan <?php echo $bulan.' '.$tahun ;?>',
                                  style: {
                                          fontSize: '18px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                              subtitle: {
                                 text: 'Jumlah Responden Berdasarkan Pendidikan',
                                 style: {
                                          fontSize: '15px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                          xAxis: {
                              categories: <?php echo json_encode($respon);?>
                          },

                          yAxis: {
                              allowDecimals: false,
                              min: 0,
                              title: {
                                  text: 'Jumlah'
                              }
                          },

                          tooltip: {
                              headerFormat: '<b>{point.key}</b><br>',
                              pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
                          },
                          plotOptions: {
                              column: {
                                  stacking: 'normal',
                                  depth: 40
                              }
                          },
                          series: [{
                              name: 'SD ke bawah',
                              data: <?php echo json_encode($sd)?>,
                              stack: 'male'
                          },{
                              name: 'SMP',
                              data: <?php echo json_encode($smp)?>,
                              stack: 'male'
                          },{
                              name: 'SMA',
                              data: <?php echo json_encode($sma)?>,
                              stack: 'male'
                          },{
                              name: 'S1',
                              data: <?php echo json_encode($s1)?>,
                              stack: 'male'
                          },{
                              name: 'S2',
                              data: <?php echo json_encode($s2)?>,
                              stack: 'male'
                          },{
                              name: 'S3',
                              data: <?php echo json_encode($s3)?>,
                              stack: 'male'
                          }]
                      });
                  });
                      </script>
                  <?php }
              }else if($_REQUEST['filter'] == 'pekerjaan'){
                $report =  
                 $this->db->query("
                  SELECT 
                    pns, tni, polri, wiraswasta, buruh, lain, t_responden FROM
                  (
                   SELECT su.t_responden, r.id,  
                    SUM(IF(r.PEKERJAAN='PNS',1,0)) AS pns, 
                    SUM(IF(r.PEKERJAAN='TNI',1,0)) AS tni, 
                    SUM(IF(r.PEKERJAAN='POLRI',1,0)) AS polri, 
                    SUM(IF(r.PEKERJAAN='Wiraswasta',1,0)) AS wiraswasta, 
                    SUM(IF(r.PEKERJAAN='Buruh',1,0)) AS buruh, 
                    SUM(IF(r.PEKERJAAN='Lainnya',1,0)) AS lain 
                    
                    FROM detail_survey d
                    INNER JOIN t_responden s on s.id = d.id_survey
                    where month(j.tanggal_survei) = '$_REQUEST[bulan]' and year(j.tanggal_survei)
                    = '$_REQUEST[tahun]' GROUP BY r.id, d.no_soal) 
                    as s GROUP BY id");
                    
                    // echo $report->num_rows();
                    if($report->num_rows() == 0){
                      echo "<script>alert('laporan untuk bulan $bulan $tahun tidak ada')</script>";
                    }else{
                      /* Mengambil query report*/
                      foreach($report->result() as $result ){
                          $respon[] = $result->t_responden;
                          $pns[] = (int)$result->pns;
                          $tni[] = (int)$result->tni;
                          $polri[] = (int)$result->polri;
                          $wiraswasta[] = (int)$result->wiraswasta;
                          $buruh[] = (int)$result->buruh;
                          $lain[] = (int)$result->lain;
                      /* end mengambil query*/             
                      }?>
                      <script type="text/javascript">
                      $(function () {
                      Highcharts.setOptions({
                          chart: {
                              backgroundColor: {
                                  linearGradient: [0, 0, 500, 500],
                                  stops: [
                                      [0, 'rgb(255, 255, 255)'],
                                      [1, 'rgb(240, 240, 255)']
                                      ]
                              },
                              borderWidth: 2,
                              borderHeight: 5,
                              plotBackgroundColor: 'rgba(255, 255, 255, .9)',
                              plotShadow: true,
                              plotBorderWidth: 1,
                          }
                      });                        
                      $('#container').highcharts({
                          chart: {
                              type: 'column',
                              options3d: {
                              }
                          },
                          title: {
                                  text: 'Laporan Bulan <?php echo $bulan.' '.$tahun ;?>',
                                  style: {
                                          fontSize: '18px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                              subtitle: {
                                 text: 'Jumlah Responden Berdasarkan Pekerjaan',
                                 style: {
                                          fontSize: '15px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                          xAxis: {
                              categories: <?php echo json_encode($respon);?>
                          },
                          yAxis: {
                              allowDecimals: false,
                              min: 0,
                              title: {
                                  text: 'Jumlah'
                              }
                          },
                          tooltip: {
                              headerFormat: '<b>{point.key}</b><br>',
                              pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
                          },
                          plotOptions: {
                              column: {
                                  stacking: 'normal',
                                  depth: 40
                              }
                          },
                          series: [{
                              name: 'PNS',
                              data: <?php echo json_encode($pns)?>,
                              stack: 'male'
                          },{
                              name: 'TNI',
                              data: <?php echo json_encode($tni)?>,
                              stack: 'male'
                          },{
                              name: 'POLRI',
                              data: <?php echo json_encode($polri)?>,
                              stack: 'male'
                          },{
                              name: 'Wiraswasta',
                              data: <?php echo json_encode($wiraswasta)?>,
                              stack: 'male'
                          },{
                              name: 'Buruh',
                              data: <?php echo json_encode($buruh)?>,
                              stack: 'male'
                          },{
                              name: 'Lainnya',
                              data: <?php echo json_encode($lain)?>,
                              stack: 'male'
                          }]
                      });
                  });
                      </script>
                <?php }
              }else if($_REQUEST['filter'] == 'usia'){
                       $report =  
                core::manualQuery("
                  SELECT 
                    remaja, dewasa, tua, sub_unit FROM
                  (
                    SELECT su.t_responden, r.id, 
                    SUM(IF(r.USIA >=17 and r.USIA <= 30,1,0)) AS remaja, 
                    SUM(IF(r.USIA >=31 and r.USIA <= 50,1,0)) AS dewasa, 
                    SUM(IF(r.USIA >=51 and r.USIA <= 90,1,0)) AS lansia 
                    
                    FROM detail_survey d
                    INNER JOIN t_responden s on s.id = d.id_survey
                    where month(j.tanggal_survei) = '$_REQUEST[bulan]' and year(j.tanggal_survei)
                    = '$_REQUEST[tahun]' GROUP BY r.id, d.no_soal) 
                    as s GROUP BY id");
               
                    if($report->num_rows() == 0){
                      echo "<script>alert('laporan untuk bulan $bulan $tahun tidak ada')</script>";
                    }else{
                      /* Mengambil query report*/
                      foreach($report->result() as $result ){
                          $respon[] = $result->t_responden;
                          $remaja[] = (int)$result->remaja;
                          $dewasa[] = (int)$result->dewasa;
                          $tua[] = (int)$result->lansia;
                      /* end mengambil query*/             
                      }?>
                      <script type="text/javascript">
                      $(function () {
                      Highcharts.setOptions({
                          chart: {
                              backgroundColor: {
                                  linearGradient: [0, 0, 500, 500],
                                  stops: [
                                      [0, 'rgb(255, 255, 255)'],
                                      [1, 'rgb(240, 240, 255)']
                                      ]
                              },
                              borderWidth: 2,
                              borderHeight: 5,
                              plotBackgroundColor: 'rgba(255, 255, 255, .9)',
                              plotShadow: true,
                              plotBorderWidth: 1,
                          }
                      });                        
                      $('#container').highcharts({
                          chart: {
                              type: 'column',
                              options3d: {
                              }
                          },
                          title: {
                                  text: 'Laporan Bulan <?php echo $bulan.' '.$tahun ;?>',
                                  style: {
                                          fontSize: '18px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                              subtitle: {
                                 text: 'Jumlah Responden Berdasarkan Usia',
                                 style: {
                                          fontSize: '15px',
                                          fontFamily: 'Verdana, sans-serif'
                                  }
                              },
                          xAxis: {
                              categories: <?php echo json_encode($respon);?>
                          },

                          yAxis: {
                              allowDecimals: false,
                              min: 0,
                              title: {
                                  text: 'Jumlah'
                              }
                          },

                          tooltip: {
                              headerFormat: '<b>{point.key}</b><br>',
                              pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
                          },
                          plotOptions: {
                              column: {
                                  stacking: 'normal',
                                  depth: 40
                              }
                          },
                          series: [{
                              name: 'USIA 17-30',
                              data: <?php echo json_encode($remaja)?>,
                              stack: 'male'
                          },{
                              name: 'USIA 31-50',
                              data: <?php echo json_encode($dewasa)?>,
                              stack: 'male'
                          },{
                              name: 'USIA 51-90',
                              data: <?php echo json_encode($lansia)?>,
                              stack: 'male'
                          }]
                      });
                  });
                      </script>
                    <?php }
              }else{
                echo "gagal";
              }
              ?>
                
        <?php 
              }
            }
        else{

            }
        ?>
</div>



