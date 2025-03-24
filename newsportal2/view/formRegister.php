<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <!-- Подключение Bootstrap (если у вас его нет) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Центрирование формы */
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Растягивает блок на весь экран */
        }
        .register-form {
            width: 100%;
            max-width: 400px; /* Ограничивает ширину формы */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-light"> <!-- Фон серый для лучшей читаемости -->

<div class="container register-container">
    <div class="register-form">
        <h3 class="text-center">Register</h3>
        <form method="POST" action="registerAnswer">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" required> 
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required> 
            </div>
            <div class="mb-3">
                <label for="password-confirm" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="confirm" required> 
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100" name="save">Register</button>
            </div>
            <p class="text-center mt-3"><a href="./">Web site</a></p>
        </form>
    </div>
</div>

</body>
</html>
