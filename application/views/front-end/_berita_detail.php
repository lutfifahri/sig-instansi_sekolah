      

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
          <!-- <div class="panel-heading">
            <h3 class="panel-title">Berita</h3>
          </div> -->
          <div class="panel-body" style="padding:0;">
            <div class="detailberita">
                <h2 style="padding:0;margin:0;"><a href="<?=base_url().'web/beritadetail/'.$bo['id_berita'] ?>"><?=$bo['judul'] ?></a> </h2>
                <div class="well well-sm" style="margin-top:10px;padding:5px;">
                    <i class="fa fa-user"></i> By <?=$bo['penulis'] ?> | 
                    <i class="fa fa-calendar"></i> <?=$bo['tanggal'] ?> | 
                    <i class="fa fa-eye"></i> <?=$bo['dibaca'] ?> Kali
                </div>
                <img class="img-responsive img-thumbnail" src="<?=base_url().'uploads/berita/'.$bo['gambar'] ?>">
                <p><?=$bo['isi_berita'] ?>
            </div>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->