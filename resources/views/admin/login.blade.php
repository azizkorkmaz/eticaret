<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Ticaret - Yönetim</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
<div class="container">
    <form class="form-signin">
        <img src="/img/logo.png" class="logo">
        <label for="email" class="sr-only">E-post</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="e-post" required autofocus>
        <label for="password" class="sr-only">şifre</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="şifre" required aut>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="rememberme" value="1" checked> Beni Hatırla
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
        <div class="links">
            <a href="{{route("anasayfa")}}">&larr; Siteye Dön</a>
        </div>
    </form>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>
