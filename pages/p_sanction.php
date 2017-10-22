<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Govt. of Bihar</title>

  

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	  <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

	
</head>

<body style="margin-top:80px; background:url('../img/rough_diagonal.png');margin-bottom:80px">

    <div id="wrapper" style="background:url('../img/rough_diagonal.png');">
	 <?php include("p_menu.html"); ?>
	 
        <div id="page-wrapper" style="background:url('../img/rough_diagonal.png');">
			<div class="row">
				<div class="col-sm-4">
		
					<div class="panel-heading panel-default" style="background-color:Grey; color:#fff;"> 
						<table class="table table-condensed table-responsive">
						<thead>
						<tr>
							<th>
								<select class="form-control" style="width:120px"><option selected="selected">Select District</option>
                                <option>Beguserai</option>
                                <option>Madhepura</option>
                                <option>Saharsa</option>
                                <option>Patna</option>
                                </select>
							</th>
							<th>
								<a class="btn btn-primary btn-block" id="submit" onclick="showhide()">Submit</a>
							</th>

						</tr>
						</thead>
						</table>
						
					</div>
					<!-- panel-heading -->
					
				</div>
				
			</div><br>
			<!-- row1 -->
			<div class="row">
				<span style="display: none;" id="table">
                <div class="row" >
                    <div class="col-sm-10">
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th class='text-center'>Scheme Name</th>
									<th class='text-center'>Sanction No.</th>
									
                                    <th class='text-center'>Date</th>
                                    <th class='text-center'>Center/State</th>
                                    <th class='text-center'>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>IGNOAPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNWPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNDPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>LSSPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
								
								 <tr>
                                    <td class='text-center'>BDPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select ><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
                                </tr>
								
								 <tr>
                                    <td class='text-center'>SSSPS</td>
									<td class='text-center'><input type="text" name=""></td>
									
                                    <td class='text-center'><input type="text" class="datepicker" name=""></td>
                                    <td class='text-center'><select><option selected="selected">Select Type</option>
                                <option>Center</option>
                                <option>State</option></td>
								
                                    <td class='text-center'><input type="text" name=""></td>
									
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
					
					
				<div class="row" >
				
                <div  class="col-sm-2">
                    <button class="btn btn-primary">Print</button>&nbsp;&nbsp;
					<button class="btn btn-primary">Update</button>
                </div>
					<div class="col-sm-4">
					</div>
					<div class="col-sm-2">
					<table>
					<th class='text-center'> Sanction Order No.</th>
					<th class='text-center'> Date</th>
					<tr>
					
					<td class='text-center'><input type="text" name=""></td>
					<td class='text-center'><input type="text" class="datepicker" name=""></td>
					</tr>
					</table>
					
					<br>
					<input type="file" name="fileupload" value="fileupload" id="fileupload"><br>
                    <button class="btn btn-primary pull-left" style="width:150px;" onclick="myFunction()">Upload</button>
					</div>
				
				</div>
                </span>
			
			</div>
			
		</div>
		<!-- page wrapper -->
		
	</div>
	<!-- wrapper -->
	
</body>

<script type="text/javascript">
       function showhide()
 {
       var div = document.getElementById("table");
if (div.style.display !== "none") {
    div.style.display = "block";
}
else {
    div.style.display = "block";
}
 }
</script>

	<script>function myFunction() {
    alert("File Uploaded Successfully!");
}
</script>


</html>