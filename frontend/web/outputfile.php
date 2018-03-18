<?php
ob_start();
echo 'It,s first command<br>';
echo 'It,s second command<br>';
echo 'It,s third command<br>';
echo 'It,s four command<br>';
$content = ob_get_contents();
ob_clean();
$content = strtr($content, 'o', '0');
echo $content;