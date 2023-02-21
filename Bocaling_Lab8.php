<?php

$scores = array(21, 10, 35, 50, 45);

sort($scores);

foreach ($scores as $score) {
  echo $score . "<br>";
}

$highest_score = $scores[count($scores) - 1];
echo "<br>Highest score: " . $highest_score;

$lowest_score = $scores[0];
echo "<br>Lowest score: " . $lowest_score;

$total_score = 0;
foreach ($scores as $score) {
  $total_score += $score;
}

echo "<br>Total score: " . $total_score;
$average_score = $total_score / count($scores);
echo "<br>Average score: " . $average_score;

?>