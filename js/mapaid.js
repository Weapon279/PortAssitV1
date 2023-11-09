function initMap() {
    new google.maps.Map(document.getElementById("map"), {
    mapId: "49f566b1e6cb4664",
        center: { lat: 48.85, lng: 2.35 },
        zoom: 12,
    });
    }
    
    window.initMap = initMap;