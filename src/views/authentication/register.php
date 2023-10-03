<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>inscription</title>
</head>

<body>

   <div class="container well">
      <div class="tilte"> formulaire d"inscription</div>
      <div class="row col-lg-6">

         <form action="../../../index.php?action=user" method="post">
            <div class="form-group">
               <label for="">nom</label>
               <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
               <label for="">prenom</label>
               <input type="text" class="form-control" name="prenom">
            </div>
            <div class="form-group">
               <label for="">emeil</label>
               <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
               <label for="">password</label>
               <input type="password" class="form-control" name="pass">
            </div>
            <!-- <input type="submit" value="valider"> -->
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="register">Sign in</button>
         </form>
      </div>
   </div>


</body>

</html>