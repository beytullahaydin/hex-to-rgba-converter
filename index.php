<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hex to RGB Converter</title>
</head>
<body>
    <div class="container">
        <?php
            if (isset($_POST["hex"], $_POST["opacity"])) {
                $colordata = $_POST["hex"];
                $opacity = $_POST["opacity"];
                $hex = $colordata;
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                $result = 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $opacity . ')';
            } else {
                $result = null;
                $colordata = "#";
            }
        ?>
        <div class="title">
            <h1>Hex to RGB Converter</h1>
        </div>
        <div class="inputs">
            <div class="hex">
                <label for="hex">Enter with '<i>#</i>'</label>
                <form action="" method="post">
                <input type="text" name="hex" id="hex" placeholder="#288c44" value="<?php echo $colordata; ?>" required>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="64px" viewBox="0 0 24 24" width="64px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z"/></svg>
            <div class="rgb">
                <label>Result'll been here</label>
                <div class="result">
                    <span><?php echo $result; ?></span>
                </div>
            </div>
        </div>
        <div class="opacity">
            <h2>Choose Opacity</h2>
            <select name="opacity" id="opacity">
                <option value="1" selected>1 so 100%</option>
                <option value=".9">0.9 so 90%</option>
                <option value=".8">0.8 so 80%</option>
                <option value=".7">0.7 so 70%</option>
                <option value=".6">0.6 so 60%</option>
                <option value=".5">0.5 so 50%</option>
                <option value=".4">0.4 so 40%</option>
                <option value=".3">0.3 so 30%</option>
                <option value=".2">0.2 so 20%</option>
                <option value=".1">0.1 so 10%</option>
            </select>
        </div>
        <div class="calc">
            <button type="submit">send</button></form>
        </div>
        <div class="view" style="background-color:<?php echo $result; ?>;"></div>
    </div>
</body>
</html>