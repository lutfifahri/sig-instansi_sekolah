

      <div class="col-sm-4 sidebar">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">List Lokasi</h3>
          </div>
          <div class="panel-body">
            <?php foreach ($l->result() as $r) { ?>
              <blockquote style="padding:0 10px;">
                <p><?=$r->nama ?></p>
                <footer><?=$r->alamat ?> <cite title="Source Title"><?=$r->telp ?></cite></footer>
              </blockquote>
            <?php } ?>
            <a class="btn btn-warning btn-flat" style="float:right;" href="<?=base_url().'web/lokasi' ?>"><i class="fa fa-eye"></i> View all location</a>
          </div>
        </div>

      </div>
      <!-- ./SIDEBAR -->

      <div class="col-sm-8 content">
        <div class="panel">
          <!-- <div class="panel-heading">
            <h3 class="panel-title">Peta Lokasi</h3>
          </div> -->
          <div class="panel-body" style="border:1px solid #ddd;padding: 0;">

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
        </div>
      </div>
      <!-- ./CONTENT -->

      <!-- <div class="col-sm-12 banner"> -->
        <!-- <img src=" echo base_url().'uploads/banners/no-banner-728x90.jpg' ?>"> -->
      <!-- </div> -->

      <div class="col-sm-12 top-footer">
        <div class="col-sm-4 left">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Berita Terbaru</h3>
            </div>
            <div class="panel-body">
            <?php
            foreach($bt->result() as $r){ ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="64">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h4>
                  <?=substr($r->isi_berita, 0,45)."..." ?>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4 center">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Berita Popular</h3>
            </div>
            <div class="panel-body">
            <?php
            foreach($bp->result() as $r){ ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="64">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h4>
                  <?=substr($r->isi_berita, 0,45)."..." ?>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4 right">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Contact</h3>
            </div>
            <div class="panel-body">
              <address>
                <strong>Alamat</strong><br>
                Jl. xxx Jambi<br>
                Kab. xxx - Kota xxx
              </address>

              <address>
                <abbr title="Phone">P :</abbr> (+62) xxxx<br>
                <abbr title="Phone">M :</abbr> <a href="mailto:#">xxx@gmail.com</a><br>
                <abbr title="Phone">W :</abbr> <a href="">http://xxx.com</a>
              </address>
            </div>
          </div>
        </div>
      </div><!-- ./ TOP-FOOTER -->
