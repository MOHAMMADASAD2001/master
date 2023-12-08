<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #010204;
        }
        
        .login-container {
            background-color: #bc9864;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        
        .login-form {
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #010204;
            color: #ffffff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
            background-color: #fff;
            color: #000;
        }

        .error-message {
            color: #ff3333;
            font-size: 14px;
            display: block;
            margin-top: 5px;
        }
        h2 {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" method="POST" action="{{ route('adminLogin') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Login</button>
        </form>
        
    </div>
    
</body>
</html>
