<?php include 'header.php'; ?>
<?php include 'process.php'; ?>

<h2>Admin Dashboard</h2>


<!-- Add User Button -->
<a href="./users/add.php" class="btn btn-primary mb-3">Add User</a>


<!-- TODO: Display a table of users with options to edit or delete -->
<!-- Use Bootstrap table classes -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
       <?php // TODO: Fetch and display users in the table
        $s = $conn->query("SELECT * FROM useer");
        $s-> execute();
        $users = $s->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($users);die();
        foreach ($users as $user) : ?>
             <tr>
             <td><?=$user['id']?></td>
             <td><?=$user['username']?></td>
             <td><?=$user['fullname']?></td>
             <td> <?=$user['role_id']?></td>
             <?php endforeach ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>