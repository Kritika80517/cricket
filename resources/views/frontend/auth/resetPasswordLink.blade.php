<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cricket App</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body,
        html {
            height: 100%;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #fff;
            /* Optional: Add a background color */
            padding: 20px;
        }

        section .container {
            width: 100%;
            max-width: 500px;
            background: #fff;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section .container .user {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section .container .user .formBx {
            width: 100%;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
        }

        section .container .user .formBx form {
            width: 100%;
        }

        section .container .user .formBx form h2 {
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            margin-bottom: 10px;
            color: #555;
        }

        section .container .user .formBx form input {
            width: 100%;
            padding: 10px;
            background: #f5f5f5;
            color: #333;
            border: none;
            outline: none;
            margin: 8px 0;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 300;
        }

        section .container .user .formBx form input[type='submit'] {
            max-width: 150px;
            background: #677eff;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: 0.5s;
        }

        @media (max-width: 991px) {
            section .container {
                max-width: 400px;
            }

            section .container .user .formBx {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="formBx">
                    <form action="{{route('submit.reset.password')}}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <h2>Reset Forgot Password</h2>
                        <input type="text" name="email" placeholder="Username" />
                        <input type="password" name="password" placeholder="Create Password" />
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                        <input type="submit" name="" value="Reset Password" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>


</html>
