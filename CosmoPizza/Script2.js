var KeyLR = 10;
var KeyUD = 0;
var BombR = 0;
var BombU = 0;
var BombW=0;

var BombR2 = 0;
var BombU2 = 0;
var BombW2=0;

var p2KeyLR = 10;
var p2KeyUD = 0;

var score = 0;
var score2 = 0;

  var audio = new Audio(); // Создаём новый элемент Audio
   // Указываем путь к звуку "клика"

window.captureEvents(Event.KEYPRESS);
window.onkeypress = pressed;
    function pressed(a) {
        if(a.which == 119) {

if (p2KeyUD==BombU) {document.getElementById('score').value=score+1;score++;  audio.autoplay = true; audio.src = 'mu1.mp3';};
if (KeyUD==BombU2) {document.getElementById('score2').value=score2+1;score2++; audio.autoplay = true; audio.src = 'mu2.mp3';};

KeyUD=KeyUD-40;
document.getElementById('tank').style.marginTop=KeyUD+"px";


 document.getElementById('Bomb').style.marginLeft=-0+"px";
 document.getElementById('Bomb').style.marginTop=-100+"px";

 if (KeyUD<40) {KeyUD=0};
  if (KeyUD>400) {KeyUD=400};
BombU=-1;


} else if (a.which == 115) {

if (p2KeyUD==BombU) {document.getElementById('score').value=score+1;score++;  audio.autoplay = true; audio.src = 'mu1.mp3';};
if (KeyUD==BombU2) {document.getElementById('score2').value=score2+1;score2++; audio.autoplay = true; audio.src = 'mu2.mp3';};

KeyUD=KeyUD+40;
document.getElementById('tank').style.marginTop=KeyUD+"px";


 document.getElementById('Bomb').style.marginLeft=0+"px";
  document.getElementById('Bomb').style.marginTop=-100+"px";

 if (KeyUD<40) {KeyUD=0};
  if (KeyUD>400) {KeyUD=400};
BombU=-1;


} else if (a.which == 32) {

 document.getElementById('Bomb').style.width=BombW+"px";
  BombR=KeyLR;
  BombU=KeyUD;
  document.getElementById('Bomb').style.marginTop=BombU+55+"px";
  document.getElementById('Bomb').style.width=50+"px";
BombW=650;
 document.getElementById('Bomb').style.marginLeft=BombW+"px";

}
else if (a.which == 56) {

if (p2KeyUD==BombU) {document.getElementById('score').value=score+1;score++;  audio.autoplay = true; audio.src = 'mu1.mp3';};
if (KeyUD==BombU2) {document.getElementById('score2').value=score2+1;score2++; audio.autoplay = true; audio.src = 'mu2.mp3';};

p2KeyUD=p2KeyUD-40;
document.getElementById('monstr').style.marginTop=p2KeyUD+"px";


 if (p2KeyUD<40) {p2KeyUD=0};
  if (p2KeyUD>400) {p2KeyUD=400};
  BombU2=-1;

}
else if (a.which == 53) {

if (p2KeyUD==BombU) {document.getElementById('score').value=score+1;score++;  audio.autoplay = true; audio.src = 'mu1.mp3';};
if (KeyUD==BombU2) {document.getElementById('score2').value=score2+1;score2++; audio.autoplay = true; audio.src = 'mu2.mp3';};

p2KeyUD=p2KeyUD+40;
document.getElementById('monstr').style.marginTop=p2KeyUD+"px";


 if (p2KeyUD<40) {p2KeyUD=0};
  if (p2KeyUD>400) {p2KeyUD=400};
  BombU2=-1;
   document.getElementById('Bomb2').style.marginLeft=600+"px";
  document.getElementById('Bomb2').style.marginTop=-100+"px";
}

else if (a.which == 43) {

 document.getElementById('Bomb2').style.width=BombW2+"px";
  BombR2=p2KeyLR;
  BombU2=p2KeyUD;
  document.getElementById('Bomb2').style.marginTop=BombU2+55+"px";
  document.getElementById('Bomb2').style.width=50+"px";
BombW2=50;
 document.getElementById('Bomb2').style.marginLeft=BombW2+"px";
}else if (a.which == 13) {
if (   document.getElementById('pause2').style.display!="block") { 
  document.getElementById('pause2').style.display="block";}
else {
  document.getElementById('pause2').style.display="none";
}
}
}

function func() {
if (   document.getElementById('pause2').style.display!="block") { 
  document.getElementById('pause2').style.display="block";}
else {
  document.getElementById('pause2').style.display="none";
}}

function b1() {
    document.getElementById('backg').style.backgroundImage="url('back.jpg')";}
    function b2() {
    document.getElementById('backg').style.backgroundImage="url('back2.jpg')";}
    function b3() {
    document.getElementById('backg').style.backgroundImage="url('back3.jpg')";}
    function b4() {
    document.getElementById('backg').style.backgroundImage="url('back4.jpg')";}

    function p1i() {
    document.getElementById('tank').src="tank_down2.png"}
        function p1i3() {
    document.getElementById('tank').src="tank_down3.png"}
            function p1i4() {
    document.getElementById('tank').src="tank_down4.png"}
        function p1i2() {
    document.getElementById('tank').src="tank_down.png"}
            function p2i() {
    document.getElementById('monstr').src="monstr2.png"}
                function p2i2() {
    document.getElementById('monstr').src="monstr3.png"}
                    function p2i3() {
    document.getElementById('monstr').src="monstr.png"}
                        function p2i4() {
    document.getElementById('monstr').src="monstr4.png"}


    function soundClick() {


}
//????????? ??????? ??????  ??????
//???????? ??????? ?????? 32

/*window.onkeypress = pressed;
    function pressed(s) {
        alert("?????? ???????, ?? ???????? ASCII: " + s.which);
    } 43 */







