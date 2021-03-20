const player = document.getElementById("player");
document.getElementById("explore").onclick = function () {
    document.getElementById("overlay").style.display = "none";
    player.play();
};
document.getElementById("opening-btn").onclick = function () {
    player.pause();
};

document.getElementById("opening-mobile-btn").onclick = function () {
    player.pause();
};
