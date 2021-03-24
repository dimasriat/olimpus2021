// MENYIAPKAN PANORAMA
const panorama1 = addPanorama("1.jpg");
const panorama2 = addPanorama("2.jpg");
const panorama3 = addPanorama("3.jpg");
const panorama4 = addPanorama("4.jpg");
const panorama5 = addPanorama("5.jpg");
const panorama6 = addPanorama("6.jpg");
const panorama7 = addPanorama("7.jpg");

// MENAMBAHKAN FLOOR KE PANORAMA
addFloor(panorama1, panorama2, -2000, -1500, 3000); //1 -> 2
addFloor(panorama2, panorama3, -1750, -1500, 2250); //1 -> 2