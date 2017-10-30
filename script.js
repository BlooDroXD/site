var status = 1;
window.onload = function () {
    getTitle()
}

function msgClick() {
    var Rand = Math.random();
    if (Rand < .33) {
        alert("Кликни-ка еще разик");
    }
    else if (Rand > .33 && Rand < .66) {
        alert("Эта кнопка — самая замечательная кнопка в мире");
    }
    else {
        alert("Ну чего раскликался тут?!");
    }
}

function checkFunc(){
    if(status != 1)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function swap_gif1(source)
{
    var img = document.getElementById('pic1');
    img.getAttribute('src', false);
    img.setAttribute('src',source+ '.gif', false);
}
function swap_gif2(source)
{
    var img = document.getElementById('pic2');
    img.getAttribute('src', false);
    img.setAttribute('src',source+ '.gif', false);
}
function swap_gif3(source)
{
    var img = document.getElementById('pic3');
    img.getAttribute('src', false);
    img.setAttribute('src',source+ '.gif', false);
}
function swap_gif4(source)
{
    var img = document.getElementById('pic4');
    img.getAttribute('src', false);
    img.setAttribute('src',source+ '.gif', false);
}

function swap_png1(source) {
    {
        var img = document.getElementById('pic1');
        img.getAttribute('src', false);
        img.setAttribute('src',source+ '.png', false);
    }

}
function swap_png2(source) {
    {
        var img = document.getElementById('pic2');
        img.getAttribute('src', false);
        img.setAttribute('src',source+ '.png', false);
    }

}
function swap_png3(source) {
    {
        var img = document.getElementById('pic3');
        img.getAttribute('src', false);
        img.setAttribute('src',source+ '.png', false);
    }

}
function swap_gif5(source)
{
    var img = document.getElementById('pic5');
    img.getAttribute('src', false);
    img.setAttribute('src',source+ '.gif', false);
}
function swap_png4 (source)
{
    var img = document.getElementById('pic4');
    img.getAttribute('src', false);
    img.setAttribute('src',source+ '.png', false);
}
function getTitle() {
    var t = document.getElementById('retTitle');
    t.innerHTML = document.title;

}
