    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Cpanel</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
           <!--  <div class="col-sm-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Login Success!</h4>
                Selamat datang dihalaman Administrator.
              </div>
            </div> -->
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Peta Lokasi Instansi Sekolah & Universitas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj-hFGBMNwgXz91WdQn5O1N6mgxKJcX1U&callback=initMap"></script>

                  <script>

                    var marker;
                      function initialize() {

                    // Variabel untuk menyimpan informasi (desc)
                    var infoWindow = new google.maps.InfoWindow;

                    //  Variabel untuk menyimpan peta Roadmap
                    var mapOptions = {
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        }

                    // Pembuatan petanya
                    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                        // Variabel untuk menyimpan batas kordinat
                    var bounds = new google.maps.LatLngBounds();

                    // Pengambilan data dari database
                    <?php
                      $as = $this->db->query("SELECT l.id, l.nama, l.alamat, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi as l, kategori as k WHERE l.kategori=k.id");
                      foreach ($as->result() as $data) {
                        $nama   = $data->nama;
                        $alamat   = $data->alamat;
                        $lat    = $data->latittude;
                        $lon    = $data->longitude;
                        $icon   = $data->ikon;
                        ?>

                        var image = "<?php echo base_url().'uploads/icon/'.$icon ?> ";

                        <?php

                        echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");
                      }

                    ?>

                    // Proses membuat marker
                    function addMarker(lat, lng, info) {
                      var lokasi = new google.maps.LatLng(lat, lng);
                      bounds.extend(lokasi);

                      var marker = new google.maps.Marker({
                        map: map,
                        position: lokasi,
                        icon:image
                      });
                      map.fitBounds(bounds);
                      bindInfoWindow(marker, map, infoWindow, info);
                     }

                    // Menampilkan informasi pada masing-masing marker yang diklik
                        function bindInfoWindow(marker, map, infoWindow, html) {
                          google.maps.event.addListener(marker, 'click', function() {
                            infoWindow.setContent(html);
                            infoWindow.open(map, marker);
                          });
                        }

                        }
                      google.maps.event.addDomListener(window, 'load', initialize);

                  </script>
                  <div id="map-canvas" style="width: auto; height: 600px;"></div>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
