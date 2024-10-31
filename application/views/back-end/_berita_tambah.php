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
            <div class="col-sm-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Berita</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/berita') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input name="judul" type="text" class="form-control" placeholder="Judul Berita" required="" style="width:50%;">
                  </div>
                  <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control ckeditor" placeholder="Isi Berita" rows="5" required=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" style="width:50%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti ( size 32 x 37 pixels ).</p>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?=base_url().'dashboard/berita' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
              </div>
              </form>
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
