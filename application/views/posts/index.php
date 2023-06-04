<div class="row">
        <div class="col-md-8 ms-4">
            <?php foreach ($posts as $post): ?>
            <div class="card mb-3">
                <div class="card-body">
                <h3 class="card-title"><a href="<?php echo site_url($post['post_slug']); ?>" class="crappy_post"><?= $post['post_title'] ?></a></h3>
                
                <p>by: Post author <span class="badge bg-info">Posted: <?= date("F j, Y, g:i a", strtotime($post['post_created'])); ?></span></p>
                </div>
                <a href="<?php echo site_url($post['post_slug']); ?>">
                    <img src="<?= base_url('/assets/crappy/'.$post['post_img']); ?>" class="img-fluid img-target rounded mx-auto d-block" alt="crappy image">
                </a>
                
                
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary"><?= $post['cat_title']; ?></span>
                </div>
                
                <div class="card-body">
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-up"></i></a>
                    <a href="#" class="card-link btn btn-primary"><i class="fa-solid fa-arrow-down"></i></a>
                    <a href="#" class="btn btn-link">Comments(0)</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>