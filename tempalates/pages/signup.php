<!DOCTYPE html>
<html lang="en">
    <?php include("../blocks/header.php") ?>
    
    <body>
        <div class="login">
            <div class="logo">
                <img src="logo1.jpg" alt="logo" style="width: 15%;margin-top: 10px;">
            </div>

            <div class="titre">
                <h1>Welcome!</h1>
                <h4>Sign or create your account</h3>
            </div>

            <form action="../actions/login.php" method="POST">
                <div class="forme" style="margin-left:70px;">
                    <input type="text" id="email" name="email" placeholder="Email" style="width:370px;margin-top:20px;" required>
                    <br>
                    <input type="password" id="mdp" name="mdp" placeholder="Password" style="width:370px;margin-top:20px;" required>
                    <br>

                    <div class="mt-2 mb-4">
                    <?php if(!empty($error_msg)): ?>
                        <small class="text-danger"><?php echo $error_msg; ?></small>
                        <?php endif; ?>
                    </div>
                </div>
                <input type="submit" value= "Continue" name="ok" style="margin-left:200px;background-color: rgb(19, 19, 99);color:white;border:2px solid white;border-radius:20px;width:100px;height:50px">
            </form>

            <h6><a href = "index.php"> CREATE YOUR ACCOUNT</a></h6>

            <h3>OR</h3>

            <div class="login_google">
                <div class="logo_google">
                    <img src="../style/bootstrap-icons-1.11.3/google.svg">
                </div>
                <div class="texte_google">
                    Continue with google
                </div>
            </div>

            <div class="login_facebook">
                <div class="logo_facebook">
                    <img src="../style/bootstrap-icons-1.11.3/facebook.svg">
                </div>
                <div class="texte_google">
                    Continue with Facebook
                </div>
            </div>
        </div>
    </body>
</html>