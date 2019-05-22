<html>
    <head>
        
    </head>
    <body>

    <style>
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

        .isi_data{
            background : #4392F1;
            color : white;
            border : 1px solid white;
            border-radius : 20px;
            padding-bottom : 6px;
            padding-top : 10px;
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
        
        <table class="isi_data">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                include "koneksi.php";
                $query="SELECT * FROM data_siswa";
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
                <td>
                        <a href="editForm.php?id=
                        <?php echo $row['id'];?>">
                            <button type="submit">Update</button>
                        </a>
                </td>
                <td><a href="hapus.php?id=<?php echo $row['id'];?>"><button type="submit">Delete</button></a></td>
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