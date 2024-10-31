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
            <div class="col-sm-5">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Kategori Lokasi</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/Lokasi_kategori') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Lokasi</label>
                    <input name="id" type="hidden" value="<?=$l['id'] ?>">
                    <input name="nama" type="text" class="form-control" value="<?=$l['nama_kategori'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" value="<?=$l['keterangan'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Ikon</label>
                    <input type="file" name="gambar" class="form-control">
                    <p class="help-block">Kosongkan jika tidak ingin diganti ( size 32 x 37 pixels ).</p>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=base_url().'dashboard/Lokasi_kategori' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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
