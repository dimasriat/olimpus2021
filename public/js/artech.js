// MENYIAPKAN PANORAMA
const panorama1 = addPanorama("1.jpg");
const panorama2 = addPanorama("2.jpg");

// MENAMBAHKAN FLOOR KE PANORAMA
addFloor(panorama1, panorama2, -6000, -2000, -1000);
addFloor(panorama2, panorama1, 4500, -2500, 2000);

// MENAMBAHKAN INFOSPOT KE PANORAMA
addArt(panorama1, "mazza.jpg", 0, 0, -2000);
addArt(panorama1, "rendi1.jpg", -2000, 0, -2000);
addArt(panorama2, "mazza.jpg", 0, 0, -2000);