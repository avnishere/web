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
                    <div class="col-sm-9">
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th class='text-center'>Scheme Name</th>
									<th class='text-center'>Sanction No.</th>
									
                                    <th class='text-center'>Date</th>
                                   
                                    <th class='text-center'>Sanction<br>Amount</th>
									<th class='text-center'>Alloted<br>Amount</th>
									<th class='text-center'>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>IGNOAPS</td>
									<td class='text-center'>156437</td>
                                    <td class='text-center'>24/07/2016</td>
                                    <td class='text-center'>43000000</td>
                                    <td class='text-center'>13500000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNWPS</td>
									<td class='text-center'>432637</td>
                                    <td class='text-center'>16/09/2017</td>
                                    <td class='text-center'>67000000</td>
                                    <td class='text-center'>45400000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>IGNDPS</td>
									<td class='text-center'>786541</td>
                                    <td class='text-center'>10/10/2017</td>
                                    <td class='text-center'>65000000</td>
                                    <td class='text-center'>25001000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
									
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>LSSPS</td>
									<td class='text-center'>786547</td>
                                    <td class='text-center'>22/07/2015</td>
                                    <td class='text-center'>67000000</td>
                                    <td class='text-center'>43200000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
									
                                </tr>
								
								 <tr>
									<td class='text-center'>BDPS</td>
                                    <td class='text-center'>786549</td>
                                    <td class='text-center'>15/04/2017</td>
                                    <td class='text-center'>11800000</td>
                                    <td class='text-center'>9700000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
                                </tr>
								
								 <tr>
                                    <td class='text-center'>SSSPS</td>
									<td class='text-center'>652754</td>
                                    <td class='text-center'>24/09/2016</td>
                                    <td class='text-center'>478600000</td>
                                    <td class='text-center'>142500000</td>
                                    <td class='text-center'><a href="sanction.html"><button class="btn btn-primary" >New Sanction</button></a></td>
									
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
				
				<div class="row">
                    <div class="col-sm-4">
                        <button class="btn btn-primary pull-left"><i class="fa fa-download"></i>Download</button>
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



</html>