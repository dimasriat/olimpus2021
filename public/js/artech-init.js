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
function addPanorama(image) {
    const panorama = new PANOLENS.ImagePanorama("/img/artech_assets/panorama/" + image);
	viewer.add(panorama);
	return panorama;
}
const viewer = new PANOLENS.Viewer({
    autoHideInfospot: false,
});