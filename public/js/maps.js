const player = document.getElementById("player");
document.getElementById("explore").onclick = function () {
    document.getElementById("overlay").style.display = "none";
    player.play()
};
