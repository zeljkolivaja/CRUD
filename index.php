<?php include_once "select.php";
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
  
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="uvjet" placeholder = "Search usernames" value="<?=$uvjet; ?>" />
        <input type="submit" value="Search" class="button" />
      </form>

      <table>
        <thead>
          <tr>
            <th>administrator</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>username</th>
            <th>password</th>
            <th>profilePhoto</th>
            <th>registerWithGoogle</th>
            <th>registerWithFacebook</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach($rezultati as $row): ?>

          <tr>
            <td><?=$row->administrator?></td>
            <td><?=$row->firstName?></td>
            <td><?=$row->lastName?></td>
            <td><?=$row->username?></td>
            <td><?=$row->password?></td>
            <td><?=$row->profilePhoto?></td>
            <td><?=$row->registerWithGoogle?></td>
            <td><?=$row->registerWithFacebook?></td>
            <td><a href="obrisi.php?id=<?=$row->id?>">Delete</a>
            <a href="update.php?id=<?=$row->id?>">Update</a></td>
          </tr>

          <?php endforeach;?>
        </tbody>
      </table>
      <a href="novi.php" class="button">Insert new user</a>

 </div>

        

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
