<!-- form input for admin to udpate new data directly send to users.json-->
<form method="POST" enctype="multipart/form-data" action="">
    <div class="form-group">
        <label>Name</label>
        <input type="name" class="form-control" value="<?php echo $user['name'] ?>">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="username" class="form-control" value= "<?php echo $user['username'] ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" value="<?php echo $user['email'] ?>">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="phone" class="form-control" value="<?php echo $user['phone'] ?>">
    </div>
    <div class="form-group">
        <label>Website</label>
        <input type="website" class="form-control" value="<?php echo $user['website'] ?>">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="picture" class="form-control-file">
    </div>
    <button class="btn btn-success">Submit</button>
</form>