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
                  <h3 class="box-title">Daftar Berita</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th width="55%">Judul</th>
                      <th width="15%">Tgl. Posting</th>
                      <th width="10%">Penulis</th>
                      <th width="10%">Dibaca</th>
                      <th width="10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($b->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->judul ?></td>
                      <td><?=$r->tanggal ?></td>
                      <td><?=$r->penulis ?></td>
                      <td><?=$r->dibaca ?></td>
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/berita_edit/'.$r->id_berita ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/berita_delete/'.$r->id_berita ?>"><i class="fa fa-trash"></i> </a>
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
