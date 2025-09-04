<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>
<body>
    <a href="<?php echo base_url();?>dashboard">Dashboard</a>
    <a href="<?php echo base_url();?>leads">Leads</a>
    <a href="<?php echo base_url();?>logout">Logout</a>
    <h4 style="text-transform: capitalize;">Welcome <?php echo $this->session->userdata('username'); ?></h4>
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <!--  End JavaScript -->
</body>
</html>