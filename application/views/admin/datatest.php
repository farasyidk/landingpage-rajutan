<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Table Data Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Batik
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-sm-5">

                        </div>

                        <div class="col-sm-4">
                              <a href="<?php echo base_url ("admin/testimoni");?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Tambah Barang</button> </a>
                        </div>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($testimoni as $u) :?>
                                    <tr class="odd gradeX">


                                        <td>  <img src="<?php echo base_url().'assets/images/uploads/';?><?php echo $u['gambar'] ?>" width="100"/><br><br></td>

                                        <td>
                                          <a href="<?php echo
                                              base_url('admin/ubah/'.$u['id']);?>">Edit</a> |
                                          <a href="<?php echo
                                              site_url('admin/delete2/'.$u['id']);?>">Hapus</a>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
