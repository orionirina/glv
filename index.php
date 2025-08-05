<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport&Tv.com</title>
    <link href="style/bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css" media="screen" />
</head>
<body>
<div class="login">
    <div class="logo">
        <img src="logo1.jpg" alt="logo" style="width: 15%; margin-top: 10px;">
    </div>

    <div class="titre">
        <h1>Welcome!</h1>
        <h4>Sign in or create your account </h4>
    </div>

    <form action="actions/new_account.php" method="POST">
        <div class="form text-start" style="margin: 20px auto; width: 370px;">
           
            <input type="text" id="email" name="nom" placeholder="Nom" style="width:370px;height:40px;margin-top:20px;" required>
            <input type="text" id="mdp" name="email" placeholder="Email" style="width:370px;margin-top:20px;height:40px;" required>
            <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" style="width:370px;margin-top:20px;height:40px;"required>

            <!-- Message d'erreur PHP -->
            <div class="mt-2 mb-3">
                <?php if (!empty($error_msg)): ?>
                    <small class="text-danger"><?php echo $error_msg; ?></small>
                <?php endif; ?>
            </div>

            <!-- Bouton submit -->
            <button type="submit" class="btn btn-primary rounded-pill" style="margin-left:110px;margin-top:40px">Créer le compte</button>
        </div>
    </form>

    <h6><a href="pages/signup.php">LOGIN</a></h6>
    <h3>OR</h3>

    <div class="login_google">
        <img src="style/bootstrap-icons-1.11.3/google.svg" alt="Google logo">
        <span>Continue with Google</span>
    </div>

    <div class="login_facebook">
        <img src="style/bootstrap-icons-1.11.3/facebook.svg" alt="Facebook logo">
        <span>Continue with Facebook</span>
    </div>
</div>
</body>
</html>