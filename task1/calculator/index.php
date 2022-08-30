<?php

if(!empty($_GET)){
  
  switch($_GET["operations"]){
    case'+':
    $result= $_GET['number1'] + $_GET['number2'] ;
   
    break;

    case'-':
      $result= $_GET['number1'] - $_GET['number2'] ;
    break;

    case'*':
      $result= $_GET['number1'] * $_GET['number2'] ;
    break;

    case'/':
       $result= $_GET['number1'] / $_GET['number2'] ;
    break;

    case'%':
      $result= $_GET['number1'] % $_GET['number2'] ;
    break;

    // default:
    //   $result="please enter number";
    
  }

} else{
  $result="please enter number";
}
 

?>

<!doctype html>
<html lang="en">
  <head>
    <title>calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
  </head> 
  <body>
    <div class="container mt-5 ">
        <div class="row ">
          <h2 class="col-6 offset-3 mt-5  text-center text-success"> calculator </h2>
            <div class="col-6 offset-3 mt-3  text-center border ">
                <form class="  mt-5 text-center " method="GET" >
                    <div class="d-flex">
                        <input name="number1" type="number" placeholder="Enter first number"  class="col-3 m-2 mb-5 form-control">
                        <input name="number2" type="number" placeholder="Enter last number"  class="col-3 m-2 mb-5 form-control">
                        <select  name="operations" class="form-control col-5 m-2 mb-5">
                        <option >operation</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success col-6 mb-5" value="Result "> 
                </form>

                <div class=" mb-5 h4 "> <?php  echo isset($result)? $result : ""; ?> </div>
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