<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Cafe Kampung Kecil</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
            width: 100%;
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-template-rows: 40px 1fr 40px;
            min-height: 100vh;
            

        }
        .header{
            background-color: var(--bg1);
            grid-column: 1/3;
            position: relative;;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .user{
            position: absolute;
            right: 5px;
        }

        body{
            margin: 0;
        }
        .menu{
            background-color: var(--bg4);
        }
        .menu-item{
            list-style: none;
            text-align: center;
            padding-left: 0px;
        }

        .menu-item li{
           border-style: solid; 
           margin:5px;
           cursor: pointer;
        }
        .menu-item li:hover{
            background-color: black;
            color: white;
        }
        .footer{
            background-color: var(--bg1);
            grid-column: 1/3;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .menu-item a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="user">
                Hai,
                <?php
                session_start();
                echo $_SESSION['Nama'];
                ?>
            </div>
            
        </div>
        <div class="menu">
            <ol class="menu-item">
                <a href="admin.php?halaman=user">
                    <li>User</li>
                </a>
                <a href="admin.php?halaman=pesan_masuk">
                   <li>Pesan Masuk</li> 
                </a>
                <a href="admin.php?halaman=menu_makanan">
                   <li>Menu Makanan</li> 
                </a>
                <a href="admin.php?halaman=menu_minuman">
                  <li>Menu Minuman</li>  
                </a>
                
            </ol>
        </div>
        <div class="isi">
            <?php
            if (isset($_GET['halaman'])) {
               if ($_GET['halaman']=='user') {
                    include "user.php";
               }
               elseif ($_GET['halaman']=='pesan_masuk') {
                    include "pesan_masuk.php";
               }
               elseif ($_GET['halaman']=='menu_makanan') {
                    include "menu_makanan.php";
               }
               elseif ($_GET['halaman']=='menu_minuman') {
                    include "menu_minuman.php";
               }
            }
            ?>
        </div>
        <div class="footer">&copy; Muhammad Zen 2026</div>
    </div>
</body>
</html>