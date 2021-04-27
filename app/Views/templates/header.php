<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
              <a class="nav-link" href="<?=base_url()?>">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>"></a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li><a href="<?=base_url()?>/login" class="btn btn-outline-success">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
