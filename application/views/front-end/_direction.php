      

      <div class="col-sm-8 content" style="padding-right:10px;padding-top:0;">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Cari Rute (Direction)</h3>
          </div>
          <div class="panel-body" style="padding:0;">
            <form class="form-inline" action="<?=base_url().'web/direction' ?>" method="POST" style="padding:10px 0;">
              <input type="text" name='asal' class="form-control" placeholder="Alamat asal" required="">
              <input type="text"  name='tujuan' class="form-control" placeholder="Alamat Yang dituju" required="">
              <button type="submit" name="cari" class="btn btn-warning btn-flat"><i class="fa fa-map-marker"></i> Rute</button>
            </form>

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
                        $lat    = $data->latittude;
                        $lon    = $data->longitude;
                        
                        echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
                      }
                          ?>
                      
                    // Proses membuat marker 
                    function addMarker(lat, lng, info) {
                      var lokasi = new google.maps.LatLng(lat, lng);
                      bounds.extend(lokasi);
                      var image = "<?=base_url().'uploads/icon/townhouse.png' ?> ";
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

      
