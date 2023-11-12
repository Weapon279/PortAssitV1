function initMap(): void {
  
  const bounds = new google.maps.LatLngBounds();
  const markersArray: google.maps.Marker[] = [];
  const map = new google.maps.Map(
    
    document.getElementById("map") as HTMLElement,
    {
      mapId: "49f566b1e6cb4664",
      zoom: 13,
      center: { lat: 19.053997039794922, lng: -104.31616973876953 },
      
    }
  );

  const trafficLayer = new google.maps.TrafficLayer();

  trafficLayer.setMap(map);
}





declare global {
  interface Window {
    initMap: () => void;
  }
}
window.initMap = initMap;
