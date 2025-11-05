<?php
class Team
{
   private $name ="";
   private $totalGoals = 0;
   private $totalGames = 0;
   private $totalPoints = 0;

    public function __construct($parm1)
    {
        $this->name = $parm1;
    }

   public function finalScore($parm1, $parm2){
       $this->totalGoals = $this->totalGoals + $parm1;
       $this->totalGames = $this->totalGames + 1;
       
       if($parm1 > $parm2) {
          $this->totalPoints = $this-> totalPoints +3;
       }
            elseif ($parm1 == $parm2) {
              $this->totalPoints = $this->totalPoints +1;
            }
   }
   public function getTotalPoints() {
       return $this-> totalPoints;
   }
   public function getGoalAverage() {
       if ($this->totalGames == 0) {
           return 0;
       }
       return $this->totalGoals/ $this->totalGames;
   }

}
?>