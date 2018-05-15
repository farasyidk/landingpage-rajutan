<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/vendor/morrisjs/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.css') ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->


        <script src="<?php echo base_url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') ?>"></script>
        <script src="<?php echo base_url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') ?>"></script>


</head>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login/aksi_login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="login"></input>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/vendor/raphael/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/morrisjs/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/data/morris-data.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js') ?>"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

    </body>

    </html>
