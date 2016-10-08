<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/skill/views/se_levelcss.css">
    </head>
    <script type="text/javascript">
        function play() {
            document.dum.src = "http://localhost/skill/img/semaphore/a.gif";
        }
        function calculate() {
            var a= document.getElementById(“a”).value;
            alert(a);
        }
    </script>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <center>
                    <h2>Semaphore--Level 1</h2>
                    <img src="http://localhost/skill/img/semaphore/semaphore (1).gif" alt="semaphore" width="100px" height="100px;" name="dum"><br>
                    <div class="nut"><h2> Click</h2></div>
                    <form method="POST">
                        <INPUT TYPE="text" NAME="entry" VALUE="">
                        <?php foreach ($a as $key => $val) { ?>
                        <INPUT TYPE="button" value="<?php echo $val;?>" onClick="calculate()" id="a">
                            <?php
                            if ($key == 77) {
                                echo '<br> <br> ';
                            }
                            ?>
                        <?php } ?>
                    </form>
                </center>
            </div>
            <div class="col-md-3" style="background-color: #red;height: 10%;float: right;width: 8%;" onclick="play()">
                <h2 style="float: contour;">Start</h2>
            </div>
        </div>
        <p></p>
    </body>
</html>