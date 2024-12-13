<?php

$questions=[
    ['question' => 'What is 2 + 2?', 'correct'=>'4'],
    ['question' => 'What is the capital of France?', 'correct'=>'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct'=>'Shakespeare'],
];

$answers = [];

foreach ($questions as $key => $question) {
    echo ($key+1).".". $question['question']."\n";
    $answers[] = trim(readline("Your answer: "));
}

// Evaluate Function
function evaluateQuiz(array $questions, array $answers): int{
    $score = 0;
    foreach($questions as $key => $question){
        if ($answers[$key] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

// calculate score
$score = evaluateQuiz($questions, $answers);
echo "\nYou scored $score out of ". count($questions). "\n";

if ($score === count($questions)) {
    echo "Excellent job! \n";
} elseif ($score>1) {
    echo "Good Effort! \n";
} else{
    echo "Better luck next time! \n";
}