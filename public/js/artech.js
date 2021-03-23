// MENYIAPKAN PANORAMA
const panorama3 = addPanorama("3.jpg");
const panorama2 = addPanorama("2.jpg");
const panorama1 = addPanorama("1.jpg");
const panorama4 = addPanorama("4.jpg");
const panorama5 = addPanorama("5.jpg");
const panorama6 = addPanorama("6.jpg");
const panorama7 = addPanorama("7.jpg");

// MENAMBAHKAN FLOOR KE PANORAMA
addFloor(panorama1, panorama2, 0, -1500, 5000); //1 -> 2
addFloor(panorama2, panorama1, -3000, -1500, 1000); //2 -> 1

addFloor(panorama2, panorama3, 3000, -1500, 3000); //2 -> 3
addFloor(panorama3, panorama2, -500, -1500, 4000); //3 -> 2

// MENAMBAHKAN ART KE PANORAMA
addArt(panorama3, "mazza.jpg", 0, 0, -3000);
