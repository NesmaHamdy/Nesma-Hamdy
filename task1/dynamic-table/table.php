<?php
$Products=[

$mobile=[
  'id'=> 1,
  'brand'=> 'samsung',
  'color'=>['red','green' ,'blue','yellow' ],
  'code'=>22,
  'prise' =>5000 ,
  'status'=>(object)['status'=>0]

  
],

$laptop=[
  'id'=> 2,
  'brand'=> 'Lenovo',
  'color'=>['orang','black' ,'white','red' ],
  'code'=>23,
  'prise' =>10000,
  'status'=>(object)['status'=>1]

],

$screen=[
  'id'=> 3,
  'brand'=> 'LG',
  'color'=>['light','gray' ,'black','green' ],
  'code'=>24,
  'prise' =>15000, 
  'status'=>(object)['status'=>1]
 
],

$tv=[
  'id'=> 4,
  'brand'=> 'sony',
  'color'=>['yellow','blue' ,'gray','light' ],
  'code'=>25,
  'prise' =>4000,
  'status'=>(object)['status'=> 0]

],

]

?>


<!doctype html>
<html lang="en">

<head>
  <title>Table</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5 pt-5">
        <table class="table table-dark">

          <thead>

            <tr>
              <?php foreach($Products[0] as $key => $value ){?>
              <th scope="col"> <?php echo ($key ); ?> </th>
              <?php } ?>
            </tr>

          </thead>

          <?php foreach($Products  as $index => $product ){ ?>
          <tr>
            <?php foreach( $product  as $keey => $val ){ 

            echo '<td>';
            if(is_object($val) || is_array($val)){
              
            foreach( $val as $k => $v ){ 
              
            if($keey == 'status' &&  $k == 'status'){
              if($v == 1 ){
                $v='Active';
              }else{
                 $v= 'No Active' ;
              }     
            }
              echo $v . '     ' ;
            }
            }else{
            echo ($val);
            } 
            echo "</td>";
            } ?>

          </tr>

          <?php } ?>

          </tbody>

        </table>

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