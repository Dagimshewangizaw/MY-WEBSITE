<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="quiz">
        <form method="post">
            <p>1.What is used to put things in order but in decending order in php array</p>
            <label><input type="radio" name="q1" value="0">array_push</label><br>
            <label><input type="radio" name="q1" value="1">r_sort</label><br>
            <label><input type="radio" name="q1" value="0">sort</label><br>
            <label><input type="radio" name="q1" value="0">array_shift</label><br>
            <p>2.what is used to add itemes at the end of the array</p>
            <label><input type="radio" name="q1" value="0">array_push</label>
            <label><input type="radio" name="q1" value="0">sort</label>
            <label><input type="radio" name="q1" value="0">array_shift</label>
            <label><input type="radio" name="q1" value="0">r_sort</label>
            <div>
                <button type="submit" name="show_result">showresult</button>
            </div>
        </form>
    </div>
    <?php
    if($post){
        $score=$_post['q1']+$_post[q2];
        echo "<div class="result">";
        echo "<h3> your score</h3>";
        echo "<div> class="score_big">$score/5<div>";
        echo "</div>";
    }
    ?>
</body>
</html>