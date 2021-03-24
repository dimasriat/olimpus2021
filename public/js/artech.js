// MENYIAPKAN PANORAMA
const panorama1 = addPanorama("1.jpg");
const panorama6 = addPanorama("6.jpg");
const panorama4 = addPanorama("4.jpg");
const panorama2 = addPanorama("2.jpg");
const panorama3 = addPanorama("3.jpg");
const panorama5 = addPanorama("5.jpg");
const panorama7 = addPanorama("7.jpg");
const panorama8 = addPanorama("8.jpg");
const panorama9 = addPanorama("9.jpg");

// MENAMBAHKAN FLOOR KE PANORAMA
addFloor(panorama1, panorama2, 500, -1750, 4250);
addFloor(panorama1, panorama9, -3000, -1000, -1250);
addFloor(panorama2, panorama3, 3000, -1750, 2500);
addFloor(panorama3, panorama4, 2750, -1500, -250);
addFloor(panorama4, panorama5, 1500, -1750, -2750);
addFloor(panorama5, panorama6, 1000, -1750, 3500);
addFloor(panorama6, panorama7, 750, -1750, 2000);
addFloor(panorama7, panorama8, -2000, -1500, -3000);
addFloor(panorama8, panorama9, -750, -1000, 4000);
addFloor(panorama9, panorama1, 500, -1000, -3250);

//MENAMBAHKAN ART
addArt(panorama1, "1-1", -2750, -1000, 2500);
