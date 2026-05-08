<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="navbar flex h-[8vh] bg-primary-blue">
        <div class="navbar-inside h-full w-full flex justify-between">
            <div class="navbar-left h-full flex">
                <a class="navbar-logo" href="index.php">
                    <img class="h-[8vh]" src="img/logo.png" alt="navbar-logo" />
                </a>
            </div>
            <div class="navbar-right flex items-center gap-[20px]">
                <div>
                    <button onclick="document.location='create-ticket.php'" class="navbar-ticket-button text-white py-[10px] px-[20px] rounded-[10px] cursor-pointer">Ticket indienen</button>
                </div>
                <div>
                    <button onclick="document.location='login.php'" class="navbar-login-button text-white py-[10px] px-[20px] rounded-[10px] bg-[#D50075] cursor-pointer mr-[20px]">Inloggen</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>