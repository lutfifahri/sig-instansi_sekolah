      <div class="col-sm-12 content" style="padding-right:10px;">
        <div class="panel">
          <div class="panel-body" style="padding:0;">

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1Wo4NQC0L4dzc9Cj6YybH-t0SRGr-EG8"
            type="text/javascript"></script>

            <div class="col-sm-12" style="margin-bottom:20px;padding:0;">
              <form class="form-inline" action="<?=base_url().'web/direction' ?>" method="POST">
                <input type="text" name='asal' class="form-control" placeholder="Alamat asal">
                <input type="text"  name='tujuan' class="form-control" placeholder="Alamat Yang dituju">
                <button type="submit" name="cari" class="btn btn-warning btn-flat"><i class="fa fa-map-marker"></i> Rute</button>
              </form>
            </div>
              
            <div class="col-sm-3" style="padding:0;">
              <div id="panel" style="width: auto;"></div>
            </div> 
            <div class="col-sm-9">
              <div id="map" style="width: 700px; height:500px;"></div>
            </div>
            

             <script type="text/javascript"> 

               var directionsService = new google.maps.DirectionsService();
               var directionsDisplay = new google.maps.DirectionsRenderer();

               var map = new google.maps.Map(document.getElementById('map'), {
                 zoom:10,
                 mapTypeId: google.maps.MapTypeId.ROADMAP
               });

               directionsDisplay.setMap(map);
               directionsDisplay.setPanel(document.getElementById('panel'));

               var request = {
                 origin: '<?=$saddr;?>', 
                 destination: '<?=$daddr;?>',
                 travelMode: google.maps.DirectionsTravelMode.DRIVING
               };

               directionsService.route(request, function(response, status) {
                 if (status == google.maps.DirectionsStatus.OK) {
                   directionsDisplay.setDirections(response);
                 }
               });
             </script>
          
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->

      
