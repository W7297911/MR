<!
* Created by PhpStorm.
* User: feiers
* Date: 2016/8/28
* Time: 17:12
>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>定界符</title>
</head>
<body>
<?php

    $i= "PHP";
    echo <<<std
    Hello,welcome to here!<p>
    Do you like $i?
std;

?>
</body>
</html>
