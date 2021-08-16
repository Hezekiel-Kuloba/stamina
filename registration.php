<?php require_once('header.php'); ?>

<?php
if (isset($_POST['form1'])) {

    $valid = 1;
   

    if(empty($_POST['cust_name'])) {
        $valid = 0;
        $error_message .= "Name is required"."<br>";
    }

    

    if(empty($_POST['cust_email'])) {
        $valid = 0;
        $error_message .= "Email is required"."<br>";
    }
    if(empty($_POST['cust_phone'])) {
        $valid = 0;
        $error_message .= "Phone Number is required"."<br>";
    }

    if( empty($_POST['cust_password']) || empty($_POST['cust_re_password']) ) {
        $valid = 0;
        $error_message .= "Password is required". "<br>";
    }

    if( !empty($_POST['cust_password']) && !empty($_POST['cust_re_password']) ) {
        if($_POST['cust_password'] != $_POST['cust_re_password']) {
            $valid = 0;
            $error_message .= " Password does not match"."<br>";
        }
    }

    if($valid == 1) {
        $success_message .= "Succesfully Registered"."<br>";
        $token = md5(time());
        $cust_datetime = date('Y-m-d h:i:s');
        $cust_timestamp = time();

        // saving into the database
        $statement = $pdo->prepare("INSERT INTO tbl_customer (
                                        cust_name,
                                        cust_email,
                                        cust_phone,
                                        cust_password,
                                        cust_token,
                                        cust_datetime,
                                        cust_timestamp
                                    ) VALUES (?,?,?,?,?,?,?)");
        $statement->execute(array(
                                        strip_tags($_POST['cust_name']),
                                        strip_tags($_POST['cust_email']),
                                        strip_tags($_POST['cust_phone']),
                                        md5($_POST['cust_password']),
                                        $token,
                                        $cust_datetime,
                                        $cust_timestamp
                                    ));

        
        
        
    }
}
?>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">

                    

                    <form action="" method="post">
                        <?php $csrf->echoInputField(); ?>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                
                                <?php
                                if($error_message != '') {
                                    echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$error_message."</div>";
                                }
                                if($success_message != '') {
                                    echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$success_message."</div>";
                                }
                                ?>

                                <div class="col-md-6 form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="cust_name" value="<?php if(isset($_POST['cust_name'])){echo $_POST['cust_name'];} ?>">
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="cust_email" value="<?php if(isset($_POST['cust_email'])){echo $_POST['cust_email'];} ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" name="cust_phone" value="<?php if(isset($_POST['cust_phone'])){echo $_POST['cust_phone'];} ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="cust_password">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" name="cust_re_password">
                                </div>
                                <div style="margin-right: 20px; " class="col-md-6 mb-5 form-group">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-primary" value="Submit" name="form1">
                                </div>
                                <div class="col-md-6 form-group" style=" display: flex; justify-content: space-evenly; margin-right: 20px; ">
                                    <p style="margin-top: 4px; ">Already have an account?</p>
                                    <p style="margin-bottom: 90px; "><a href="login.php" class="btn btn-primary">Login</a></p>
                                </div>
                            </div>
                        </div>                        
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>