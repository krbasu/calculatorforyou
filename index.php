<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

    <title>Calculator</title>
</head>
<body>
    <div class="cont">
        <div class="row">
            <div class="col-sm-6">
                <div class="vl">
                    <DIV CLASS="mid">CALCULATOR</DIV> 
                </div>
            </div>
            <div class="col-sm-6">
                <form method="POST" class="form">
                    <input class="na1" type="text" placeholder="Enter a number" name="name">
                    <input type="text" placeholder="Enter another number" class="na2" name="number">
                    <select id="drop" method="POST" name="dropdown">
                        <option value="">select one</option>
                        <option value="sum" name="sum">SUM</option>
                        <option value="substraction" name="substract">SUBSTRACT</option>
                        <option value="multiply" name="multiply">MULTIPLY</option>
                        <option value="devide" name="devide">DEVIDE</option>
                    </select>
                    <input type="submit" id="mit" name="submit">
                </form>
            </div>
        </div>
        <div class="pf">
            <?php
            error_reporting(0);
            ini_set('display_errors', 0);
                $a = $_POST['name'];
                $b = $_POST['number'];
                $drop = $_POST['dropdown'];
                    
                if($drop == 'sum')
                {
                    if(isset($_POST['submit']))
                    {
                        $sum = $a + $b;
                        echo $sum;
                    }
                }
                elseif($drop == 'substraction')
                {
                    if(isset($_POST['submit']))
                    {
                        $substract = $a - $b;
                        echo $a . "-" . $b . "=" . $substract;
                    }
                }
                elseif($drop == 'multiply')
                {
                    if(isset($_POST['submit']))
                    {
                        $mul = $a * $b;
                        echo $a . "*" . $b . "=" . $mul;
                    }
                }
                elseif($drop == 'devide')
                {
                    if(isset($_POST['submit']))
                    {
                        $dev = $a / $b;
                        echo $a . "/" . $b . "=" . $dev;
                    }
                }



            ?>
        </div>
    </div>
</body>
</html>