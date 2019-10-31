<div class= "container">
    <div class="row">
        <div class="col-md-6 offet-md-3 mx-auto">

<?php if(isset($_GET['inscription'])) { ?>
<div class="alert alert-success">
Félicitation, vous pouvez vous connecter.
</div>
<?php } ?>

<form method="post" class="form-horizontal">
<div class="form-group">
<input type="email" name="email" class="form-control <?=isset"
value="<?=$email ?? $_GET['email'] ?? ''?> "placeholder"
<div class="invalid-feedback">
        <?= isset($errors['email']) ? $errors['email']:''?>
</div>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control"
placeholder="Mot de passe.">
<div class="invalid-feedback">
<?= isseet($errors['password']) ? $errors['password']: ''?>

//Vérification password
if (empty($password)) {
    $errors['password']="Vous avez oublié le mot de passe";
}

if(empty($errors)){

    // -- Début du processus de connexion
    if ( connexion($email, $password) ) {

    // L'utilisateur est bien connecté
    // La fonction connexion a retourné true.
    redirection('.');

    }else {
        $errors['email'] = "Email / Mot de passe incorrect";
    }
}