<html>
    <head>
       <title>Register</title>
       <style>
            body{
                font-family: sans-serif;
                color: white ;
                background: url('../Assets/Wallpaper/Register.jpg');
                display: flex;
                align-items: center;
                justify-content: center;

            }

            .box{
                display: flex;
                flex-direction: column;
                width: 500px;
                height: 300px;
                border: solid 2px white;
            }

            table{
                padding-left: 10px;
            }

            button[type='submit']{
                margin-left: 50px;
                color: white;
                width: 80px;
                height: 40px;
                background: transparent;
            }
        </style>
    </head>
<body>

    <div class="box">
        <h1 style="text-align: center">Register</h1>
        <table class="table_insert">
            <form action="register_proses.php" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password"></td>
                </tr>
                    <td>Email : </td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><button type="submit" name="kirim">kirim</button>
                    </td>
                </tr>

            </form>
        </table>
    </div>


</body>
</html>