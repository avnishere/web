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
			<span  id="table" style="display:none">
                <div class="row" >
                    <div class="col-sm-10">
                        <table class="table" id="actual_table" border="1" style="background-color:Grey;color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th colspan="2"></th>
                                    <th colspan="2" class="text-center">General Component</th>
                                    <th colspan="2" class="text-center">Special Component</th>
                                    <th colspan="1" class="text-center">TSP Component</th>
                                </tr>
                                <tr style="text-align:center">
                                    <th></th>
                                    <th colspan="1">Scheme</th>
                                    <th colspan="1">Center</th>
                                    <th colspan="1">State</th>
                                    <th colspan="1">Center</th>
                                    <th colspan="1">State</th>
                                    <th colspan="1">Center</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1.</td>
                                    <td class='text-center'>IGNOAPS</td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty1"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya"id="qtya1" ></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                                  
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>2.</td>
                                    <td class='text-center'>IGNWPS</td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qty" id="qty2"></td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qtya" id="qtya2"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>3.</td>
                                    <td class='text-center'>IGNDPS</td>
                                   <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty3"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya" id="qtya3"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                                   
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>4.</td>
                                    <td class='text-center'>LSSPS</td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty4"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya" id="qtya4"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>5.</td>
                                    <td class='text-center'>BDPS</td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qty" id="qty5"></td>
                                    <td class='text-center'><input onblur="findTotal()" type="text" name="qtya" id="qtya5"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                   
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>6.</td>
                                    <td class='text-center'>SSSPS</td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qty" id="qty6"></td>
                                    <td class='text-center'><input onblur="findTotal()"type="text" name="qtya" id="qtya6"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>_</td>
                                    <td class='text-center'>Total Amount</td>
                                    <td class='text-center'><input type="text" name="total" id="total"></td>
                                    <td class='text-center'><input type="text" name="totala" id="totala"></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    <td class='text-center'><input type="text" name=""></td>
                                    
                            `
                                </tr>

                                
                           
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Remarks">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary pull-left" Style="Width:100PX" onclick="myFunction()">Allot</button>
                    </div>
                    <div class="col-sm-2">
                        <!-- <button class="btn btn-warning pull-left">Reject</button> -->
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
    alert("Funds Alloted!");
}</script>

</html>