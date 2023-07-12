<?php
require 'users.php';

$users = getUsers();

//html doc as header 
include 'partials/header.php';
?>

<div class="container">
    <p>
        <a href="create.php" class="btn btn-success">Create New User</a>
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a target="_blank" href="http://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>    
                <td>
                    <a href="view.php?id= <?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id= <?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                    <a href="delete.php?id= <?php echo $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>
    

<?php include 'partials/footer.php' ?>