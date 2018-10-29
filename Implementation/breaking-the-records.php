
n breakingRecords($score){
    
    $max = 0;
$min = 0;

$pontuacao1 = $score[0];
$pontuacao2 = $score[0];

    for ($i=0; $i < count($score); $i++) {
        if ($pontuacao1<$score[$i]) {
            $pontuacao1=$score[$i];
            $max++;
        }
        
        if ($pontuacao2>$score[$i]) {
            $pontuacao2=$score[$i];
            $min++;
        }
    }        
    
    return  array($max, $min);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $score_temp);

$score = array_map('intval', preg_split('/ /', $score_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($score);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($__fp);
fclose($fptr);

