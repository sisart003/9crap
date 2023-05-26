<div class="card border-primary mb-3" style="max-width: 60rem;">
  <div class="card-header"><h3>Create Post</h3></div>
  <div class="card-body">
  <?php echo form_open_multipart('posts/create'); ?>
  <fieldset>
    <div class="form-group">
      <label for="caption" class="form-label mt-4">Caption this!</label>
      <input type="text" class="form-control" id="caption" name="title" placeholder="make it witty ;)">
    </div>
    <div class="form-group">
      <label for="post_category" class="form-label mt-4">Select Category</label>
      <select class="form-select" id="post_category" name="category">
        <option>1</option>
      </select>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Upload your file: (png, jpg, gif)</label>
      <input class="form-control" type="file" id="formFile" name="userfile">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Post</button>
  </fieldset>
</form>
  </div>
</div>