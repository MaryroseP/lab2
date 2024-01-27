<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Welcome, USER.</title>
</head>
<body>

<?php
$x = "Wow is this text? As a variable? Sick!";
$num1 = (rand(10, 100));
$num2 = 1;
$num3 = 4.76;
var_dump($x);
var_dump($num1);
var_dump($num3);
echo(round($num3));

$numbers = array(2, $num1, 5, 12, 20);

foreach ($numbers as $num) {
    if ($num < 5) {
        echo "<p>$num is less than 5</p>";
    } elseif ($num == 5) {
        echo "<p>$num is equal to 5</p>";
    } else {
        echo "<p>$num is greater than 5</p>";
    }
}
?>

    
    <div class="first_page">
        <h1 class="big_font">Hello and welcome, <span class="hacker-text" data-value="USER">USER</span></h1>
    </div>
    <br><br>
    <div class="button">
        <a href='index.php'><b>Proceed</b></a>
    </div>
    <script>

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

class HackerText {
    constructor(element) {
        this.element = element;
        this.iterations = 0;
        this.startAnimation();
    }

    startAnimation() {
        const interval = setInterval(() => {
            this.element.innerText = this.element.innerText.split("")
                .map((letter, index) => {
                    if (index < this.iterations) {
                        return this.element.dataset.value[index];
                    }
                    return letters[Math.floor(Math.random() * 26)];
                })
                .join("");

            if (this.iterations >= this.element.dataset.value.length) {
                clearInterval(interval);
                setTimeout(() => {
                    this.iterations = 0;
                    this.startAnimation();
                }, 1000);
            }

            this.iterations += 1;
        }, 30);
    }
}

// Apply the class to each element with the "hacker-text" class
const hackerTextElements = document.querySelectorAll('.hacker-text');
hackerTextElements.forEach(element => new HackerText(element));

    </script>
    
</body>
</html>

