<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');?>
	<?php $this->load->view('layout/styles');?>
    <style>
        table.dataTable {
            width: auto;
        }
        table.dataTable {
            width: 100%;
            display: block;
            max-height:300px;
            overflow: auto;
        }
        table.dataTable th, table.dataTable td{
            white-space: nowrap;
        }
        .dataTables_filter,.pagination {
            float:right;
        }
    </style>
</head>
<body>
    <a href="<?php echo base_url();?>dashboard">Dashboard</a>
    <a href="<?php echo base_url();?>leads">Leads</a>
    <a href="<?php echo base_url();?>logout">Logout</a>
    <h4 style="text-transform: capitalize;">Welcome <?php echo $this->session->userdata('username'); ?></h4>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Enq Code</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Quantity</th>
                            <th>Message</th>
                            <th>Created On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //print_r($leads); ?>
                        <?php  if(empty($leads)) { } else { ?> 
                        <?php $idnumbers='0' ; foreach($leads as $leads_list) { $idnumbers++ ?>
                            <tr>
                                <td><?php echo $idnumbers; ?></td>
                                <td><?php echo $leads_list['seo_leads_enqcode']; ?></td>
                                <td><?php echo $leads_list['seo_leads_name']; ?></td>
                                <td><?php echo $leads_list['seo_leads_emial']; ?></td>
                                <td><?php echo $leads_list['seo_leads_contact']; ?></td>
                                <td><?php echo $leads_list['seo_leads_location']; ?></td>
                                <td><?php echo $leads_list['seo_leads_quantity']; ?></td>
                                <td><?php echo $leads_list['seo_leads_message']; ?></td>
                                <td><?php echo $leads_list['seo_created_on']; ?></td>
                            </tr>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <script>
       $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: '<?php echo Domain; ?>-Leads'
                    }
                ]
            });
            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        });
    </script>
    <!--  End JavaScript -->
</body>
</html>