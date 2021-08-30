<?php require_once('header.php'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="register_post.php" method="post"><h1>Register</h1>
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Register">
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>