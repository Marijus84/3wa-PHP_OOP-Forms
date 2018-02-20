<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

    <title></title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <div class="container">
      <svg width="650" height="400">
        <rect width="200" height="100" style="fill:#B22222;stroke-width:3;"  />
        <rect x="320" y="125" width="100" height="100" style="fill:#85DAFF;" opacity = "0.75" />
        <circle cx="250" cy="180" r="150"  style="fill:#FFF3AB;" opacity = "0.75" />
        <ellipse cx="550" cy="140" rx="60" ry="90" style="fill:#2E8A57;"/>
        <polygon points="20 50 20 200 140 200" style="fill:#A040A1"; opacity = "0.85" />

      </svg>
      <?php
      $program = new Program();
      $renderer = new SvgRenderer();
      $program->run($renderer);
      ?>
    </div>


  </body>
</html>
