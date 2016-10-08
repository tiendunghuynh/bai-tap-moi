<html>
    <head>
        <script type="text/javascript">
            var anhAr = [];
            var dem = 0;
            var chay;
            function loadAnh() {
                for (var i = 0; i < 10; i++) {
                    anhAr[i] = new Image();
                    anhAr[i].src = "../img/" + i + ".jpg";
                }
            }
            function next() {
                if (dem == 10) {
                    dem = 0
                }
                dem++;
                document.duc.src = "../img/" + dem + ".jpg";
                if (dem == 10) {
                    document.getElementById("hid").style.visibility = "hidden";
                }
                document.getElementById("hid2").style.visibility = "visible";
            }
            function back() {
                if (dem == 0) {
                    dem = 10
                }
                dem--;
                document.duc.src = "anh" + dem + ".jpg";
                if (dem == 0) {
                    document.getElementById("hid2").style.visibility = "hidden";
                }
                document.getElementById("hid").style.visibility = "visible"
            }
            function first() {
                if (dem == 10) {
                    dem = 0
                }
                document.duc.src = "anh" + dem + ".jpg";
            }
            function last() {
                if (dem == 0) {
                    dem = 10
                }
                document.duc.src = "../img/" + dem + ".jpg";
            }
            chay = setInterval(function () {
                next()
            }, 1000);
            function play() {
                chay = setInterval(function () {
                    next()
                }, 1000);
            }
            function stop() {
                clearInterval(chay);
            }
        </script>

    </head>
    <body>
    <center>
        <img name="duc" src="../img/1.jpg" width="450" height="350"><br>
        <input type="button" value="Next" id="hid" onclick="next()">
        <input type="button" value="Play" onclick="play()"/>
    </center>
</body>
</html>
