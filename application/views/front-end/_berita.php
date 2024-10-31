      

      <div class="col-sm-4 sidebar" style="padding-right: 20px;">
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
            <h3 class="panel-title">Berita</h3>
          </div>
          <?php foreach($ab->result() as $r){ ?>
          <div class="panel-body" style="margin-top:10px;">
            <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object img-thumbnail" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="200">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h3>
                  <div class="well well-sm">
                    <i class="fa fa-user"></i> By <?=$r->penulis ?> | 
                    <i class="fa fa-calendar"></i> <?=$r->tanggal ?> | 
                    <i class="fa fa-eye"></i> <?=$r->dibaca ?> Kali
                  </div>
                  <?=substr($r->isi_berita, 0,250)."..." ?><p>
                <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>" class="btn btn-success btn-sm btn-flat" style="float:left;"><i class="fa fa-angle-double-right"></i> Read More</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- ./CONTENT -->