<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form class="form-horizontal" id="login_form" method="post" enctype="multipart/form-data">
                    <?php if(empty($error)) { } else{ echo($error); } ?>
                    <div class="form-group row">
                        <div class="col-12">
                            <label> Username : </label>
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label> Password : </label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="btn btn-block btn-primary" name="submit" type="submit" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <!--  End JavaScript -->
</body>
</html>