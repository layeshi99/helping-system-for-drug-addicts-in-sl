<html>
     <head>
	  <style type="text/css">
	      body
		  {
		   width:100hw;
	       height:100%;
		  }
	      ul
		  {
		    list-style-type:none;
			margin:0;
			padding:0;
			
		  }
		  
		  li
		  {
		   float:right;
		  }
		  
		  a.nav:link, a.nav:visited
		  {
		   display:block;
		   width:95px;
		   font-weight:blod;
		   color:white;
		   text-decoration:none;
		   text-align:center;
		   padding:4px;
		   font-size:18px;
		    border:#008ecc solid 4px;
		  }
		  a.nav:hover, a.nav:active
		  {
		    background-color:#299617;
			border-radius:15px;
			 border:#008ecc solid 4px;
		  }
		  
		 
		  .header
		  {
		    background-color:#008ecc;
			height:15%;
		
		  }
		  #lg
		  {
		   position:relative;
		   top:-59px;
		  }
		  #t1
		  {
		   position:relative;
		   left:-80px;
		   color:white;
		  
		  }
		  

		  
		  .mid
		  {
		   
		    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("home.jpg");
	        background-position:center;
	        background-size:cover;
	        background-attachment:fixed;
		    height:81%;
			
		  }
		  .footer
		  {
		    height:auto%;
			width:110%;
			background-color:#008ecc;
			
			
		  }
		   .f1
		   {
		     border-radius:60%;
			 border:#299617 solid 2px;
		   }
		  
		   .tdf1
		   {
		    
		    color:white;
		   }
		   
		   .tdf2
		   {
		   position:relative;
		   left:54%;
		   width:80px;
		   }
		   
		   .imf
		   {
		     text-decoration:none;
			 color:white;
		   }
		 
		   .imf:hover
		   {
		    color:black;
		   }
		      .d1
		   {
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("home.jpg");
	          background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
			  padding:30px;
			  width:100%;
			  height:71%;
		   }
		   
		   .d2
		   {
		     
			 margin-left:36%;
			 padding:20px;
			 background-position:center;
	         background-size:cover;
	         background-attachment:fixed;
		     background-image:url("b1.jpg");
			 width:340px;
			 height:480px;
			 border-radius:20px;
		   }
		   
		   .d2:hover
		   {
		      background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("b2.jpg");
		      color:white;
		      border:#008ecc ridge 15px;
		     transform:translateY(-20px);
		   }
		   .btn1
		   {
			 
			 padding: 4px;
			 background-color: #008ecc;
			 border-radius: 25px;
			 font-weight: bold;
			 width: 200px;
			 color:white;
			 font-size:14px;
			 margin-top:5px;
		   }
		     .btn1:hover 
		   {
		      background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("b2.jpg");
		      color:white;
	       }
		   .cap
		   {
			   font-size:20px;
			   color:red;
		   }
		   
		   .tb
		   {
			   color:blue;
			   border-color:red;
		   }
		  </style> 
	 </head>
	 <body>
	  <body>
      <div Class="header">
	        <img  src="logo.png" width="7%" height="100%" align="left">
			<h1 id="t1" align="center">Care From Drugs</h1>
			<img id="lg"  src="logo.png" width="7%" height="100%" align="right">
	       <ul>
              <li><a class="nav" id="nav6"  href="details.html">Appoinment</a><li>	   
			  <li><a class="nav" id="nav1"  href="registration.html">Registration</a><li>
			  <li><a class="nav" id="nav7"  href="adictivity.html">Adictivity</a><li>
		      <li><a class="nav" id="nav2" href="treate.html">Treatements</a></li>
		      <li><a class="nav" id="nav3" href="motivation.html">Motivations</a></li>
		      <li><a class="nav" id="nav4" href="drugs.html">Drugs</a></li>
		      <li><a class="nav" id="nav5" href="home.html">Home</a></li>
		   </ul>
	  </div>
	  <div class="d1">
	       <div class="d2">
	         <center>
		      <?php
                $con = mysqli_connect("localhost","root","");
                if (!$con)
                {
                  die('Could not connect: ' . mysqli_error($con));
                 }
                   mysqli_select_db($con ,"my_patient");
                   $result = mysqli_query($con, "SELECT * FROM appoinment");
                   echo "<table border='1' class='tb' cellpadding='4px'>
			       <caption class='cap'><b>Already Booked time slots</b></caption>
                   <tr>
                      <th>Date</th>
                      <th>time</th>
                    </tr>";
                    while($row = mysqli_fetch_array($result))
                    {
                       echo "<tr>";
                       echo "<td>" . $row['date'] . "</td>"; 
                       echo "<td>" . $row['time'] . "</td>"; 
                       echo "</tr>";
                    }
				   
                   echo "</table>";
				   echo " <a href='appoinment.php'><input type='button' class='btn1' value='Complete Appoinment'></a>";
                   mysqli_close($con);
               ?>
			  
			</center> 
         </div>
	  </div>
	  <div class="footer">
	       <table class="tf1" cellspacing="5px">
			   <tr>
			    <td><img class="f1" src="f4.png" width="36px" height="36px"></td>
				<td class="tdf1">Telephone: 0112 9999498<br>
                    Fax: 0094 512 621 482
                </td>
				<td><img class="f1" src="f5.png" width="36px" height="36px"></td>
				<td class="tdf1">info@drugs.com</td>
				<td class="tdfe"></td>
				<td class="tdf2"><a class="imf" href="about.html">About Us</a></td>
	    	
		     </tr>
		</table>
	   
	 </div>
   </body>
</html>
			
       </body>
	<html>   
 		