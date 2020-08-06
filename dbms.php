<!DOCTYPE html>
<html>
<head>
	<title>DBMS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>  
            #leftbox { 
                float:left;  
               
                width:25%; 
                height:280px; 
            } 
            #middlebox{ 
                float:left;  
                
                width:25%; 
                height:280px; 
            } 
            #rightbox{ 
                float:right; 
               
                width:25%; 
                height:280px; 
            } 
            h1{ 
                
                text-align:center; 
            } 
            
            #content{
            	margin-top: 200px;
            }
            #box{
            	margin-top: 50px;
            }
            #empty{
            	background-color: #FF7F50;
            	width: 100%;
            	height: 200px;
            }
            .footer{
              background-color: #000;
              color:#fff;
              font-size:14px;
              padding-top: 20px;
              padding-bottom: 20px;
             } 

        </style>  
</head>
<body>
   <div class="container"> 
        <div id="content">
            <h1>DataBase Management</h1>
            <center> 
            <div id="box">  
            <div id = "leftbox"> 
                <h2>Customer Details</h2><hr> 
                <a href="customer.php"><button class="btn btn-primary">Customer Data</button></a>
            </div>  
              
            <div id = "middlebox"> 
                <h2>Product Details</h2><hr> 
                <a href="pdatabase.php"><button class="btn btn-danger">Products Data</button></a> 
               
            </div> 
              
            <div id = "rightbox"> 
                <h2>All Details</h2><hr> 
                <a href="details.php"><button class="btn btn-success">Detailed Data</button></a> 
                
            </div>
            <div id = "rightbox"> 
                <h2>Order Details</h2><hr> 
                <a href="order-details.php"><button class="btn btn-warning">Order Data</button></a> 
                
            </div>

            </div> 
        </center>
        </div>

      </div> 


      <div id="empty">
        	
        </div>
        <div class="footer">
          <center><p>Copyright @ LifeStyle Store all rights are resivered | Contact us +91 8928669402</p></center>
       </div>
</body>
</html>