<?php include 'header.php'; ?>
<?php include 'process.php'; ?>




<h2>Register</h2>
<!-- TODO: Add registration form with input fields for username, password, etc. -->
<!-- Add Bootstrap form classes as needed -->
<form method="post" action="process.php">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" required>
    </div>
    <div class="form-group">
        <label for="fullname">Fullname:</label>
        <input type="text" class="form-control" name="fullname" id="fullname" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <!-- Add other registration fields as needed -->
    <button type="submit" name="done" class="btn btn-success">Register</button>
</form>

<?php include 'footer.php'; ?>