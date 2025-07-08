<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Login - Kanban Board</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            background-color: #ffffff;
            padding: 30px;
            width: 300px;
            margin: 80px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button[type="submit"] {
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h2>تسجيل الدخول</h2>

    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <p class="error">⚠ الرقم غير صحيح، حاول مرة أخرى.</p>
    <?php endif; ?>

    <form action="process_login.php" method="POST">
        <label for="userid">أدخل رقمك الجامعي:</label>
        <input type="text" name="userid" id="userid" required>
        <button type="submit">دخول</button>
    </form>
</body>
</html>
