<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        pink = false;
        var i = [];

        var newNumber = false;
        $(document).ready(function () {
            $("#next").on("click", function () {
                $("#next").html("Next");
                if (i.length < 40) {
                    while (newNumber === false) {
                        card = Math.floor((Math.random() * 40) + 1);
                        if (i.indexOf(card) === -1) { newNumber = true; } else { newNumber = false; }
                    }
                    i.push(card);
                    newNumber = false;
                    $("#card").html($("#" + card).html());
                } else {
                    $("#card").html("Finished");
                    $("#next").html("Restart");
                    i = [];
                }

            });
            
            $("#color").on("click", function () {
                if (pink === false) {
                    $("#main").css({ "background-color": "pink" });
                    pink = true;
                } else {
                    $("#main").css({ "background-color": "#ffa500" });

                }
            });
        });
        function playSound(sound) {
            var sound = document.getElementById(sound);

            sound.play();
        }

    </script>
    <title>Site words</title>
</head>

<body>
    <a id="next">Start</a>
    <div id='color'></div>
    <div id='main'>
        <div id='card'></div>

    </div>

    <div id='1' class='word'>
        <audio id="audio1" src="sounds/i.m4a"></audio>
        <a onClick='playSound("audio1")'>I</a>
    </div>
    <div id='2' class='word'> <audio id="audio2" src="sounds/the.m4a"></audio> <a onClick='playSound("audio2")'>the</a>
    </div>
    <div id='3' class='word'> <audio id="audio3" src="sounds/see.m4a"></audio> <a onClick='playSound("audio3")'>see</a>
    </div>
    <div id='4' class='word'> <audio id="audio4" src="sounds/we.m4a"></audio> <a onClick='playSound("audio4")'>we</a>
    </div>
    <div id='5' class='word'> <audio id="audio5" src="sounds/a.m4a"></audio> <a onClick='playSound("audio5")'>a</a>
    </div>
    <div id='6' class='word'> <audio id="audio6" src="sounds/like.m4a"></audio> <a onClick='playSound("audio6")'>like</a>
    </div>
    <div id='7' class='word'> <audio id="audio7" src="sounds/and.m4a"></audio> <a onClick='playSound("audio7")'>and</a>
    </div>
    <div id='8' class='word'> <audio id="audio8" src="sounds/you.m4a"></audio> <a onClick='playSound("audio8")'>you</a>
    </div>
    <div id='9' class='word'> <audio id="audio9" src="sounds/my.m4a"></audio> <a onClick='playSound("audio9")'>my</a>
    </div>
    <div id='10' class='word'> <audio id="audio10" src="sounds/to.m4a"></audio> <a onClick='playSound("audio10")'>to</a>
    </div>
    <div id='11' class='word'> <audio id="audio11" src="sounds/go.m4a"></audio> <a onClick='playSound("audio11")'>go</a>
    </div>
    <div id='12' class='word'> <audio id="audio12" src="sounds/do.m4a"></audio> <a onClick='playSound("audio12")'>do</a>
    </div>
    <div id='13' class='word'> <audio id="audio13" src="sounds/are.m4a"></audio> <a onClick='playSound("audio13")'>are</a>
    </div>
    <div id='14' class='word'> <audio id="audio14" src="sounds/little.m4a"></audio> <a onClick='playSound("audio14")'>little</a>
    </div>
    <div id='15' class='word'> <audio id="audio15" src="sounds/have.m4a"></audio> <a onClick='playSound("audio15")'>have</a>
    </div>
    <div id='16' class='word'> <audio id="audio16" src="sounds/want.m4a"></audio> <a onClick='playSound("audio16")'>want</a>
    </div>
    <div id='17' class='word'> <audio id="audio17" src="sounds/with.m4a"></audio> <a onClick='playSound("audio17")'>with</a>
    </div>
    <div id='18' class='word'> <audio id="audio18" src="sounds/she.m4a"></audio> <a onClick='playSound("audio18")'>she</a>
    </div>
    <div id='19' class='word'> <audio id="audio19" src="sounds/of.m4a"></audio> <a onClick='playSound("audio19")'>of</a>
    </div>
    <div id='20' class='word'> <audio id="audio20" src="sounds/here.m4a"></audio> <a onClick='playSound("audio20")'>here</a>
    </div>
    <div id='21' class='word'> <audio id="audio21" src="sounds/he.m4a"></audio> <a onClick='playSound("audio21")'>he</a>
    </div>
    <div id='22' class='word'> <audio id="audio22" src="sounds/was.m4a"></audio> <a onClick='playSound("audio22")'>was</a>
    </div>
    <div id='23' class='word'> <audio id="audio23" src="sounds/they.m4a"></audio> <a onClick='playSound("audio23")'>they</a>
    </div>
    <div id='24' class='word'> <audio id="audio24" src="sounds/me.m4a"></audio> <a onClick='playSound("audio24")'>me</a>
    </div>
    <div id='25' class='word'> <audio id="audio25" src="sounds/is.m4a"></audio> <a onClick='playSound("audio25")'>is</a>
    </div>
    <div id='26' class='word'> <audio id="audio26" src="sounds/for.m4a"></audio> <a onClick='playSound("audio26")'>for</a>
    </div>
    <div id='27' class='word'> <audio id="audio27" src="sounds/said.m4a"></audio> <a onClick='playSound("audio27")'>said</a>
    </div>
    <div id='28' class='word'> <audio id="audio28" src="sounds/this.m4a"></audio> <a onClick='playSound("audio28")'>this</a>
    </div>
    <div id='29' class='word'> <audio id="audio29" src="sounds/too.m4a"></audio> <a onClick='playSound("audio29")'>too</a>
    </div>
    <div id='30' class='word'> <audio id="audio30" src="sounds/where.m4a"></audio> <a onClick='playSound("audio30")'>where</a>
    </div>
    <div id='31' class='word'> <audio id="audio31" src="sounds/who.m4a"></audio> <a onClick='playSound("audio31")'>who</a>
    </div>
    <div id='32' class='word'> <audio id="audio32" src="sounds/what.m4a"></audio> <a onClick='playSound("audio32")'>what</a>
    </div>
    <div id='33' class='word'> <audio id="audio33" src="sounds/has.m4a"></audio> <a onClick='playSound("audio33")'>has</a>
    </div>
    <div id='34' class='word'> <audio id="audio34" src="sounds/come.m4a"></audio> <a onClick='playSound("audio34")'>come</a>
    </div>
    <div id='35' class='word'> <audio id="audio35" src="sounds/help.m4a"></audio> <a onClick='playSound("audio35")'>help</a>
    </div>
    <div id='36' class='word'> <audio id="audio36" src="sounds/play.m4a"></audio> <a onClick='playSound("audio36")'>play</a>
    </div>
    <div id='37' class='word'> <audio id="audio37" src="sounds/good.m4a"></audio> <a onClick='playSound("audio37")'>good</a>
    </div>
    <div id='38' class='word'> <audio id="audio38" src="sounds/does.m4a"></audio> <a onClick='playSound("audio38")'>does</a>
    </div>
    <div id='39' class='word'> <audio id="audio39" src="sounds/can.m4a"></audio> <a onClick='playSound("audio39")'>can</a>
    </div>
    <div id='40' class='word'> <audio id="audio40" src="sounds/look.m4a"></audio> <a onClick='playSound("audio40")'>look</a>
    </div>


</body>

</html>