<html>
    <head>
    </head>
    <body style="background: url('../Assets/Wallpaper/Register.jpg');">
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
            include "konek.php";
            $username=$_REQUEST['username'];

            $query="SELECT * FROM user where username ='$username'";
            $result=mysqli_query($connect, $query);
        ?>
    <table class="table_insert">
        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td colspan="2" align="center"><h3>Update Data</h3></td>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" value="<?php echo $username?>"></td>
            <tr>
            <tr>
                <td>Password : </td>
                <td><input type="text" name="password"></td>
                </tr>
            <tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email"></td>
            <tr>
                <td>Privilege : </td>
                <td><input type="text" name="privilege"></td>
            </tr>
            <tr>
                <td><button type="submit" name="kirim"> Update</button>
                </td>
            </tr>

        </form>
    </table>

  <!--   <table class="isi_data">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Privilege</th>

            </tr>
            <?php
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["password"] ?></td>
                <td> <?php echo $row["email"] ?> </td>
                <td><?php echo $row["privilege"] ?></td>

            <?php
                    }
                }
                else{
                    echo "Database Kosong";
                }
            ?>
            </tr>
        </table> -->
    
    </body>
</html>