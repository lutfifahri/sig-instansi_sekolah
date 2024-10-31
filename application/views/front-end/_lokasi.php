      

      <div class="col-sm-4 sidebar" style="padding-right:20px;">
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
      <!-- ./SIDEBAR -->

      <div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Lokasi</h3>
          </div>
          <div class="panel-body" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th width="25%">Nama Hotel</th>
                    <th>Alamat</th>
                    <th width="10%">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($la->result() as $r){ ?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$r->nama ?></td>
                    <td><?=$r->alamat ?></td>
                    <td>
                    <div class="btn-group">
                    <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'web/lokasi_one/'.$r->id ?>"><i class="fa fa-map-o"></i> View Map</a>
                    </div>
                    </td>
                </tr>
                <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->