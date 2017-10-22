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
				<div class="col-sm-6">
		
					<div class="panel-heading panel-default" style="background-color:Grey; color:#fff;"> 
					<p>&nbsp;<i class="fa fa-support fa-fw"></i>&nbsp;<strong>Please Enter Details</strong></p>
					
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
								<select class="form-control"><option selected="selected">Select Block</option>
                                <option>Madhai</option>
                                <option>Patali</option>
                                <option>Digha</option>
                                <option>Saktipur</option>
                                </select>
							</th>

							<th>
							<select class="form-control"><option selected="selected">Financial Year</option>
                                <option>2017-2018</option>
								<option>2018-2019</option>
							</th>
						<tr>
							<th>
							<input type="text" class="datepicker" placeholder="From Date">
							</th>
							<th>
							<input type="text" class="datepicker" placeholder="From Date">
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
			
			
			<span style="display: none;" id="table">
                <div class="row" >
                    <div class="col-sm-10">
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th class='text-center'>S.No</th>
									<th class='text-center'>Payment File No.</th>
									
                                    <th class='text-center'>Locked On</th>
                                    <th class='text-center'>Pension For</th>
                                    <th class='text-center'>No. of <br>Beneficiaries</th>
									<th class='text-center'>Pension Amount</th>
									<th class='text-center'>Arrear</th>
                                    <th class='text-center'>Total Amount<br>(In Crores)</th>
                                    <th class='text-center'>Sent to PFMS</th>
                                    <th class='text-center'>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1.</td>
									<td class='text-center'>45xx24xx</td>
									
                                    <td class='text-center'>25/07/2017</td>
                                    <td class='text-center'>June 2017</td>
                                    <td class='text-center'>4300000</td>
									<td class='text-center'>200</td>
									<td class='text-center'>100</td>
                                    <td class='text-center'>300</td>
                                    <td class='text-center'>Yes</td>
                                    <td class='text-center'>Paid</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>2.</td>
									<td class='text-center'>7865xx5x</td>
									
                                    <td class='text-center'>14/08/2017</td>
                                    <td class='text-center'>July 2017</td>
                                    <td class='text-center'>3000000</td>
									<td class='text-center'>650</td>
									<td class='text-center'>325</td>
                                    <td class='text-center'>975</td>
                                    <td class='text-center'>Yes</td>
                                    <td class='text-center'>Not Paid</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>3.</td>
									<td class='text-center'>45xx3x4z</td>
									
                                    <td class='text-center'>20/09/2017</td>
                                    <td class='text-center'>Aug 2017</td>
                                    <td class='text-center'>2400000</td>
									<td class='text-center'>45.7</td>
									<td class='text-center'>20.2</td>
                                    <td class='text-center'>65.9</td>
                                    <td class='text-center'>No</td>
                                    <td class='text-center'>Paid</td>
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>4.</td>
									<td class='text-center'>675xx4x5</td>
									
                                    <td class='text-center'>04/10/2017</td>
                                    <td class='text-center'>Sep 2017</td>
                                    <td class='text-center'>3500000</td>
									<td class='text-center'>78</td>
									<td class='text-center'>34</td>
                                    <td class='text-center'>112</td>
                                    <td class='text-center'>Yes</td>
                                    <td class='text-center'>Paid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
                    <div class="col-sm-6">
                        <button class="btn btn-primary pull-left"> <i class="fa fa-download fw"></i>&nbsp;Download</button>
                    </div>
                </div>
                </span>
		
		
		
		
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

<script>
	   
	   function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
	   
</script>

	<script>function myFunction() {
    alert("Arrear Amount Updated!");
}
</script>

<script>
$(document).ready(function() {
    $('.datepicker').datepicker();
})
</script>

</html>