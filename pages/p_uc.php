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
				<div class="col-sm-5">
		
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
							</th>
							</tr>
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
			<div class="row">
				<span style="display: none;" id="table">
                <div class="row" >
                    <div class="col-sm-12">
                          <table class="table" id="actual_table" border="1" style="background-color:White">
                          <!-- 20 -->
                            <thead>
                                <tr bgcolor="#95a7e2">
									<th colspan="1" class "text-center"></th>
                                    <th colspan="5" class="text-center">Amount Received</th>
                                    <th colspan="5" class="text-center">Amount Disbursed</th>
                                    <th colspan="5" class="text-center">Amount Returned</th>
                                    <th colspan="5" class="text-center">Amount Remaining</th>
									<th colspan="1" class "text-center"></th>

                                </tr>
                                <tr>
									<th colspan="1" class="text-center">Scheme</th>
                                    <th colspan="2" class="text-center">General</th>
                                    <th colspan="2" class="text-center">Special</th>
                                    <th colspan="1" class="text-center">TSP</th>
                                    <th colspan="2" class="text-center">General</th>
                                    <th colspan="2" class="text-center">Special</th>
                                    <th colspan="1" class="text-center">TSP</th>
                                    <th colspan="2" class="text-center">General</th>
                                    <th colspan="2" class="text-center">Special</th>
                                    <th colspan="1" class="text-center">TSP</th>
                                    <th colspan="2" class="text-center">General</th>
                                    <th colspan="2" class="text-center">Special</th>
                                    <th colspan="1" class="text-center">TSP</th>
									<th colspan="1" class="text-center"></th>
                                </tr>
                                <tr>
									<th></th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th></th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th></th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th></th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th>Center</th>
                                    <th>State</th>
                                    <th></th>
									<th>Total</th>
                                </th>
                            </thead> 

							<tr>
									<td>IGNOAPS</td>
									<td class='text-center'>1200</td>
									<td class='text-center'>1400</td>
									<td class='text-center'>1650</td>
									<td class='text-center'>7240</td>
									<td class='text-center'>8865</td>
									<td class='text-center'>2314</td>
									<td class='text-center'>1716</td>
									<td class='text-center'>52289</td>
									<td class='text-center'>76521</td>
									<td class='text-center'>1500</td>
									<td class='text-center'>1108</td>
									<td class='text-center'>50040</td>
									<td class='text-center'>70453</td>
									<td class='text-center'>987600</td>
									<td class='text-center'>13200</td>
									<td class='text-center'>17009</td>
									<td class='text-center'>1233</td>
									<td class='text-center'>1540</td>
									<td class='text-center'>1400</td>
									<td class='text-center'>1800</td>
									<td class='text-center'>68450</td>
									
							</tr>
							
							<tr>
									<td>IGNWPS</td>
									<td class='text-center'>1245</td>
									<td class='text-center'>1782</td>
									<td class='text-center'>1609</td>
									<td class='text-center'>1500</td>
									<td class='text-center'>17006</td>
									<td class='text-center'>1543</td>
									<td class='text-center'>9860</td>
									<td class='text-center'>8970</td>
									<td class='text-center'>6790</td>
									<td class='text-center'>6750</td>
									<td class='text-center'>5630</td>
									<td class='text-center'>8790</td>
									<td class='text-center'>564100</td>
									<td class='text-center'>9087</td>
									<td class='text-center'>13000</td>
									<td class='text-center'>15420</td>
									<td class='text-center'>8700</td>
									<td class='text-center'>8976</td>
									<td class='text-center'>9087</td>
									<td class='text-center'>6750</td>
									<td class='text-center'>850097</td>
							</tr>
							
							<tr>
									<td>IGNDPS</td>
									<td class='text-center'>7860</td>
									<td class='text-center'>7600</td>
									<td class='text-center'>5600</td>
									<td class='text-center'>1800</td>
									<td class='text-center'>3000</td>
									<td class='text-center'>7800</td>
									<td class='text-center'>8976</td>
									<td class='text-center'>15004</td>
									<td class='text-center'>5410</td>
									<td class='text-center'>9860</td>
									<td class='text-center'>9000</td>
									<td class='text-center'>100008</td>
									<td class='text-center'>89007</td>
									<td class='text-center'>7860</td>
									<td class='text-center'>1800</td>
									<td class='text-center'>2314</td>
									<td class='text-center'>808080</td>
									<td class='text-center'>3000</td>
									<td class='text-center'>7600</td>
									<td class='text-center'>89007</td>
									<td class='text-center'>200430</td>
									
							</tr>
							
							<tr>
									<td>LSSPS</td>
									<td class='text-center'>6750</td>
									<td class='text-center'>3460</td>
									<td class='text-center'>2001</td>
									<td class='text-center'>5000</td>
									<td class='text-center'>180002</td>
									<td class='text-center'>5600</td>
									<td class='text-center'>424242</td>
									<td class='text-center'>4342</td>
									<td class='text-center'>7860</td>
									<td class='text-center'>3140</td>
									<td class='text-center'>4342</td>
									<td class='text-center'>1800</td>
									<td class='text-center'>9087</td>
									<td class='text-center'>13000</td>
									<td class='text-center'>5630</td>
									<td class='text-center'>89760</td>
									<td class='text-center'>9080</td>
									<td class='text-center'>17001</td>
									<td class='text-center'>16000</td>
									<td class='text-center'>13000</td>
									<td class='text-center'>286540</td>
									
							</tr>
							
							<tr>
									<td>BDPS</td>
									<td class='text-center'>15000</td>
									<td class='text-center'>17600</td>
									<td class='text-center'>18760</td>
									<td class='text-center'>17600</td>
									<td class='text-center'>1569</td>
									<td class='text-center'>1680</td>
									<td class='text-center'>1765</td>
									<td class='text-center'>1890</td>
									<td class='text-center'>5490</td>
									<td class='text-center'>8760</td>
									<td class='text-center'>9045</td>
									<td class='text-center'>4020</td>
									<td class='text-center'>1200</td>
									<td class='text-center'>8970</td>
									<td class='text-center'>17860</td>
									<td class='text-center'>8760</td>
									<td class='text-center'>19876</td>
									<td class='text-center'>90087</td>
									<td class='text-center'>7168</td>
									<td class='text-center'>15000</td>
									<td class='text-center'>76080</td>
									
							</tr>
							
							<tr>
									<td>SSSPS</td>
									<td class='text-center'>7600</td>
									<td class='text-center'>9900</td>
									<td class='text-center'>3000</td>
									<td class='text-center'>2001</td>
									<td class='text-center'>100008</td>
									<td class='text-center'>6500</td>
									<td class='text-center'>5600</td>
									<td class='text-center'>6600</td>
									<td class='text-center'>5430</td>
									<td class='text-center'>4420</td>
									<td class='text-center'>5677</td>
									<td class='text-center'>9647</td>
									<td class='text-center'>6374</td>
									<td class='text-center'>9087</td>
									<td class='text-center'>4500</td>
									<td class='text-center'>5400</td>
									<td class='text-center'>3500</td>
									<td class='text-center'>7600</td>
									<td class='text-center'>6700</td>
									<td class='text-center'>143000</td>
									<td class='text-center'>347067</td>
									
							</tr>
							
							<tr>
									<td>TOTAL</td>
									<td class='text-center'>39655</td>
									<td class='text-center'>41744</td>
									<td class='text-center'>32620</td>
									<td class='text-center'>35141</td>
									<td class='text-center'>1930468</td>
									<td class='text-center'>25437</td>
									<td class='text-center'>154802</td>
									<td class='text-center'>67540</td>
									<td class='text-center'>12780</td>
									<td class='text-center'>15630</td>
									<td class='text-center'>17680</td>
									<td class='text-center'>43908</td>
									<td class='text-center'>13208</td>
									<td class='text-center'>56402</td>
									<td class='text-center'>17650</td>
									<td class='text-center'>45302</td>
									<td class='text-center'>17650</td>
									<td class='text-center'>187022</td>
									<td class='text-center'>176203</td>
									<td class='text-center'>76520</td>
									<td class='text-center'></td>
									
							</tr>
                            </tbody>
                          
                        </table>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-8">
                        <button class="btn btn-primary pull-left"><i class="fa fa-download"></i>&nbsp;Download</button>
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