<html>
<head>

<script>

    function myFunction() {

        var x;

        var site = prompt("Please enter Something", "Write Here Something");

        if (site != null) {

            x = "Welocme at " + site + "! Have a good day";

            document.getElementById("demo").innerHTML = x;

        }

    }

</script>

</head>

<body>

<?php

?>

<button onclick="myFunction()">Prompt Box</button>

<p id="demo"></p>

</body>

</html>

