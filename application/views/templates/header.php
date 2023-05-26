<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="9crap.png" type="image/x-icon">
    <title>9CRAP - Parody of 9GAG (Thanks 9gag)</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <style>
      .img-target{
          width: 60vh;
          cursor: pointer;
      }

      .title-post{
          font-family: "pangoline", sans-serif;
      }

      .acc-img{
          width: 60px;
          height: 60px;
          margin-right: 1rem;
          border-radius: 50%;
      }

      .acc-on-nav{
          width: 40px;
          height: 40px;
          border-radius: 50%;
      }

      .crappy_post{
        text-decoration: none;
      }

      .crappy_post:hover{
        text-decoration: underline;
      }
    </style>
</head>
<body style="padding-top: 8rem;">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars text-white"></i>
          </button>
        <a class="navbar-brand title-post" href="<?= base_url(); ?>">9CRAP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="#">Top
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Hot</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Trending</a>
            </li>
        </ul>
        
        
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="https://i.pinimg.com/564x/63/04/ec/6304ece3cd2a693f7daf9cbc257652fa.jpg" class="acc-on-nav" alt=""></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="<?= base_url(); ?>posts/create">Write a Post</a>
                <a class="dropdown-item" href="#">Notifications</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>
          <a href="#" class="btn btn-info">Login</a>
        &nbsp;&nbsp;
        <a href="#" class="btn btn-outline-info text-white">Signup</a>
    </div>
    </nav>

    
    

    
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br><br>
    <h4>Categories</h4>
    <div class="list-group">
      <?php foreach($categories as $category): ?>
        <a href="#" class="list-group-item list-group-item-action"><?= $category['cat_title']; ?></a>
      <?php endforeach; ?>
      </div>
  </div>
</div>

<div class="container">
<?php if($this->session->flashdata('post_created')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Aww Yeah!</strong> <?php echo $this->session->flashdata('post_created'); ?>
            </div>
        <?php endif; ?>