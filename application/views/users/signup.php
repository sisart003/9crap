<div class="row m-3">
    <h1><?= $title; ?></h1>
<?php echo form_open_multipart('users/signup'); ?>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>

    <div class="mb-3">
        <label for="useremail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="Email address" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>


    <div class="mb-3">
        <label for="userPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Password">
    </div>

    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" name="confpassword" placeholder="Confirm Password">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Avatar</label>
        <input class="form-control" type="file" id="formFile" name="userfile">
    </div>

    <button type="submit" class="btn btn-primary">Signup</button>
</form>
</div>