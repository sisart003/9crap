<div class="row">
            <div class="card ms-5 mb-3 col-md-8">
                <div class="card-body">
                <div class="float-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item btn btn-secondary" href="posts/edit/<?php echo $post['post_slug']; ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <?php echo form_open('posts/delete/'.$post['post_id']); ?>
                                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-trash-can"></i> Delete</button>
                            </form>
                        </div>
                        </li>
                    </ul>
                </div>
                <h3 class="card-title"><?= $post['post_title']; ?></h3>
                <p>Post author <span class="badge bg-info">Posted: <?= date("F j, Y, g:i a", strtotime($post['post_created'])); ?></span></p>
                </div>
                <img src="<?= base_url('/assets/crappy/'.$post['post_img']); ?>" class="img-fluid img-target rounded mx-auto d-block" alt="<?= $post['post_title']; ?>">
                
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Tag</span>
                </div>
                
                <div class="card-body">
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-up"></i></a>
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-down"></i></a>
                    <a href="#" class="btn btn-link">Comments(0)</a>
                </div>
            </div>
        </div>

        <form class="mt-5">
                <h4>Comments</h4>
                <div class="form-group">
                    <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Write a comment..."></textarea>
                  </div>
                  <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
        <div class="card border-secondary mb-3" style="max-width: 50rem;">
            <div class="card-header"><img src="https://i.pinimg.com/564x/a6/f1/ab/a6f1ab569e4d521a00d4cfc4248ce191.jpg" class="img-fluid d-inline acc-img" alt=""> Profile Name <br><small>Date commented;</small></div>
            
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, laboriosam? Neque placeat aliquid modi cupiditate minima esse quibusdam saepe beatae velit. Qui doloremque similique dolor accusamus iste temporibus veritatis sed?</p>
            </div>
        </div>