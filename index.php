<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        :root{
            --bg1: #4abdac;
            --bg2: #fc4a1a;
            --bg3: #f78733;
            --bg4: #DFDCE3;
        }
        
        .container{
            width: 100%;
            min-height: 100vh;
            /* background-color: aqua; */
            display: grid;
            gap: 0px;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 50px 1fr minmax(100px, auto);
        }
        .header{
            background-color: var(--bg1);
            grid-column: 1/4;   
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .konten{
            background-color: var(--bg4);
             grid-column: 1/4;
             overflow: hidden;
             padding: 5px;
        }
        .footer{
             grid-column: 1/4;
            background-color: var(--bg1);
        }
        .menu{
            display: flex;
            /* justify-content: center; */
            gap: 10px;
        }
        .menu-item{
            border-bottom: solid;
            border-bottom-color: transparent;
            font-weight: bold;
        }
        .menu-item:hover{
            border-bottom: solid;
            border-bottom-color: var(--bg3);
            font-weight: bold;
            cursor: pointer;
        }
        .footer-1{
            display: grid;
            grid-template-columns: 4fr 1fr 1fr 1fr 1fr;
        }
        .footer1-item{
            border-left:groove;
            padding: 0.5vh;
        }
        .list-footer{
            list-style: none;
            padding-left: 0px;
            font-size: 10pt;
        }
        .footer-2{
            display: flex;
            justify-content: center;
            padding: 5px;
            border-top:groove;
        }
        .menu-makanan{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr ;
            gap: 10px;
            margin-bottom: 10px;
        }
        .menu-makanan-item{
            /* border-style: solid; */
            min-height: 100px;
            width: 200px;
            background-color: white;
        }
        .menu-makanan-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        }
        .menu-makanan-item p {
            margin-top: 0px;
        }

        body{
            margin: 0;
        }
        .judul-makan{
            display: flex;
            justify-content: end;
            font-weight: bold;
            border-bottom-style: solid;
            border-bottom-color: var(--bg2);
            border-bottom-width: 5px;
            margin-bottom: 10px;
        }
        .judulm{
            background-color: var(--bg2);
            padding: 5px;
        }
        .kontak{
            display: grid;
            grid-template-columns: 2fr 1fr;
            min-height: 200px;
            background-color: var(--bg4);
        }
        .input-text{
            width: 90%;
            padding: 5px;
            border-radius: 15px;
            border-color: var(--bg1);
        }
        .tombol{
            background-color: var(--bg1);
            border-color: transparent;
            padding: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            text-decoration: none; /* Menghilangkan garis bawah */
            color: inherit;      /* Mengikuti warna teks di sekitarnya */
        }
    </style>
    <div class="container">
        <div class="header">
            <!-- Menu -->
             <div class="menu">
                <div class="menu-item">Home</div>
                <div class="menu-item">Berita</div>
                <div class="menu-item">About</div>
                <a href="#kontak">
                    <div class="menu-item">Contact</div>
                </a>
                
             </div>
             <!-- Akhir menu -->
        </div>
        <div class="konten">
<!-- makanan -->
            <div class="judul-makan">
                <div class="judulm">
                    Menu Makanan
                </div>
            </div>
            <div class="menu-makanan">
                <div class="menu-makanan-item">
                    <div>
                        <img style="object-fit: cover;" src="https://plus.unsplash.com/premium_photo-1668782623937-56d6d64a7f36?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Nasi Goreng</b>
                        <p>Rp. 15.000</p>  
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://media.istockphoto.com/id/2198845886/id/foto/foto-close-up-dari-porsi-makanan-ayam-penyet.jpg?s=1024x1024&w=is&k=20&c=UU7BM0AIUt-VjfeinDcLkf3jAIgfyjGW17Vq4B5bszE=" alt="">
                        <b>Ayam Penyet</b>
                        <p>Rp. 15.000</p> 
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://images.unsplash.com/photo-1749409291833-3653aeb94a2c?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Mie Aceh</b>
                        <p>Rp. 15.000</p>  
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://images.unsplash.com/photo-1687425973269-af0d62587769?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Bakso</b>
                        <p>Rp. 15.000</p>
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://plus.unsplash.com/premium_photo-1668146927669-f2edf6e86f6f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Sushi</b>
                        <p>Rp. 150.000</p>
                    </div>
                    
                </div>
            </div>
<!-- Minuman -->
            <div class="judul-makan">
                <div class="judulm">
                    Menu Minuman
                </div>
            </div>
            <div class="menu-makanan">
                <div class="menu-makanan-item">
                    <div>
                        <img style="object-fit: cover;" src="https://plus.unsplash.com/premium_photo-1668782623937-56d6d64a7f36?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Nasi Goreng</b>
                        <p>Rp. 15.000</p>  
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://media.istockphoto.com/id/2198845886/id/foto/foto-close-up-dari-porsi-makanan-ayam-penyet.jpg?s=1024x1024&w=is&k=20&c=UU7BM0AIUt-VjfeinDcLkf3jAIgfyjGW17Vq4B5bszE=" alt="">
                        <b>Ayam Penyet</b>
                        <p>Rp. 15.000</p> 
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://images.unsplash.com/photo-1749409291833-3653aeb94a2c?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Mie Aceh</b>
                        <p>Rp. 15.000</p>  
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://images.unsplash.com/photo-1687425973269-af0d62587769?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Bakso</b>
                        <p>Rp. 15.000</p>
                    </div>
                    
                </div>
                <div class="menu-makanan-item">
                    <div>
                        <img src="https://plus.unsplash.com/premium_photo-1668146927669-f2edf6e86f6f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <b>Sushi</b>
                        <p>Rp. 150.000</p>
                    </div>
                    
                </div>
            </div>

            <!-- Akhir Halaman Home -->
            <!-- Awal Halaman Kontak -->
             <div class="kontak" id="kontak">
                <div class="keterangan">
                    <b>Kontak Kami</b>
                    <p>Silahkan tinggalkan pesan Anda padan kolom yang
                        tersedia
                    </p>
                </div>
                <div class="formulir">
                    <form action="aksi_pesan.php" method="GET">
                        <label for="">Nama Anda</label>
                        <input class="input-text" type="text" name="nama">

                        <label for="">Email Anda</label>
                        <input class="input-text" type="email" name="email">

                        <label for="">Pesan Anda</label>

                        <textarea rows="10" name="pesan" id="" class="input-text">

                        </textarea>

                        <button class="tombol" type="submit">POST</button>
                    </form>
                </div>
             </div>
        </div>
        <div class="footer">
            <div class="footer-1">
                <div class="footer-1-item">
                    <b>Cafe Kampung Kecil</B>
                    <p>Menyediakan makanan Khas Medan</p>
                </div>
                <div class="footer1-item">
                    <b>Discover</b>
                    <ul class="list-footer">
                        <li>Buy & Sell</li>
                        <li>Merchant</li>
                        <li>Giving Back</li>
                        <li>Help & Support</li>
                    </ul>
                </div>
                <div class="footer1-item">
                    <b>About</b>
                    <ul class="list-footer">
                        <li>Staff</li>
                        <li>Team</li>
                        <li>Careers</li>
                        <li>Blog</li>
                    </ul>
                </div>
                <div class="footer1-item">
                   <b>Resource</b> 
                    <ul class="list-footer">
                        <li>Scurity</li>
                        <li>Global</li>
                        <li>Chart</li>
                        <li>Privacy</li>
                    </ul>
                </div>
                <div class="footer1-item">
                    <b>Social</b>
                    <ul class="list-footer">
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Whatshap</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <div class="footer-2">
                <div class="footer2-item">
                   Copyright Muhammad Zen  &copy; 2026
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>