<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>

    <!-- local CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="calculator">
        <form action="" method="POST">
            <h1>PHP Calculator</h1>

            <p class="sub-title">Calculate as your wish!</p>


            <div class="input-area">
                <input type="number" name="f_num" id="" placeholder="First number: ">
                <input type="number" name="s_num" id="" placeholder="Second number: ">
            </div>

            
            <select name="op" id="">
                <option value="add">Addition</option>
                <option value="sub">Submission</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>

            <input type="submit" name="submit" value="Run >>>">

            <p class="output"> <?php include "./function.php";  ?> </p>
        </form>
    </section>


    <footer>
        <span>Developed by: &copy; Mahmood Hassan Rameem.</span>
    </footer>
</body>
</html>