<?php
class Team
{
    private $name = "";
    private $totalGames = 0;
    private $totalGoals = 0;
    private $totalPoints = 0;

    public function __construct($parm1)
    {
        $this->name = $parm1;
    }

    public function finalScore($parm1, $parm2)
    {
        $this->totalGames += 1;
        $this->totalGoals += $parm1;

        if ($parm1 > $parm2) {
            $this->totalPoints += 3;
        } else if ($parm1 == $parm2) {
            $this->totalPoints += 1;
        }
    }
}
?>