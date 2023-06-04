<section>
  <div class="container py-5">
    

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?= base_url('/assets/users/'.$user_info['avatar']); ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= $user_info['username']; ?></h5>
            <p class="text-muted mb-1"><?= $user_info['email']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <h3 class="card-title"><a href=#" class="crappy_post">Post Title</a></h3>
                
                <p>by: Post author <span class="badge bg-info">Posted: Data</span></p>
                </div>
                <a href=#">
                    <img src="https://i.pinimg.com/564x/80/b1/ec/80b1eca3254a62376c2471f5abe2d659.jpg" class="img-fluid img-target mx-auto d-block" alt="crappy image">
                </a>
                
                
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Category</span>
                </div>
                
                <div class="card-body">
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-up"></i></a>
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-down"></i></a>
                    <a href="#" class="btn btn-link">Comments(0)</a>
                </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>