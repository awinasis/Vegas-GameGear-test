<html>
    <head>
        
    </head>
    <body>

    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Privilege</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                include "konek.php";
                $query="SELECT * FROM user";
                $result=mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["password"] ?></td>
                <td> <?php echo $row["email"] ?> </td>
                <td><?php echo $row["privilege"] ?></td>
                <td>
                        <a href="editForm.php?username=
                        <?php echo $row['username'];?>">
                            <button type="submit">Update</button>
                        </a>
                </td>
                <td><a href="hapus.php?username=<?php echo $row['username'];?>"><button type="submit">Delete</button></a></td>
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