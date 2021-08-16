<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    

<div class="container-fluid my-5">
   <div class="container">
   <form method="POST" class="form-group " action="ass_4.php"  enctype="multipart/form-data">

<div class="form-group">
  <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Name" required>
</div>
<div class="custom-file">
<input type="file" class="custom-file-input" name="file" id="file" placeholder="photo">
<label class="custom-file-label" for="customFile">File</label>
</div>

<button type="submit" class="btn btn-primary my-3" name="submite" value="submit">Submit</button>
</form>
        <div class="row overflow-auto w-100"> 
            <?php
             $dir = "uploadeImage";
        
             $a  = scandir($dir);
            $a = array_slice($a,array_search('..',$a,true))  ;

            
            foreach ($a as $key => $value) {
                   
        
                   echo " <div class='col-2 my-3 shadow-sm'>
                   <a download='$value' href='uploadeImage/$value' title='$value'>
            <img  class='w-100 image' src='uploadeImage/$value' alt='$key'></a>
        </div>";







            }

            
            
            ?>
        </div>
   </div>
    
    
    
    
    
</div>




<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>