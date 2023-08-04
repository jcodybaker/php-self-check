<html>
<head>
</head>
<body>
<?php
$i = 0;

function countdown_to_i($i) {
    if ($i <= 0) {
        return
    }
    $i--;
    countdown_to_i($i);
}

while (true) {
    countdown_to_i(100);
}
?>
<blink>HELLO WORLD</blink>
</body>
</html>