<html>
    <head>
        <script></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            var dem = 0;
            var nhu = 1;
            var chay;
            var s = '<?php echo $b; ?>';
            var audioElement = document.createElement('audio');
            var audioteElement = document.createElement('audio');
            var nwElement = document.createElement('audio');
            audioElement.setAttribute('src', 'http://localhost/skill/views/7777.mp3');
            audioteElement.setAttribute('src', 'http://localhost/skill/views/777.mp3');
            nwElement.setAttribute('src', 'http://localhost/skill/views/nw.mp3');
            s = s.split("");
            function next() {
                switch (s[dem]) {
<?php for ($i = 0; $i < strlen($b); $i++) { ?>
                        case '<?php echo $b[$i]; ?>':
                            b = '<?php echo $a[$b[$i]]; ?>';
                            bien = 0;
                            run = setInterval(function () {
                                if (b[bien] == '.') {
                                    audioElement.play();
                                }
                                if (b[bien] == '_') {
                                    audioteElement.play();
                                }
                                if (bien === (b.length + 1)) {
                                    clearInterval(run);
                                }
                                bien++;
                            }, 150);
                            break;
<?php } ?>              
                }
                dem++;
                if (dem == (s.length)) {
                    clearInterval(chay);
                }
            }
            function at() {
                    nw = setInterval( function (){
                        nwElement.play();
                        nhu++;
                        if (nhu == 3) {
                            at();
                            clearInterval(nw);
                        }
                    },3000);
                    
            }
            function play(){
                chay = setInterval(function () {
                        next();
                    }, 1000);
            }
            function replay() {
                dem = 0;
                play();
            }
        </script>   
    </head>
    <body>
        <button class="play" onclick="play()">Play Audio</button>
        <button class="pause" onclick="replay()">replay</button>
    </body>
</html>