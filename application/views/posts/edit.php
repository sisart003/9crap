<div class="row">
            <?php echo form_open('posts/update'); ?>
            <div class="card ms-5 mb-3 col-md-8">
                <input type="hidden" name="post_id" value="<?= $post['post_id']; ?>">
                <div class="card-body">
                <h3 class="card-title">
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $post['post_title']; ?>">
                </h3>
                <p>Post author <span class="badge bg-info">Posted: <?= date("F j, Y, g:i a", strtotime($post['post_created'])); ?></span></p>
                </div>
                <img src="<?= base_url('/assets/crappy/'.$post['post_img']); ?>" class="img-fluid img-target rounded mx-auto d-block" alt="<?= $post['post_title']; ?>">
                
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Tag</span>
                </div>

                <div class="card-body">
                    <input type="submit" name="submit" class="btn btn-primary" value="Update">
                </div>
                
            </div>
            
            </form>
        </div>