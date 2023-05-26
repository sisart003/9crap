<div class="row">
        <div class="col-md-8 ms-4">
            <?php foreach ($posts as $post): ?>
            <div class="card mb-3">
                <div class="card-body">
                <h3 class="card-title"><a href="<?php echo site_url($post['post_slug']); ?>" class="crappy_post"><?= $post['post_title'] ?></a></h3>
                
                <p>by: Post author <span class="badge bg-info">Posted: <?= date("F j, Y, g:i a", strtotime($post['post_created'])); ?></span></p>
                </div>
                <img src="<?= base_url('/assets/crappy/'.$post['post_img']); ?>" class="img-fluid img-target rounded mx-auto d-block" alt="crappy image">
                
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Tag</span>
                </div>
                
                <div class="card-body">
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-up"></i></a>
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-down"></i></a>
                    <a href="#" class="btn btn-link">Comments(0)</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white">
                    9Crap Rules
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    1. Rule 1
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    2. Rule 2
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    3. Rule 3
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    4. Rule 4
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    5. Rule 5
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    6. Rule 6
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    7. Rule 7
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    8. Rule 8
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    9. Rule 9
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    10. Rule 10
                </li>
            </ul>
        </div> -->
    </div>