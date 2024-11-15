<?php
//11- Use a cookie to change the default website background color. choose the 
if (isset($_POST['background_color'])) {
    $selected_color = $_POST['background_color'];
    setcookie('background_color', $selected_color, time() + (86400 * 30), "/"); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#ffffff'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($background_color); ?>;">

    <h1>Change Website Background Color</h1>
    <form method="post" action="">
        <label for="background_color">Choose a color:</label>
        <select name="background_color" id="background_color">
            <option value="#ffffff" <?php echo ($background_color === '#ffffff') ? 'selected' : ''; ?>>White</option>
            <option value="#ff0000" <?php echo ($background_color === '#ff0000') ? 'selected' : ''; ?>>Red</option>
            <option value="#00ff00" <?php echo ($background_color === '#00ff00') ? 'selected' : ''; ?>>Green</option>
            <option value="#0000ff" <?php echo ($background_color === '#0000ff') ? 'selected' : ''; ?>>Blue</option>
            <option value="#ffff00" <?php echo ($background_color === '#ffff00') ? 'selected' : ''; ?>>Yellow</option>
        </select>
        <button type="submit">Set Background</button>
    </form>

</body>
</html>
