<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login{
            background-color: var(--bg1);
            padding: 15px;
            font-size: 14pt;
            border-radius: 10px;
        }
        .judul{
            text-align: center;
            margin-bottom: 20px;
            font-size: 24pt;
        }

        input{
            border-radius: 15px;
            font-size: 14pt;
        }
        .tombol{
            width: 40%;
            background-color: var(--bg2);
            font-size: 14pt;
            border-radius: 5px;
        }

        .elemen{
            margin-bottom: 5px;
        }

        .elemen2{
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="aksi_login.php" method="POST">
            <div class="login">
                <div class="judul">Login</div>
                <div class="elemen">
                    <div class="label">Username</div>
                    <div class="input">
                        <input type="text" name="username">
                    </div>
                </div>
                <div class="elemen">
                    <div class="label">Password</div>
                    <div class="input">
                        <input type="password" name="password">
                    </div>
                </div>
                <div class="elemen2">
                    <button class="tombol">Login</button>
                    <button class="tombol">Kembali</button>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>