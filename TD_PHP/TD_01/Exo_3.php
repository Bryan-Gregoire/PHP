<?php

function countCall () {
static $nb = 0;
return ++$nb;
}

echo "La fonction countCall est appelé " . countCall() ." fois <br>";
echo "La fonction countCall est appelé " . countCall() . " fois <br>";
echo "La fonction countCall est appelé " . countCall() . " fois <br>";
