<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Minggu 8 - 119140009</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            position: relative;
            background: linear-gradient(-45deg, #fc0341, #0303fc, #E6E6FA);
            background-size: 400% 400%;
            position: relative;
            animation: change 10s ease-in-out infinite;
        }

        /*yang ditambahkan*/
        @keyframes change {
            0% {
                background-position: 0 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0 50%;
            }
        }

        /*akhir yang ditambahkan*/

        .body-bg {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .bucket {
            width: 25vw;
            background: linear-gradient(-45deg, #fc0341, #0303fc);
            /* margin: 25vh auto; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 25px;
            font-size: 12pt;
            box-shadow: 10px 10px 5px grey;
            border-radius: 20px;
        }

        .bucket p {
            text-align: center;
            text-transform: uppercase;
            color: white;
        }

        .bucket label {
            color: white;
        }

        .login-field {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            /* background: transparent; */
            border: none;
            text-shadow: 0 0 whitesmoke;
            font-weight: 600;
            opacity: 0.8;
            /* color: white; */
            border-radius: 7px;
        }

        .login-btn-submit {
            background: linear-gradient(to left, #0303fc, #fc0341);
            color: white;
            font-size: 12pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
    <div class="bucket">
        <p>Login For Continue </p>
        <form action="./login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Password..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>

</html>