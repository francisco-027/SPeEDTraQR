<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPeED TraQR - Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./dist/styles.css?v=2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="card">
        <div class="left">
            <div class="logo"></div>
            <div class="brand">SPeED TraQR</div>
        </div>
        <div class="right">
            <div class="title">WELCOME</div>
            <div class="subtitle">Login to start a session</div>

            <div>
                <label for="email">EMAIL</label>
                <div class="input-wrap">
                    <svg viewBox="0 0 24 24" fill="#2a6421" aria-hidden="true">
                        <path d="M20 4H4C2.895 4 2 4.895 2 6V18C2 19.105 2.895 20 4 20H20C21.105 20 22 19.105 22 18V6C22 4.895 21.105 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"></path>
                    </svg>
                    <input type="email" id="email" placeholder="Email">
                </div>
            </div>

            <div>
                <label for="password">PASSWORD</label>
                <div class="input-wrap">
                    <svg viewBox="0 0 24 24" fill="#2a6421" aria-hidden="true">
                        <path d="M17 8H16V6C16 3.243 13.757 1 11 1C8.243 1 6 3.243 6 6V8H5C3.346 8 2 9.346 2 11V19C2 20.654 3.346 22 5 22H17C18.654 22 20 20.654 20 19V11C20 9.346 18.654 8 17 8ZM8 6C8 4.346 9.346 3 11 3C12.654 3 14 4.346 14 6V8H8V6ZM18 19C18 19.551 17.551 20 17 20H5C4.449 20 4 19.551 4 19V11C4 10.449 4.449 10 5 10H17C17.551 10 18 10.449 18 11V19Z"></path>
                    </svg>
                    <input type="password" id="password" placeholder="Password">
                </div>
            </div>

            <div class="muted-row">
                <label style="display:flex;align-items:center;font-weight:500;">
                    <input type="checkbox" onclick="togglePassword()"> Show Password
                </label>
                <a href="#">Reset Password</a>
            </div>

            <button class="btn" type="button">Login</button>
        </div>
    </div>

    <footer class="page-footer">&copy; <?php echo date('Y'); ?> SPeED TraQR. All rights reserved.</footer>

    <script src="./js/scripts.js"></script>
</body>
</html>