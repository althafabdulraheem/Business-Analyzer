<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
      ?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff Login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link rel="stylesheet" href="comm.css">
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<style>
  span:hover{
    color: green;
  }
  span{
    font-size:20px; color:transparent;text-shadow:0 0 #1aa3ff;
  }
  p{
    color: black;
    font-size:20px;
  }
  .row {
    --bs-gutter-x: -0.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) * -.5);
    margin-left: calc(var(--bs-gutter-x) * -.5);
}
  .navbar-light .navbar-nav .nav-link {
    color: rgb(236 238 241);
}
.navbar-light:hover .navbar-nav:hover .nav-link:hover {
    color: grey;
}
</style>

<body>
  <?php
  
    $xb=$_SESSION['name'];//name kanan
    $yb1=$_POST['hide1'];//update-transid
    $yb2=$_POST['hide2'];//textboxil value kanan
    $yb3=$_POST['hide3'];//for print value to be edit
    $yb4=$_POST['hide4'];//for print value to be edit
    //echo"$xb";
   // echo"$yb";
   
  ?>
  <header class="bg-primary border">
      <div class="row text-white">
        <div class="col-md-10 p-2 pt-4 fw-bold">
          &nbsp&nbsp&nbspHello'<?php echo"$xb";?> 

        </div>
        <div class="col-md-2 p-2 fw-bold">
          <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="container-fluid">
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="stfnrml.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="final1.php">LogOut</a>
                </li>
                
                
                
            
        
        
            </div>
            </div>
          </nav>
        </div>

      </div>

    </header>
    <br><br><br>
      <div class="text-center fw-bold">
        <p>Edit Data<span> &#128295;</span></p>
      </div>
 



<div class="form">
  
  <form action="update-back.php" method="post">
    <label for="am">Amount</label>
    <input type="text" id="am" name="amount" placeholder="<?php echo"$yb2"; ?> " required>
    <br>
    <label for="pmode">Payment mode</label>
    <br><br>
   <select name="pmode" id="pmode" required>
    <option value="" selected="selected" disabled><?php echo"$yb4";?></option>
    <option value="Cash">cash</option>
    <option value="Cheque">Cheque</option>
    <option value="Credit">Credit</option>
    <option value="Bank Transfer">Bank Transfer</option>
  </select>
    <br>
    <br>
    <label for="type">Select Type :</label>
    <br>
    <br>
   
    
    <select name="types" id="type" required>
      <option value="" selected="selected" disabled><?php echo"$yb3";?></option>
    
   
    <?php
         
             
          $conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading');
          if(!$conff)
          {

            echo"no database connectivity"or die("errr:no found");
              
            }
            
           
            
            

        
                  
                $_SESSION['data']="";
                $sql="SELECT type FROM type";
                $q1=mysqli_query($conff,$sql);

                while( $f=mysqli_fetch_assoc($q1))

                {

               $fch=$f['type'];
                echo"<option value=$fch>$fch</option>";

               }
          
               
          
          
    ?>
     </select>
     <br><br>
    <input type="submit" value="SUBMIT" name="subup">
    <input type="hidden" name="hiddy" value="<?php echo $yb1;?>">
    </form>
    </div>

 
</body>
</html>    

   



    
 
  






     
   

    
   

