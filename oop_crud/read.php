<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
    <div class="row">
        <div class="col=md-12 mt-5">
            <hr style="height: 1px;color: black;background-color:black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx auto">
            <?php 

                include 'model.php';
                $model = new Model();
                 //echo $id = $_REQUEST['id'];
                 $id = $_REQUEST['id'];
                 $row = $model->fetch_single($id);
                 //var_dump($row);
                 if(!empty($row)){
                    foreach($row as $roww){

            ?>
            <div class="card">
                <div class="card-header">
                    Singel Record
                </div>
                <div class="card-body">
                     
                    <p>Name = <?php echo $roww['name'];  ?></p>
                    <p>Email = <?php echo $roww['email']; ?></p> 
                    <p>Mobile No. = <?php echo $roww['mobile'];?></p> 
                    <p>Address = <?php echo $roww['address'];?></p>  
      
                </div>
            </div>
            <?php  
                     }
                 }
             ?>
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