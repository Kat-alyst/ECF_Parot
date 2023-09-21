<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Titillium+Web:ital,wght@0,200;0,300;1,200&display=swap" 
    rel="stylesheet">
    <link rel = "reset stylesheet" href="css/reset.css">
    <link rel = "stylesheet" href= "css/main.css">
    <title>signup</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
        
<body>
    <h1>Signup</h1>  

      <form action="process-signup.php" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="password_confirmation">Reapeat Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
    </div>
    <button>Sign Up</button>

</form>
</body>
  </html>  