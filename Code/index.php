<html>

<head>
    <title>
        Code -Pattern...
    </title>
</head>

<body>
    <?php include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css" />
    <link rel="stylesheet" href="../Assets/css/code.css" />

    <div id="code_wrapper">
        <center>

            <article id="code_box">Question.
                 <div id="ques_box">
             <article id="ques">
                   <pre>
*
* *
* * *
* * * *
* * * * *
* * * *
* * *
* *
*
                    </pre>
                </article>
                </div>
                <form action="code.php" method="post">
                    <article class="code">
                        <textarea name="writecode" id="code_here" placeholder="WRITE CODE HERE."></textarea>
                        <input class="code_sub" type="submit" value="Compile & Run" name="submit" />
                        <p>CLOCK</p>
                        <p id="demo"></p>
                       <script>
var myVar = setInterval(submit, 300);
function submit() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
  clearInterval(submit);
</script>
                    </article>
                </form>
            </article>
        </center>
    </div>

</body>

</html>
