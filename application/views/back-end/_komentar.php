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
                  <h3 class="box-title">Daftar Komentar</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th width="20%">Nama</th>
                      <th width="15%">Email</th>
                      <th width="15%">Website</th>
                      <th width="40%">Isi Komentar</th>
                      <th width="10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($k->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->nama ?></td>
                      <td><?=$r->email ?></td>
                      <td><?php if($r->website!=NULL){echo $r->website;}else{echo "-";} ?></td>
                      <td><?=$r->komentar ?></td>
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" onclick="alert('Maaf, komentar tidak dapat diedit!')" href="#"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/komentar_delete/'.$r->id_komentar ?>"><i class="fa fa-trash"></i> </a>
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
