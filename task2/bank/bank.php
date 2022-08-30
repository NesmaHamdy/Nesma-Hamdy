<?php

if($_POST){ 

  // define("PERSENTEG",0.1);
  // define('percentagMore3',0.15);
$userName=($_POST['username']);
$loanYears =($_POST['loanyears']);
$loanAmount =($_POST['loanamount']);


  if($loanYears <= 3){
    $intersetRate= ($loanAmount * 0.1)* $loanYears;
  }
   elseif($loanYears > 3){
    $intersetRate= ($loanAmount * 0.15)* $loanYears;
   } 

  $loanAfterRate= $loanAmount +  $intersetRate ;
  $monthly= $loanAfterRate / ($loanYears *12);
  
} 
  
?>


<!doctype html>
<html lang="en">

<head>
  <title>The bank</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 ">
    <div class="row">
      <div class="col-6 offset-3 mt-5  text-center  ">
        <h3 class="h2 text-secondary mb-3  "> Bank </h3>
        <form class="  mt-5 text-center border" method="POST">

          <div class="d-flex flex-column align-items-center ">

            <label class="mb-1 mt-3 text-secondary h5">User name</label>
            <input name="username" type="text" placeholder="User name" class="col-6 mb-4 form-control">

            <label class="mb-1 text-secondary h5">Loan amount</label>
            <input name="loanamount" type="number" placeholder="Loan amount" class="col-6 mb-4 form-control">

            <label class="mb-1 text-secondary h5">Loan years</label>
            <input name="loanyears" type="number" placeholder="Loan years" class="col-6  mb-4 form-control">


            <input type="submit" class="btn btn-secondary col-6 mb-5 " value="Result ">
          </div>
        </form>

        <div class=" col-8 offset-2 mb-5 h4 border border-secondary p-4 mt-5  ">
          <?php 
                      echo !empty($userName) ? ("User name" ." :" . $userName ."<br>") : "";
                      echo !empty($intersetRate) ? ("Interset Rate" . " :" . $intersetRate ."EGP" ."<br>") : "";
                      echo !empty($loanAfterRate) ? ("loan AfterRate". " :" . $loanAfterRate ."EGP"."<br>") : "";
                      echo !empty($monthly) ? ("Monthly" . " :" . $monthly ."<br>") : "";   
                 ?>
        </div>

      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>