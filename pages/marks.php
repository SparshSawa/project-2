

<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
	$obj=new DbFunction();
	$rs=$obj->showStudents();
	
	if(isset($_POST['submit'])){
	
     
     $obj->marks($_POST['usn'],$_POST['sem1'],$_POST['marks1'],$_POST['att1'],$_POST['sem2'],$_POST['marks2'],$_POST['att2'],
                    $_POST['sem3'],$_POST['marks3'],$_POST['att3'],$_POST['sem4'],$_POST['marks4'],$_POST['att4']);
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>register</title>
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>
<body >
<form method="post" >
	<div id="wrapper">
	<?php include('leftbar.php');?>

	 </div><br><br>
    <div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
				</div>
				
			</div>
	<div class="row">		
    <div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            
                        <div class="panel-body">
                            <div class="row">
			<div class="col-lg-10">
			<div class="form-group">
		    <div class="col-lg-4">
			<label>USN<span id="" style="font-size:11px;color:red">*</span>	</label>
			</div>
			<div class="col-lg-6">
<select class="form-control" name="usn" id="usn" required="required" >			
<option VALUE="">SELECT</option>
				<?php while($res=$rs->fetch_object()){?>							
			
                        <option VALUE="<?php echo htmlentities($res->usn);?>"><?php echo htmlentities($res->usn)?></option>
                        
                        
                    <?php }?>   </select>
										</div>
											
                </div></div>	</div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>S.No</th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Semester</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Marks Obtained</th>
			</div>                                 
             <div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Attendance</th>
			</div>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td>1</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sem1">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks1">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="att1">
			</div></td>
                  </tr>
				  
	         <tr> 
                  <td>2</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sem2">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="att2">
			</div></td>
                  </tr>		
                                         <tr> 
                  <td>3</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sem3">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks3">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="att3">
			</div></td>
                  </tr>			  
                                         <tr> 
                  <td>4</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sem4">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks4">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="att4">
			</div></td>
                  </tr>			  
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        
                    </div>
                    
                </div>
                </div>	
    <div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Update"></button>
	</div>
        </div></div>
    	</form>
    <script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>
    </body></html>