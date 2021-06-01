<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HiPer Planner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">

        <a class="navbar-brand" href="<?=base_url()?>">HiPer Planner</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
<<<<<<< Updated upstream
              <a class="nav-link" href="<?=base_url()?>">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>">Add New</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <?php if( isset( $_SESSION ) && !$_SESSION['logged_in'] ):?>
                <li>
                    <a href="<?=base_url()?>/login" class="btn btn-outline-success">Login</a>
                </li>
            <?php else:?>
                <li>
                    <a href="<?=base_url()?>/logout" class="btn btn-outline-danger">Logout</a>
=======
              <a class="nav-link" href="<?=base_url()?>/dashboard">Dashboard</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <?php if( isset( $_SESSION['logged_in']) && $_SESSION['logged_in'] ):?>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url()?>/addentry">Add Time Away</a>
                </li>
                <li>
                    <a href="<?=base_url()?>/logout" class="btn btn-outline-danger">Logout</a>
                </li>
            <?php else:?>
                <li>
                    <a href="<?=base_url()?>/login" class="btn btn-outline-success">Login</a>
>>>>>>> Stashed changes
                </li>
            <?php endif;?>


          </ul>
        </div>

      </div>
    </nav>
