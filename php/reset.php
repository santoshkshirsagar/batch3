<?php require_once('header.php'); 
include('inc/db.php');
$userId="";
$sql = "SELECT * from users WHERE forgot_code='".$_GET['code']."' LIMIT 1";

$result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $userId=$row['id'];
          }
        }
?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            if($userId!=''){
                ?>

            <form action="reset_post.php" method="post"><h1>Reset Password</h1>
                <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
                <?php
            }else{
                echo "Link expired or invalid";
            }
            ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>