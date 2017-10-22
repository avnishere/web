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
								<select class="form-control"><option selected="selected">Select Block</option>
                                <option>Madhai</option>
                                <option>Patali</option>
                                <option>Digha</option>
                                <option>Saktipur</option>
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
			
			<span style="display: none;" id="table">
			<div class="row" >
                    <div class="col-sm-10">
                        <table class="table" id="actual_table" border="1" style="background-color:#fff">
                            <thead>
                                <tr bgcolor="#95a7e2">
                                    <th colspan="1" class="text-center">S.No</th>
                                    <th colspan="1" class="text-center">District</th>
                                    <th colspan="1" class="text-center">Month</th>
                                    <th colspan="1" class="text-center">No.of Payment Files</th>
									<th colspan="1" class="text-center">Amount</th>
									<th colspan="1" class="text-center">Select All<br><input type="checkbox" onClick="toggle(this)"  style="width:25px;height:25px" checked /></th>
                                </tr>
                               
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1.</td>
                                    <td class='text-center'>Patna</td>
                                    <td class='text-center'>May 2017</td>
                                    <td class='text-center'>30</td>
                                    <td class='text-center'>5000000</td>
                                    <td class= 'text-center'> <input type="checkbox" name="foo" style="width:25px;height:25px" checked></td>
                                
                                    
                                  
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>2.</td>
                                    <td class='text-center'>Madhubani</td>
                                    <td class='text-center'>May 2017</td>
                                    <td class='text-center'>30</td>
                                    <td class='text-center'>84000000</td>
                                    <td class='text-center'><input type="checkbox" name="foo" style="width:25px;height:25px"checked></td>
                                    
                                    
                                    
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>3.</td>
                                    <td class='text-center'>Siwan</td>
                                   <td class='text-center'>May 2017</td>
                                    <td class='text-center'>30</td>
                                    <td class='text-center'>4500000</td>
                                    <td class='text-center'><input type="checkbox"  name="foo" style="width:25px;height:25px" checked></td>
                                    
                                    
                                   
                                </tr>
                                
                                <tr>
                                    <td class='text-center'>4.</td>
                                    <td class='text-center'>Darbhanga</td>
                                    <td class='text-center'>May 2017</td>
                                    <td class='text-center'>30</td>
                                    <td class='text-center'>270000000</td>
                                    <td class='text-center'><input type="checkbox" name="foo" style="width:25px;height:25px" checked></td>
                                    
                                    
                            `
                                </tr>
								
								<tr>
                                    <td class='text-center'>5.</td>
                                    <td class='text-center'>Bhagalpur</td>
                                    <td class='text-center'>May 2017</td>
                                    <td class='text-center'>30</td>
                                    <td class='text-center'>40000000</td>
                                    <td class='text-center'><input type="checkbox"  name="foo" style="width:25px;height:25px" checked></td>
                                    
                                   
                            `
                                </tr>
								
								
								

                                
                           
                            </tbody>

                        </table>
                    </div>
            </div>
			<div class="row">
				
				<div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="*Remarks" style="width:200px">
                </div>
                <div class="col-sm-3">
                        <button class="btn btn-primary " Style="width:150px;" onclick="myFunction()">Approve</button>
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
    alert("Payment File Approved!");
}</script>

</html>