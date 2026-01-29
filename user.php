<table border="1" width="100%">
    <tr>
        <th>No.</th>
        <th>Username</th>
        <th>Pasword</th>
        <th>Email</th>
        <th>Status</th>
    </tr>

    <?php
    include "koneksi.php";
    $sql ="SELECT * FROM tbl_user";
    $hasil=mysqli_query($koneksi,$sql);
    $no=1;
    while ($data=mysqli_fetch_array($hasil)){
    ?>
    <tr>
        <td><?=$no++?></td>
        <td><?=$data['Username']?></td>
        <td><?=$data['Password']?></td>
        <td><?=$data['Email']?></td>
        <td><?=$data['Status']?></td>
    </tr>
    <?php
    }
    ?>
</table>