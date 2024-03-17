<?php 
$player = "ronaldoe";
$$player = "real madrid";

echo $player;
echo "\n";
echo $$player;
echo "\n";

if($player === 'ronaldo') {
    var_dump($$player);
} else {
    $$player = 'not found';
    var_dump($$player);
}

?>