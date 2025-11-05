<?php
include("Team.php");


$myTeam = new Team($_GET['teamName']);


$myTeam->finalScore($_GET['home1'], $_GET['away1']);
$myTeam->finalScore($_GET['home2'], $_GET['away2']);
$myTeam->finalScore($_GET['home3'], $_GET['away3']);


echo "The goal average of the team is " . $myTeam->getGoalAverage();
?>
