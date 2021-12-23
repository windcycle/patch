<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>
    <link rel="stylesheet" href="<?=base_url().'css/style.css'?>">
    <title>Register</title>
</head>
<body class="background"background="<?=base_url().'uploads/img.jpg'?>">
    <section class="login">
        <div class="newest2">
            <h1 class="text-login">Register Form</h1>
            <center>
                <form action="<?=base_url().'Login/regisdata'?>" method="post">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <br><br>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <br><br>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <br><br>
                        <td><input type="submit"value="Register">
                            <input type="reset"value="Cancel">
                        </td>
                    </tr>
                </form>
            </center>
        </div>
    </section>
<script src='https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js' type='text/javascript'></script>
</body>
</html>