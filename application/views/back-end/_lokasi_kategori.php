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
                  <h3 class="box-title">Tambah Kategori Lokasi</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/Lokasi_kategori') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Lokasi</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Lokasi" required="">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" placeholder="Keterangan" required="">
                  </div>
                  <div class="form-group">
                    <label>Ikon</label>
                    <input type="file" name="gambar" class="form-control" required="">
                    <p class="help-block">size 32 x 37 pixels</p>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                  <button name="update" type="reset" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Reset</button>
                </div>
              </div>
              </form>
              <!-- /.box -->
            </div>
            <div class="col-md-7">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Kategori Lokasi</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Nama Kategori</th>
                      <th>Keterangan</th>
                      <th>Icon</th>
                      <th width="15%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($k->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->nama_kategori ?></td>
                      <td><?=$r->keterangan ?></td>
                      <td><img src="<?=base_url().'uploads/icon/'.$r->ikon ?>"></td>
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_kategori_edit/'.$r->id ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_kategori_delete/'.$r->id ?>"><i class="fa fa-trash"></i> </a>
                      </div>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
