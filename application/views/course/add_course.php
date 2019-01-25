<section id="middle">
   <!-- page title -->
   <header id="page-header">
      <h1>Course <small>Control panel</small></h1>
      <ol class="breadcrumb">
         <br>
         <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url();?>itemsList">course</a></li>
         <li class="active">course Add</li>
      </ol>
   </header>
   <!-- /page title -->
   <div id="content" class="padding-20">
      <div class="row">
         <div class="col-md-12">
            <div class="panel panel-default">
               <div class="panel-heading panel-heading-transparent">
                  <strong>Add Course</strong>
                  <div class="pull-right box-tools">
                     <a href="<?php echo base_url();?>course" class="btn btn-teal btn-sm">Back</a>                           
                  </div>
               </div>
               <div class="panel-body">
                  <div class="row">
                     <div class="col-lg-10">
                        <div class="form-group">
                           <div class="col-lg-4">
                              <label>Course Short Name<span id="" style="font-size:11px;color:red">*</span>	</label>
                           </div>
                           <div class="col-lg-6">
                              <input class="form-control" name="course-short" id="cshort" required="required"  onblur="courseAvailability()">       
                              <span id="course-availability-status" style="font-size:12px;"></span>				
                           </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                           <div class="col-lg-4">
                              <label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
                           </div>
                           <div class="col-lg-6">
                              <input class="form-control" name="course-full" id="cfull" required="required"  onblur="coursefullAvail()">         
                              <span id="course-status" style="font-size:12px;"></span>				
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
                           <input type="submit" class="btn btn-primary" name="submit" value="Create Course">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>