<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php

?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main css -->
    
    <link href="css/style.css" rel="stylesheet">
    <style>
	.responsive {
    width: 100%;
    max-width: 400px;
    height: auto;
}
.indent{ padding-left:13em }
	</style>
    <title>Building plan</title>
  </head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">
 <script language="javascript">
function fncCal()
{
	var tot = 0;
	var sum = 0;
	var A = 2;
	var B = 8;
	var C = 3.5;
	{
		tot = parseInt(eval("document.form1.txtVol1.value")*A) + 8 + parseInt(eval("document.form1.txtVol2.value")*A) + 8
		eval("document.form1.txtVol3.value="+tot/3.5);
		eval("document.form1.txtVol4.value="+tot);
	}
	
}
</script>
       <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="images/" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">CALCULATOR</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- ส่วนนี้จะเป็นหน้าต่าง Properties are เหลี่ยมๆที่ให้ใส่พวกข้อมูลนะครับ -->
<header class="bg-gradient">
 <div class="container mt-5">
<div class="card">
  <div class="card-header">
   <font color="#000000" face="Kanit"> Preparation area
  </div>
  <div class="card-body">
    <h5 class="card-title">งานปักผัง : งานผังล้อมรอบ</h5>
    <p class="card-text">
    <!-- Dropdown menu start here-->
    <div class="card">
    <img class="card-img-top" src="images/12744119_1545534799108619_5079456192439333312_n.jpg" alt="Card image cap">
  <div class="card-body">
    <div class="dropdown">
  <button class="btn  btn-lg btn-success btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    เลือกไม้
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="dropdown-item" href="#" data-value="action">ไม้ประเภท1</a></li>
    <li><a class="dropdown-item" href="#" data-value="another action">ไม้ประเภท2</a></li>
    <li><a class="dropdown-item" href="#" data-value="something else here">ไม้ประเภท3</a></li>
    <li><a class="dropdown-item" href="#" data-value="separated link">ไม้ประเภท4</a></li>
  </ul>
  </div>
  </div>
  <br>
  <form action="page.cgi" method="post" name="form1">
  <div class="container">
  <div class="row">
  <div class="col">
    <div class="input-group input-group-sm mb-3">
     <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-sm">ความกว้าง</span> </div>&emsp;<input class="form-control" id="txtVol1" type="text">
  </div>
  </div>
   <div class="col">
  <div class="input-group input-group-sm mb-3">
     <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-sm">ความสูง</span> </div>&emsp;&emsp;<input class="form-control" id="txtVol2" type="text">
  </div>
  </div>
  <input type="hidden" name="hdnLine" value="5">
<div class="container">
  <div class="row">
  <div class="col">
  <br>
<button type="button" class="btn btn-dark btn-lg btn-block" OnClick="JavaScript:fncCal();">คำนวณ</button>
  <br>
  <br>
   <div class="container">
  <div class="row">
  <div class="col">
  <h4><span>ผลลัพธ์การคำนวณ</span></h4>
  </div>
  </div>
  </div>
  <br>
  <br>
  <div class="container">
  <div class="row">
  <div class="col">
   <div class="input-group input-group-sm mb-3">
     <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-sm">งานผังล้อมรอบ</span> </div>&emsp;&emsp;<input class="form-control" id="txtVol3" type="text"><br>
  </div>
  </div>
   <div class="container">
  <div class="row">
  <div class="col">
   <div class="input-group input-group-sm mb-3">
     <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-sm">งานไม้หลัก</span> </div>&emsp;&emsp;&emsp;&emsp;<input class="form-control" id="txtVol4" type="text"><br>
  </div>
  </div>
</form>
<br>
<br>
  </div>
  </div>

</div>
</div>
</div>
</div>
</div>
<!-- Dropdown menu end here--></header>
<!-- สิ้นสุดหน้าต่าง Properties are -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- jQuery and Bootstrap -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
<script src="js/dropdown.js"></script>
  </body>
</html>