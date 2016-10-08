var a = new Array();
var dem = 0;
var bien = 0;
songtich = new Audio('http://localhost/skill/views/tichchuan.mp3');
songte = new Audio('http://localhost/skill/views/techuan.mp3');
a['e'] = '.';
a['t'] = '_';
a['i'] = '..';
a['m'] = '__';
a['s'] = '...';
a['o'] = '___';
a['h'] = '....';
a['ch'] = '____';

a['a'] = '._';
a['n'] = '_.';
a['u'] = '.._';
a['d'] = '_..';
a['v'] = '..._';
a['b'] = '_...';

a['r'] = '._.';
a['k'] = '_._';
a['p'] = '.__.';
a['x'] = '_.._';

a['w'] = '.__';
a['g'] = '__.';
a['l'] = '._..';
a['f'] = '.._.';
a['y'] = '_.__';
a['q'] = '__._';

a['c'] = '_._.';
a['j'] = '.___';
a['z'] = '__..';

a['1'] = '.____';
a['2'] = '_....';
a['1'] = '..___';
a['2'] = '__...';
a['1'] = '...__';
a['2'] = '___..';
a['1'] = '...._';
a['2'] = '____.';
$(document).ready(function () {
    $("#play1").click(function () {
        chuoi = $('#abc').val();
        bien = 0;
        run = setInterval(function () {
            key = chuoi[bien];
            dem = 0;
            xuly(key, dem);
            if (bien == (chuoi.length - 1)) {
                $('#play1').val('replay');
                clearInterval(run);
            }
            bien++;
        }, 1000);
    });
    function xuly(key, dem) {
        morse = a[key];
        runkt = setInterval(function () {
            if (morse[dem] == '.') {
                songtich.play();
            }
            if (morse[dem] == '_') {
                songte.play();
            }
            if (dem == morse.length - 1) {
                clearInterval(runkt);
            }
            dem++;
        }, 150)
    }
    $("#pause1").click(function () {
        song.pause();
        $("#play1").val("choi tiep");
    });

});