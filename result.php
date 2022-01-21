<?php

if($_POST){
   
    $total =0;
for($i=1; $i <=5; $i++ ){
       switch ($_POST['choice' . $i]){
        case 'Bad':
        $total +=0;
        break;
        case 'Good':
            $total +=3;
            break;
            case 'very good':
                $total +=5;
                break;
                case 'Excellent':
                    $total+=10;
                    break;
                    default:
                    break;
    }
}
if ( $total <25) {
    # code...
}
//print_r($total);die;
// print_r($_phone);die;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-5 text-danger"><span style"border-radius: 50px;">H</span>ospital SURVEY</h1>
        <br>
        <form method="POST" action="phone.php">
        <table class="table table-striped table-danger">
            <thead>
                <tr>
                    <th scope="col">Question?</th>
                    <td>Review</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">Are you satisfied with the level of cleanliness?</th>

                    <td> <p><?php  echo $_POST['choice1']  ?></p>  </td>
                    
                </tr>
                <tr>
                    <th scope="col">Are you satisfied with the service prices?</th>

                    <td>  <p><?php echo $_POST['choice2']  ?></p>  </td>
                </tr>
                <tr>
                    <th scope="col">Are you satisfied with the nursing service</th>
                    <td>  <p ><?php echo $_POST['choice3']  ?></p>  </td>
                </tr>
                 <tr>                
                    <th scope="col">Are you satisfied with the level of the doctor?</th>
                    <td> <p ><?php  echo $_POST['choice4']  ?></p>  </td>
              </tr>
                <tr> 
                    <th scope="col">Are you satisfied with the calmness in the hospital?</th>

                    <td> <p> <?php echo $_POST['choice5']  ?></p>  </td>
                </tr>
             
                <tr> 
                    <th scope="col">Total Review</th>

                    <td> <p> <?php if($total>=25){
                        echo "good";
                    }else{
                        echo"bad";
                    }
                     ?></p>  </td>
                </tr>
                
            </tbody>
        </table>
        <div class=" col-md-6 offset-3">
    <h2 class="text-danger text-center"><?php  echo $total<25? "We will call you later on this phone".$_POST['phone'] :"Thanks Message" ?>
                </h2>
        </div>


</div>
</form>
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