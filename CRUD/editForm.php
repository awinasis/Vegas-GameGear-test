<html>
    <head>
    </head>
    <body>
    <style>
        body{
            display : flex;
            justify-content : center;
            flex-direction : column;
        }
        table{
        padding-left : 400px;
        /* height : 900px; */
        font-family:sans-serif;
        background:#4392F1;
        color:white;
        border:none;
        padding:16px;
        margin:16px;
        }

        .table_insert{
            display : flex;
            align-self : center;
            width : 500px;
            height : 250px;
        }
         .isi_data td{
               padding: 30px;
               margin: 15px auto;
               background : white;
               color : black;   
         }

         .img{
             width : 150px;
             height : 150px;
            }
            img{
             width : 150px;
             height : 150px;
            }

            button{
             background : #4392F1;
             color : white;
                padding : 15px;
                border : 2px solid white;
                border-radius : 15px;
        }
    </style>
        <?php
            include "koneksi.php";
            $id=$_REQUEST['id'];

            $query="SELECT * FROM data_siswa where id ='$id'";
            $result=mysqli_query($connect, $query);
        ?>
    <table class="table_insert">
        <form action="ProsesEdit.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td colspan="2" align="center"><h3>Update Data</h3></td>
            </tr>
            <tr>
                <td>id : </td>
                <td><input type="text" name="id" value="<?php echo $id?>" readonly></td>
            <tr>
            <tr>
                <td>Merk : </td>
                    <td>
                        <select name="merk">
                            <option value="Logitech">Logitech</option>
                            <option value="Razer">Razer</option>
                            <option value="Digital Alliance">Digital Alliance</option>
                        </select>
                    </td>
                </tr>
            <tr>
            <tr>
                <td>Nama Barang : </td>
                <td><input type="text" name="nama_barang"></td>
            <tr>
                <td>Kategori : </td>
                <td>
                    <select name="kategori">
                        <option value="Mouse">Mouse</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Headset">Headset</option>
                        <option value="Mousepad">Mousepad</option>
                        <option value="Gamepad">Gamepad</option>

                    </select>
                </td>
            </tr>
             </tr>
                <td>Harga (Rp) : </td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Gambar Produk : </td>
                <td><input type="file" name="image_name"></td>
            </tr>
            <tr>
                <td><button type="submit" name="kirim"> Update</button>
                </td>
            </tr>

        </form>
    </table>

    <table class="isi_data">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["merk"] ?></td>
                <td> <?php echo $row["nama_barang"] ?> </td>
                <td><?php echo $row["kategori"] ?></td>
                <td> RP <?php echo $row["harga"] ?> </td>
                <td><div class="img"><?php
                    echo "<div class='image'>";
                    echo "<img src='img/".$row['image_name']."' >";
                    echo "</div>";
                ?></div></td>

            <?php
                    }
                }
                else{
                    echo "Database Kosong";
                }
            ?>
            </tr>
        </table>
    
    </body>
</html>