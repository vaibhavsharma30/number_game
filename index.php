<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color: tomato; border : 1px solid black; border-radius: 10px; height: auto; ">
    <?php
    $random = rand(1, 9);
    
    $temp=1;
    
        ?>
    <div class="main" style="background-color: rgb(7, 238, 255); margin-top: 20px; border: 2px solid black; margin-left: 80px; border-radius: 20px;width: 1100px; height: auto;">
        <h1 style="text-align: center; ">Welcome to Number Guessing Game</h1>
        <h3 style="margin-left: 50px;">Rules:-</h3>
        <pre style="font-size: 0.9rem; margin-left: 60px; margin-bottom: 0;">1. The Number would be within the limit of 1 to 10.
2. You have only 1 chances to guess correct number.
3. You will be shown the correct answer.
        </pre>

    </div>
        <div class="game" style="background-color: rgb(185, 185, 185);margin-top: 20px; border: 2px solid black; border-radius: 10px; width: 1230px;margin-left: 17px; height: 200px;" >
        <form action="" method="post">
            <img src="guessing.gif" alt="won" style="width: 180px; height:180px; float: right; margin-right: 60px;">
            <table style="font-size: 2rem;margin-top: 10px;  margin-left: 350px; align-items: center ;  ">
                <tr>
                    <td> Enter the Number here =></td>
                    <td><input type="number" name="guess" placeholder="      Range 1 to 10" style="height: 30px; font-size: 1.2rem;border: 1px solid black;border-radius: 10px; width: 200px;" ></td>

                </tr>
            </table>     
            <input type="submit" value="Chech your Guess" name="submit" style="margin-top: 40px; height: 30px; width: 200px;border-radius: 7px; font-size: 1rem; margin-left: 400px;">
            <input type="reset" value="Restart the Game" name="restart" style="margin-top: 40px; height: 30px; width: 200px;border-radius: 7px; font-size: 1rem;">
            
      
        </form>
         
    </div>
<?php
if(isset($_POST['restart'])) {
    header("Location: .../index.php");
exit();
    
}

elseif (isset($_POST['submit'])) {
    $answer = $_POST['guess'];
while($temp<6){

        if ($answer < $random) 
        {
            echo "<img src=\"wrong.gif\" alt=\"won\" style=\"width: 140px;margin-top:10px; height:140px; float: right; margin-right: 280px;\"> 
            <h1 style=\"text-align:center; margin-bottom:0px;\">Oops Your number is lower!</h1> <br />
            <h1 style=\"text-align:center; margin-top:0px; margin-bottom:50px;\">Correct Answer :". $random ;
            $temp=$temp+1;
            break;
            
            
        } elseif ($answer > $random) 
            {
                echo "<img src=\"wrong.gif\" alt=\"won\" style=\"width: 140px;margin-top:10px; height:140px; float: right; margin-right: 280px;\"> 
                <h1 style=\"text-align:center; margin-bottom:0px;\">Oops Your number is Higher!</h1> <br />
                <h1 style=\"text-align:center; margin-top:0px; margin-bottom:50px;\">Correct Answer :". $random ;
                
            $temp=$temp+1;
            break;
            
        } elseif ($answer == $random) 
            {
                echo "<img src=\"won.gif\" alt=\"won\" style=\"width: 140px;margin-top:10px; height:140px; float: right; margin-right: 280px;\"> 
                <h1 style=\"text-align:center; margin-bottom:0px;\">Congrats your answer is Correct</h1> <br />
                <h1 style=\"text-align:center; margin-top:0px; margin-bottom:50px;\"> Answer :". $random ;
                
            $temp=$temp+1;
           
            break;
        } 
        
    }
   
}

?>
</body>
</html>

    
    
    
    