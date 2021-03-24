// FUNGSI HELPER
let descmode = false;
const artOverlay = document.getElementById("overlay");
const artImage = document.getElementById("art-image");
const descOverlay = document.getElementById("desc-overlay");
document.getElementById("desc-overlay").onclick = function () {
    descmode = !descmode;
    descOverlay.innerHTML = !descmode ? "Show description" : "Show art";
    artImage.src = artImage.getAttribute(descmode ? "data-desc" : "data-art");
};
document.getElementById("zoom-overlay").onclick = function () {
    window.open(artImage.src, "_blank");
};
document.getElementById("close-overlay").onclick = function () {
    descmode = false;
    artOverlay.style.display = "none";
    descOverlay.innerHTML = !descmode ? "Show description" : "Show art";
};
function addArt(panorama, art, x, y, z) {
    const infospot = new PANOLENS.Infospot();
    infospot.position.set(x, y, z);
    infospot.addEventListener("click", function () {
        artOverlay.style.display = "flex";
        const folder = "/img/artech_assets/art/";
        artImage.setAttribute("data-art", folder + art);
        artImage.setAttribute("data-desc", folder + "desc-" + art);
        artImage.src = artImage.getAttribute("data-art");
    });

    panorama.add(infospot);
}
function addFloor(p1, p2, x, y, z) {
    p1.link(p2, new THREE.Vector3(x, y, z));
}
function addHelper(panorama) {
    const helper = new PANOLENS.Infospot();
    helper.position.set(0, -1000, -3000);
    helper.addHoverText(`${helper.position.x} ${helper.position.y} ${helper.position.z}`);
    window.addEventListener("keydown", function (e) {
        const distance = 250;
        if (e.key === "w") {
            helper.position.y += distance;
        }
        if (e.key === "s") {
            helper.position.y -= distance;
        }
        if (e.key === "a") {
            const sign = helper.position.z < 0 ? 1 : -1;
            helper.position.x -= sign * distance;
        }
        if (e.key === "d") {
            const sign = helper.position.z < 0 ? 1 : -1;
            helper.position.x += sign * distance;
        }
        if (e.key === "e") {
            helper.position.z += distance;
        }
        if (e.key === "q") {
            helper.position.z -= distance;
        }
        if (e.key === "x") {
            helper.hide();
            helper.position.set(0, -1000, -3000);
        }
        if (e.key === "z") {
            helper.show();
            helper.focus();
        }
        helper.setText(`${helper.position.x} ${helper.position.y} ${helper.position.z}`);
    });
    helper.hide();
    panorama.add(helper);
}
function addPanorama(image) {
    const panorama = new PANOLENS.ImagePanorama(
        "/img/artech_assets/panorama/" + image
    );
    addHelper(panorama);
    viewer.add(panorama);
    return panorama;
}
const viewer = new PANOLENS.Viewer({
    autoHideInfospot: false,
});
