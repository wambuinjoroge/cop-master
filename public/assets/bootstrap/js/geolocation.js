function determineLocation() {
if (Modernizr.geolocation) {
navigator.geolocation.getCurrentPosition(displayOnMap);
}
else {
// geolocation is not supported in this browser
}
}