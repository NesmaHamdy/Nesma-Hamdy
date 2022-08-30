<?php




// if(empty($_POST)){
//   $messege="pls enter your grade";

// } elseif(array_values($_POST) > 100  ){
//   $messege="Max grade 100";
// 



if($_POST){ 

$totalgrade=array_sum ($_POST);
$peresentege= ($totalgrade/500)*100;


  if($peresentege >= "90"){
    $grade="Grade: A";

  } elseif($peresentege >= "80" && $peresentege < "90"){
    $grade="Grad: B";

  }elseif($peresentege >= "70" && $peresentege < "80"){
    $grade="Grade: C";
  
  }elseif($peresentege >= "60" && $peresentege  < "70"){
    $grade="Grade: D";
  }
  elseif($peresentege >= "40" && $peresentege <"60" ){
    $grade="Grade: E";

  } elseif($peresentege < "40" && $peresentege != "0" ){
    $grade="Grade: F";

  }elseif( $peresentege=="0" || is_null($peresentege)){
    $grade="";
    $peresentege="";
  }
  
  
} 

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3 ">
        <div class="row">
            <div class="col-6 offset-3 mt-5  text-center  ">
                <h3 class="h2 text-info mb-3  "> Total grades</h3>   
                <form class="  mt-5 text-center border" method="POST" >

                    <div class="d-flex flex-column align-items-center ">

                        <label class="mb-1 mt-3 text-info h5">Physics</label>
                        <input name="physics" type="number" placeholder="Enter your grade"  class="col-6 mb-4 form-control">

                        <label class="mb-1 text-info h5">Chemistery</label>
                        <input name="Chemistery" type="number" placeholder="Enter your grade"  class="col-6 mb-4 form-control" >

                        <label class="mb-1 text-info h5">Biology</label>
                        <input name="Biology" type="number" placeholder="Enter your grade"  class="col-6  mb-4 form-control">

                        <label class="mb-1 text-info h5">Mathematics</label>
                        <input name="Mathematics" type="number" placeholder="Enter your grade"  class="col-6  mb-4 form-control">

                        <label class="mb-1 text-info h5">Computer</label>
                        <input name="Computer" type="number" placeholder="Enter your grade"  class="col-6  mb-5  form-control">

                        <input type="submit" class="btn btn-info col-6 mb-5 " value="Result "> 
                    </div>
                </form>

                <div class=" col-8 offset-2 mb-5 h4 border border-info p-4 mt-4 "> 
                  <?php 
                      echo !empty($totalgrade) ? ("Total grade=" .$totalgrade ."<br>") : "";
                      echo !empty($peresentege) ? ("Peresentege=" .$peresentege ."%" ."<br>") : "";
                      echo !empty($grade) ? ($grade ."<br>") : "";   
                 ?> 
                </div>
   
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>