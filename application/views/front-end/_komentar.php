      <div class="col-sm-4 sidebar" style="padding-right: 20px;">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Komentar Terbaru</h3>
          </div>
          <div class="panel-body">
            <?php foreach ($k->result() as $r) { ?>
              <blockquote style="padding:0 10px;">
                <p><?=$r->nama ?></p>
                <footer><?=$r->komentar ?> <cite title="Source Title"></cite></footer>
              </blockquote>
            <?php } ?>
          </div>
        </div>

      </div>
      <!-- ./SIDEBAR -->

      <div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Peta Lokasi</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="<?=base_url().'web/komentar'?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Anda</label>
                <div class="col-sm-10">
                  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" placeholder="Email" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Website</label>
                <div class="col-sm-10">
                  <input name="website" type="text" class="form-control" placeholder="http://" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Isi Komentar</label>
                <div class="col-sm-10">
                  <textarea name="komentar" class="form-control" placeholder="Masukan komentar anda disini!" required=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button name="kirim" type="submit" class="btn btn-primary btn-flat"><i class="fa  fa-paper-plane-o"></i> Kirim Komentar</button>
                  <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-retweet"></i> Batal</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->

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
                Jl. Benteng Raya, Kel. Benteng, Kec. Wara 91921<br>
                Kab. Luwu - Kota Palopo
              </address>

              <address>
                <abbr title="Phone">P :</abbr> (+62) 85396 244441<br>
                <abbr title="Phone">M :</abbr> <a href="mailto:#">aliakbaruncp@gmail.com</a><br>
                <abbr title="Phone">W :</abbr> <a href="http://akbardesign.org">http://akbardesign.org</a>
              </address>
            </div>
          </div>
        </div>
      </div><!-- ./ TOP-FOOTER -->
