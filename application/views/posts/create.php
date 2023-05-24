<div class="card border-primary mb-3" style="max-width: 60rem;">
  <div class="card-header"><h3>Create Post</h3></div>
  <div class="card-body">
  <form>
  <fieldset>
    <div class="form-group">
      <label for="caption" class="form-label mt-4">Caption this!</label>
      <input type="text" class="form-control" id="caption" name="post_title" placeholder="make it witty ;)">
    </div>
    <div class="form-group">
      <label for="post_category" class="form-label mt-4">Select Category</label>
      <select class="form-select" id="post_category">
        <option>1</option>
      </select>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Upload your file: (png, jpg, gif)</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Post</button>
  </fieldset>
</form>
  </div>
</div>