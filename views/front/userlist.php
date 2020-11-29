<?php $this->load->view('common/header'); ?>

<style>
#overflowTest {
height: 100%;
overflow: auto;
}
</style>
<div class="1container">
   <div class="row">
   
		<form action="<?php echo base_url('Home/dataAccess');?>" method="get">
			
			<div class="col-md-6 col-md-offset-3  col-xs-12 col-sm-12" >
				<div class="alert alert-info">
					<center><strong> Free Access Candidate Data </strong></center>
				</div>
			</div>
			
			<div class="col-md-3 col-md-offset-3 col-xs-12" >
				<label>Preferred Job</label>
				<input type="text" class="form-control alltags " name="designation"   placeholder="Keyword e.g. (Job Title, Description, Tags)">
				 
			</div>

			<div class="col-md-3 col-xs-12" >
				<label>Preferred Job Locations</label>
				 <input type="text" placeholder="Preferred Location" name="city" class="form-control city" >
				
			</div>
			<div class="col-md-1 col-xs-12" >
				<br>
				<button class="btn btn-primary pull-right" type="submit"><i class="fa fa-search"></i> search</button>
			</div>
		<form>
		
		<div class="col-md-12 col-sm-12 col-xs-12" id="overflowTest">
			  <br />
			  <br />	
					<?php if(@$userlist!='') {?>	
						<table id="myTable" class="table table-condensed responsive table_custom" cellspacing="0" width="100%">
						<thead>
						   <tr>
							  <th>User Id</th>
							  <th><strong>Candidate name</strong></th>
							  <th>Email</th>
							  <th width="25%">Profile Designation</th>
							  <th>Experience</th>
							  <th>Mobile</th>
							  <th>City</th>
							  <th>Resume</th>
						   </tr>
						</thead>
						<tbody>
						   <?php foreach(@$userlist as $value): ?>
						   <tr>
							  <td><?php echo $value->id ?></td>
							  <td><a style="color:green;" href="<?php echo base_url(); ?>home/getCandidateProfile/<?php echo $value->id ?>"><?php echo $value->username ?></a></td>
							  <td><?php echo $value->email ?></td>
							  <td><?php echo $value->designation ?></td>
							  <td><?php echo $value->exp ?></td>
							  <td><?php echo $value->mobileNo ?></td>
							  <td><?php echo $value->city ?></td>
							  <?php if($value->final_file!='') {?>
							    <td><a href="<?php echo base_url('assets/resume/'.$value->final_file)?>" style="color:blue">resume</td>
							  <?php }else{?>
							      <td><i class="fa fa-close" title="Resume not uploaded" style="color:red;"></i></td>
							  <?php }?>
						   </tr>
						   <?PHP endforeach; ?>
						</tbody> 
						
					 </table>
							
					<?php }else{ ?>
					
							<table id="table" class="table table-striped table-bordered" cellspacing="0" >
								<thead>
									<tr>
											<th><strong>Candidate name</strong></th>
                                            <th>Email</th>
                                            <th>Profile Designation</th>
                                            <th>Experience</th>
                                            <th>Mobile</th>
                                            <th>City</th>
                                            <th>Resume</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
								<tfoot>
									<tr>
										<th><strong>Candidate name</strong></th>
                                         <th>Email</th>
                                         <th>Profile Designation</th>
                                         <th>Experience</th>
                                         <th>Mobile</th>
                                         <th>City</th>
                                        <th>Resume</th>
									</tr>
								</tfoot>
							</table>
					
					<?php }?>
							
					
      </div>
   </div>
</div>

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>

 
<?php $this->load->view('front/city');?>
<?php $this->load->view('front/alltags');?>
<?php $this->load->view('common/footer'); ?>


<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

<script type="text/javascript">
var table;

   $(document).ready(function () {
			//datatables
		table = $('#table').DataTable({ 
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.

			// Load data for the table's content from an Ajax source
			"ajax": {
			"url": "<?php echo site_url('Home/studlIst555')?>",
			"type": "POST"
			},
			"dom": 'lBfrtip',
			   buttons: [
				'excel', 'csv', 'pdf', 'copy'
			   ],
			  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],

			//Set column definition initialisation properties.
			"columnDefs": [
			{ 
				"targets": [ -1 ], //last column
				"orderable": false, //set not orderable
			},
			],
		});
		
	
		
    });
    </script> 
