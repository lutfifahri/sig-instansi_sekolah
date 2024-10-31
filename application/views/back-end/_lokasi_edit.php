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
            <div class="col-md-12">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Lokasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?=form_open('dashboard/lokasi') ?>
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input name="id" type="hidden" value="<?=$l['id'] ?>">
                  <input name="nama" type="text" class="form-control" value="<?=$l['nama'] ?>">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" class="form-control select2" style="width: 100%;">
                    <?php foreach ($k->result() as $r) {?>
                      <option value='<?php echo $r->id; ?>' <?php if($r->id==$l['kategori']){echo "selected";}; ?>><?php echo $r->nama_kategori; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"><?=$l['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input name="telp" type="text" class="form-control" value="<?=$l['telp'] ?>">
                </div>
                <div class="form-group">
                  <label>Latittude</label>
                  <input name="lat" type="text" class="form-control" value="<?=$l['latittude'] ?>">
                </div>
                <div class="form-group">
                  <label>Longitude</label>
                  <input name="long" type="text" class="form-control" value="<?=$l['longitude'] ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=base_url().'dashboard/lokasi' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
