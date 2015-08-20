<html>
<head>
<title>WEBSITE</title>
<style type="text/css">
body{
   font-family:Verdana;
   font-size:12px;
   margin-top:20px;
   margin-left:auto;
   margin-right:auto;
   width:900px;
   height:1000px;
   padding:5px;
   }
   a{
   color:#000;
   margin-right:10px;
   }
   #menu,#welcome{
    font-size:15px;
	border-bottom:1px solid #000;
	margin-left:auto;
	margin-right:auto;
	width:850px;
	border:1px solid #fff;

	}
	#header{
	margin-left:auto;
	margin-right:auto;
	height:105px;
	width:850px;
	border:1px solid #fff;
	}
	#headerleft{
	width:450px;
	color:#ab5;
	float:left;
	}
	#headerright{ width:150px;
	float:right;}
	#headerright img {
	      width:100px;
		  height:110px;
		 }
    #total{
	width:850px;
	margin-left:auto;
	margin-right:auto;
	height:800px;
	border:1px solid #fff;
	    background-color:#fff;
	}
	#content{
	float:left;
	width:550px;
    background-color:#fff;
	padding:5px;
	}
	#constant{
	width:285px;
	float:right;
	height:800px;
	background-color:#fff;
	}
	#constanttop {
	height:200px;
	}
	#constanttop img{
	margin-left:60px;
	margin-right:60px;
	margin-top:10px;
	width:160px;
	height:140px;
	}
	h4{ margin-left:55px;
	    }
	#constantmiddle1,#constantmiddle2{
	margin-left:15px;
	height:250px;
	padding:10px;
	}
	#body{
	background-color:#254;
	}
	#welcome{
	height:50px;
	border-bottom:1px solid #000;
	text-align:center
	}
	h3,h2{
text-align:center;
    }
</style>
	</head>
	<body id="body">
	<div id="header">
		<div id="headerleft"><h1>SN WORLD</h1></div>
		<div id="headerright"><img src="images/snworld.png"></div>
	</div>	
	<div id="menu">
	<a href="index.php">Home</a>
	<a href="index.php?id=about">About</a>
	<a href="index.php?id=contact">Contact US</a>
	<a href="index.php?id=news">News</a>
	</div>
	<div id="welcome">
	<h2>WELCOME TO MY WEBSITE</h2>
	</div>
	<div id="total">
			<div id="content">
			<?php
				$pages_dir='pages';
				if(!empty($_GET['id'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$id=$_GET['id'];
					if(in_array($id.'.inc.php',$pages))
					{
					   include($pages_dir.'/'.$id.'.inc.php');
					}
					else  
						  echo 'Page not Found';
				}else{
					include($pages_dir.'/home.inc.php');   
					}  		
			 ?>	
			 </div>
			<div id="constant">
			     <div id="constanttop"><img src="images/narayan.png"><br/><h4>Sree Narayan Chakraborty</h4></div>
				 <div id="constantmiddle1"><hr><h3>My Sites</h3><hr>
					        <li>
							   <ul><a href="a">My Facebook</a></ul>
							   <ul><a href="a">My Sourcecode on Github</a></ul>
							   <ul><a href="a">My Linkidin Profile</a></ul>
							</li>   
				 </div>
				 <div id="constantmiddle2"><hr><h3>Recent Posts</h3><hr>
				      <li>
					       <ul><a href="#">What is C</a></ul>
						   <ul><a href="#">What is C++</a></ul>
						   <ul><a href="#">What is JAVA</a></ul>
					   </li>
				 </div>
		    </div>
	</div>
	</body>
	</html>
	