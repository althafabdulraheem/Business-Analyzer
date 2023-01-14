<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
      //session_start();
    $xb=$_SESSION['name'];
    //echo"$xb";
    $conff=mysqli_connect('fdb34.awardspace.net','3954118_trading','althaf@1998','3954118_trading');
          if(!$conff)
          {

            echo"no database connectivity"or die("errr:no found");
              
            }
            $br="SELECT branch FROM user WHERE uname='$xb'";
            $qbr=mysqli_query($conff,$br);
            $dbr=mysqli_fetch_assoc($qbr);
            $branch=$dbr['branch'];
            $_SESSION['branch']=$branch;
            //echo"$branch";
            if(isset($_SESSION['dataadd'])){
              echo'<script>alert("successfully added data")</script>';
              unset($_SESSION['dataadd']);
            }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff Login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link rel="stylesheet" href="comm.css">
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
   <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" >&nbsp&nbsp hello' <?php echo"$xb";?> &#128104</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="stfnrml.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php">Log Out</a>
        </li>
        
        
      
    </div>
  </div>
</nav>
  
  

 



<div class="form">
  
  <form action="sttaff1.php" method="post">
    <label for="am">Amount</label>
    <input type="text" id="am" name="amount" placeholder="Enter The Amount........ " required>
    <br>
    <label for="pmode">Payment mode :</label>
    <br><br>

   <select id="pmode" name="pmode">
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
   
   
    <select id="type" name="types">
    <option value="No option choosed">select one option <span style="font-size:100px; color: transparent;  
  text-shadow: 0 0 0 blue;">&#128315</span></option>
   
    <?php
         
             

           
            $newtype=$_POST['type'];
            $typecat=$_POST['typeadd'];
            
            if(isset($_POST['sub']))
            {  
            $sq="INSERT INTO type(type,typecat) VALUES('$newtype','$typecat')";
            $q=mysqli_query($conff,$sq);
            echo'<script>window.location.href="addtype-frnd.php"</script>';
            
            
            
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
              <input type='submit' value='SUBMIT' name='stfsub'>
              </form>
    
  
 
    

   



    
  
    
     
</div>




</body>
</html>
     
   

    
   

