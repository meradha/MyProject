<section id="middle">
   <!-- page title -->
   <header id="page-header">
      <h1>Course</h1>
      <ol class="breadcrumb">
         <br>
         <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">course</li>
      </ol>
   </header>
   <!-- /page title -->
   	<div id="content" class="padding-20">
		<div id="panel-1" class="panel panel-default viewCource">
			<div class="panel-heading">
				<span class="title elipsis">
					<strong>course Details</strong> 
				</span>
				<div class="pull-right box-tools">
					<?php
					foreach($getAllTabAsPerRole as $role)
					{
						if($this->uri->segment(1) == $role->controller_name && $role->userAdd == '1')
						{
						?>
						<a href="javascript:;" onclick="addCourseViewPage()" class="btn btn-info btn-sm">Add New</a>              
						<?php
						}
					}
					?>                    
				</div>           
			</div>

		    <!-- panel content -->
		    <div class="panel-body">
				<div id="msg_div">
				  <?php echo $this->session->flashdata('message');?>
				</div>
			  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
			        <thead>
			            <tr>
			                <th>S No</th>
			                <th>Short Name</th>
			                <th>Full Name</th>
			                <th>Created Date</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>

				        <?php 
				             $sn=1;
				        foreach ($courseDetail as $res) {
				       ?>
				         <input type="hidden" name="id" id="id" value="<?php echo $res->cid;?>"> 
			            <tr class="odd gradeX">
			                <td><?php echo $sn?></td>
			                <td><?php echo $res->cshort;?></td>
			                <td><?php echo $res->cfull;?></td>
			                <td><?php echo $res->cdate;?></td>
			                <td style="text-align: center;">
			                	<a href="javascript:;" onclick="editCourseViewPage(<?php echo htmlentities($res->cid); ?>);"><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;
			                    <a href="view-course.php?del=<?php echo htmlentities($res->cid); ?>"> <p class="fa fa-times-circle"></p>
			                </td>
			            </tr>
			            
					    <?php $sn++;
					    }
					    ?>   	           
			        </tbody> 
			    </table>
			</div>
			<!-- /.table-responsive -->
		</div>
	<!-- /.panel-body -->
	
	<!-- /.panel -->
  		<div class="row addCource" style="display: none">
	     <div class="col-md-12">
	        <div class="panel panel-default">
	           <div class="panel-heading panel-heading-transparent">
	              <strong>Add Course</strong>
	              <div class="pull-right box-tools">
	                 <a href="<?php echo base_url();?>course" class="btn btn-teal btn-sm">Back</a>                           
	              </div>
	           </div>
	           <div class="panel-body">
		           	<form method="post" enctype="multipart/form-data" data-success="Sent! Thank you!">
		           		<div class="row">
			                <div class="col-lg-10">
			                    <div class="form-group">
			                       <div class="col-lg-4">
			                          <label>Course Short Name<span id="" style="font-size:11px;color:red">*</span>	</label>
			                       </div>
			                       <div class="col-lg-6">
			                          <input class="form-control" name="cshort" required   value="<?php echo set_value('cshort'); ?>" type="text"> 			
			                       </div>
			                    </div>
			                    <br><br>
			                    <div class="form-group">
			                       <div class="col-lg-4">
			                          <label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
			                       </div>
			                       <div class="col-lg-6">
			                          <input class="form-control" name="cfull" required type="text">   
			                       </div>
			                    </div>
			                    <br><br>								
			                    <div class="form-group">
			                       <div class="col-lg-4">
			                          <label>Creation Date</label>
			                       </div>
			                       <div class="col-lg-6">
			                          <input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="cdate">
			                       </div>
			                    </div>
			                </div>
			                <br><br>		
			                <div class="form-group">
			                    <div class="col-lg-6"><br><br>
			                    	<button type="submit"  id="add_course" name="Submit" value="Add" class="btn btn-teal margin-top-30">Add Course</button>
			                       <!-- <input type="submit" class="btn btn-primary" name="submit" value="Create Course"> -->
			                    </div>
			                </div>
			            </div>
		          	</form>
	           </div>
	        </div>
	     </div>
	  	</div>

	  	<div class="row editCource" style="display: none">
	     <div class="col-md-12">
	        <div class="panel panel-default">
	           <div class="panel-heading panel-heading-transparent">
	              <strong>Edit Course</strong>
	              <div class="pull-right box-tools">
	                 <a href="<?php echo base_url();?>course" class="btn btn-teal btn-sm">Back</a>                           
	              </div>
	           </div>
	           <div class="panel-body">
	           	<form method="post" enctype="multipart/form-data" data-success="Sent! Thank you!">
	           		
	              <div class="row">
	                 <div class="col-lg-10">
	                    <div class="form-group">

	                       <div class="col-lg-4">

	                          <label>Course Short Name<span style="font-size:11px;color:red">*</span>	</label>
	                       </div>
	                       <div class="col-lg-6">
	                          <input class="form-control" name="cshort" value="<?php ?>" type="text"> 			
	                       </div>
	                    </div>
	                    <br><br>
	                    <div class="form-group">
	                       <div class="col-lg-4">
	                          <label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
	                       </div>
	                       <div class="col-lg-6">
	                          <input class="form-control" name="cfull" type="text">   
	                       </div>
	                    </div>
	                    <br><br>								
	                    <div class="form-group">
	                       <div class="col-lg-4">
	                          <label>Creation Date</label>
	                       </div>
	                       <div class="col-lg-6">
	                          <input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="cdate">
	                       </div>
	                    </div>
	                 </div>
	                 <br><br>		
	                 <div class="form-group">
	                    <div class="col-lg-4">
	                    </div>
	                    <div class="col-lg-6"><br><br>
	                    	<button type="submit"  id="edit_course" name="Submit" value="Edit" class="btn btn-teal margin-top-30">Edit Course</button>
	                       <!-- <input type="submit" class="btn btn-primary" name="submit" value="Create Course"> -->
	                    </div>
	                 </div>
	              </div>
	          </form>
	           </div>
	        </div>
	     </div>
	  	</div>
	</div>
</section>
<script type="text/javascript">
	function addCourseViewPage()
	{
		$(".viewCource").hide(20);
		$(".addCource").show(200);
	}

	// $("#addCource")click(function(){
	// });
	$('#add_course').click(function(){
		var str = 'action_add_course='+'Add Cource';
		var PAGE = '<?php echo base_url();?>course/addCourseData';
		jQuery.ajax({
	      type :"POST",
	      url  :PAGE,
	      data : str,
	      beforeSend: function( xhr ) {
	        reloadTopBar();
	      },
	      success:function(data)
	      {    
	      	// console.log(data);
	        $(".viewCource").show(20);
			$(".addCource").hide(200);
	      } 
	    });

	});
	// edit
	function editCourseViewPage(id)
	{
		var getId = $(this).data('id'); 
		$(".viewCource").hide(20);
		$(".editCource").show(200);
		var str = 'action_edit_course='+'Edit Cource'+' '+'id='+id;
		var PAGE = '<?php echo base_url();?>course/editCourseData';
		jQuery.ajax({
	      type :"POST",
	      url  :PAGE,
	      data : str,
	      beforeSend: function( xhr ) {
	        reloadTopBar();
	      },
	      success:function(data)
	      {   
	        $(".editCource").show(20);
			$(".viewCource").hide(200);

	      } 
	    });

	}




</script>