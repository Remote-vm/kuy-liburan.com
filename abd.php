<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		.container{
			width: 90%;
			margin: auto;
			margin-top: -12px;
		}

		.top{
			margin-top: -23px;
			width: 89.1%;
			position: fixed;
			z-index: 1;
		}

		.header{
			height: 90px;
			background-color: #FFE4E1;
			text-align: center;
			font-family:candara;
			
		}

		.header h1{
			padding-top: 20px;
			font-size: 40px;
		}
		.content{
			padding-top: 140px;
		}

		.footer{
			height: 180px;
			margin-top: -19px;
			background-color: #072c75;
			text-align: center;
		}

		.footer h3{
			color: #548a16;
			font-family: arial;
			padding-top: 10px;
		}



		/*Menu*/
		.menu{
			background-color: #c2114f;
			font-family: century gothic;
			margin-top: -16px;
		}
 
		.menu ul {
			list-style-type: none;
			/*margin: 0;*/
			padding: 0;
			overflow: hidden;
		}
 
		.menu > ul > li {
			float: left;
		}
 
	
		.menu li a {
			display: inline-block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
 
		.menu li a:hover{
			background-color: #660829;
		}
	 	
		li.dropdown {
			display: inline-block;
		}
	 
		.dropdown:hover .isi-dropdown {
			display: block;
		}
	 
		
	 
		.isi-dropdown {
			position: absolute;
			display: none;
			
			z-index: 1;
			box-shadow: blue;
			background-color: #8f0a39;		}
	 
		.isi-dropdown a {
			color: black;			
		}
	 
		.isi-dropdown a:hover {
			background-color: #660829
			color: white;
		}


	</style>
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="header"><h1>ICT COMMUNICATION DEPT.</h1></div>
		<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="org.php">Organization Chart</a></li>
					<li class="dropdown"><a href="#">Layanan Kami</a>
						<ul class="isi-dropdown">
							<li><a href="ais.php">AIS System</a></li>
							<li><a href="ndb.php">NDB Radio</a></li>
							<li><a href="bb.php">Microwave Radio Link</a></li>
							<li><a href="isat.php">Inmarsat Radio</a></li>
							<li><a href="pabx.php">PABX System</a></li>
							<li><a href="trk.php">Trunking Radio</a></li>
							<li><a href="net.php">Network Services</a></li>
													
						</ul>
					</li>
					<li class="dropdown"><a href="#">Reporting</a>
						<ul class="isi-dropdown">
							<li><a href="card.php">Stop Card</a></li>
							<li><a href="avai.php">System Availability</a></li>
							<li><a href="week.php">Weekly Performance</a></li>
							<li><a href="month.php">Monthly Performance</a></li>
						</ul>
					</li>	
					<li class="dropdown"><a href="#">Database Inventory</a>
						<ul class="isi-dropdown">
							<li><a href="phone.php">IP Phone</a></li>
							<li><a href="cisco.php">Cisco</a></li>
							<li><a href="trunking.php">Trunking</a></li>
							<li><a href="other.php">Others</a></li>
						</ul>
					</li>	
					<li><a href="trix.php">Tips & Trix</a></li>
					<li><a href="abd.php">ABD OSES</a></li>
					<li><a href="galery.php">Galery</a></li>		
					<li><a href="about.php">Tentang Kami</a></li>
				</ul>
		</div>
		</div>
		

		<div class="content">
			<p>

			
		</p>

		</div>
		<div class="footer">
			
			<h3><u>Contact Info</u></h3>
			<!-- <hr 
				style="border : 1px solid #548a16; height: 1px; width: 10%;" 
			> -->
			<!-- <br> -->
			<p style="font-family: arial;color: #548a16;">
				Pertamina Hulu Energy OSES | ICT & DM Dept | Communication Div.
				<br>
				Address : Bursa Efek Indonesia | Tower 1 | 19th floor 
				<br>
				Phone 	: +6221 5159117
			</p>
			<p>Test Tambah </p>
			<!-- maps -->
			<p>

				<a href="https://goo.gl/maps/RhicfCmsnTuSeR3p6"><img src="map.png" width="50" height="50"></a>
			</p>

		</div>


	</div>
<!-- Tambah komen sebelum tag penutup body -->


</body>
</html>
