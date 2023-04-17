<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE-PHP-CALCULATOR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="heading">
        <h1>SIMPLE CALCULATOR</h1>
        </div>
        <div class="form">
            <form action="#">
                <input type="text" name="num1" placeholder="Number 1">
                <input type="text" name="num2" placeholder="Number 2">
                <select name="operator">
                    <option></option>
                    <option>None</option>
                    <option>Add</option>
                    <option>Subtract</option>
                    <option>Multiply</option>
                    <option>Division</option>
                </select>
                <br>
                <button name="submit" value="Submit">Calculate</button>
                <p>The answer is:</p>
                <?php
                 if(isset($_GET['submit'])){
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operator'];
                    switch($operator){
                        case "None":
                            echo "ERROR, no method selected";
                            break;
                            case "Add":
                                echo $result1 + $result2;
                                break;
                                case "Subtract":
                                    echo $result1 - $result2;
                                    break;
                                    case "Multiply":
                                        echo $result1 * $result2;
                                        break;
                                        case "Division":
                                            echo $result1 / $result2;
                                            break;
                                            default:
                                            echo "No calculation done";
                    }
                 }
                ?>
            </form>

        </div>

    
    
</body>
</html>