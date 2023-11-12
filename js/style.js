const directionsService = new google.maps.directions.DirectionsService();
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    mapId: "49f566b1e6cb4664",
    zoom: 13,
    center: { lat: 34.04924594193164, lng: -118.24104309082031 },
  });
  const trafficLayer = new google.maps.TrafficLayer();

  trafficLayer.setMap(map);
}

window.initMap = initMap;
function initMap() {
    new google.maps.Map(document.getElementById("map"), {
    mapId: "49f566b1e6cb4664",
        center: { lat: 19.053997039794922, lng: -104.31616973876953 },
        zoom: 12,
    });
    const trafficLayer = new google.maps.TrafficLayer();
    trafficLayer.setMap(map);
    }
    
    window.initMap = initMap;


    //Distancia "matrix"
    function initMap() {
      const bounds = new google.maps.LatLngBounds();
      const markersArray = [];
      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 55.53, lng: 9.4 },
        zoom: 10,
      });
      // initialize services
      const geocoder = new google.maps.Geocoder();
      const service = new google.maps.DistanceMatrixService();
      // build request
      const origin1 = { lat: 55.93, lng: -3.118 };
      const origin2 = "Greenwich, England";
      const destinationA = "Stockholm, Sweden";
      const destinationB = { lat: 50.087, lng: 14.421 };
      const request = {
        origins: [origin1, origin2],
        destinations: [destinationA, destinationB],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false,
      };
    
      // put request on page
      document.getElementById("request").innerText = JSON.stringify(
        request,
        null,
        2,
      );
      // get distance matrix response
      service.getDistanceMatrix(request).then((response) => {
        // put response
        document.getElementById("response").innerText = JSON.stringify(
          response,
          null,
          2,
        );
    
        // show on map
        const originList = response.originAddresses;
        const destinationList = response.destinationAddresses;
    
        deleteMarkers(markersArray);
    
        const showGeocodedAddressOnMap = (asDestination) => {
          const handler = ({ results }) => {
            map.fitBounds(bounds.extend(results[0].geometry.location));
            markersArray.push(
              new google.maps.Marker({
                map,
                position: results[0].geometry.location,
                label: asDestination ? "D" : "O",
              }),
            );
          };
          return handler;
        };
    
        for (let i = 0; i < originList.length; i++) {
          const results = response.rows[i].elements;
    
          geocoder
            .geocode({ address: originList[i] })
            .then(showGeocodedAddressOnMap(false));
    
          for (let j = 0; j < results.length; j++) {
            geocoder
              .geocode({ address: destinationList[j] })
              .then(showGeocodedAddressOnMap(true));
          }
        }
      });
    }
    
    function deleteMarkers(markersArray) {
      for (let i = 0; i < markersArray.length; i++) {
        markersArray[i].setMap(null);
      }
    
      markersArray = [];
    }
    
    window.initMap = initMap;
    //Modo oscuro.
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 40.674, lng: -73.945 },
          zoom: 12,
          styles: [
            { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
            { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
            { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
            {
              featureType: "administrative.locality",
              elementType: "labels.text.fill",
              stylers: [{ color: "#d59563" }],
            },
            {
              featureType: "poi",
              elementType: "labels.text.fill",
              stylers: [{ color: "#d59563" }],
            },
            {
              featureType: "poi.park",
              elementType: "geometry",
              stylers: [{ color: "#263c3f" }],
            },
            {
              featureType: "poi.park",
              elementType: "labels.text.fill",
              stylers: [{ color: "#6b9a76" }],
            },
            {
              featureType: "road",
              elementType: "geometry",
              stylers: [{ color: "#38414e" }],
            },
            {
              featureType: "road",
              elementType: "geometry.stroke",
              stylers: [{ color: "#212a37" }],
            },
            {
              featureType: "road",
              elementType: "labels.text.fill",
              stylers: [{ color: "#9ca5b3" }],
            },
            {
              featureType: "road.highway",
              elementType: "geometry",
              stylers: [{ color: "#746855" }],
            },
            {
              featureType: "road.highway",
              elementType: "geometry.stroke",
              stylers: [{ color: "#1f2835" }],
            },
            {
              featureType: "road.highway",
              elementType: "labels.text.fill",
              stylers: [{ color: "#f3d19c" }],
            },
            {
              featureType: "transit",
              elementType: "geometry",
              stylers: [{ color: "#2f3948" }],
            },
            {
              featureType: "transit.station",
              elementType: "labels.text.fill",
              stylers: [{ color: "#d59563" }],
            },
            {
              featureType: "water",
              elementType: "geometry",
              stylers: [{ color: "#17263c" }],
            },
            {
              featureType: "water",
              elementType: "labels.text.fill",
              stylers: [{ color: "#515c6d" }],
            },
            {
              featureType: "water",
              elementType: "labels.text.stroke",
              stylers: [{ color: "#17263c" }],
            },
          ],
        });
      }
      
      window.initMap = initMap;

      //marcadores en el mapa
function initMap() {
  // Create a map. Use the Gall-Peters map type.
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 0,
    center: { lat: 0, lng: 0 },
    mapTypeControl: false,
  });

  initGallPeters();
  map.mapTypes.set("gallPeters", gallPetersMapType);
  map.setMapTypeId("gallPeters");

  // Show the lat and lng under the mouse cursor.
  const coordsDiv = document.getElementById("coords");

  map.controls[google.maps.ControlPosition.TOP_CENTER].push(coordsDiv);
  map.addListener("mousemove", (event) => {
    coordsDiv.textContent =
      "lat: " +
      Math.round(event.latLng.lat()) +
      ", " +
      "lng: " +
      Math.round(event.latLng.lng());
  });
  // Add some markers to the map.
  map.data.setStyle((feature) => {
    return {
      title: feature.getProperty("name"),
      optimized: false,
    };
  });
  map.data.addGeoJson(cities);
}

let gallPetersMapType;

function initGallPeters() {
  const GALL_PETERS_RANGE_X = 800;
  const GALL_PETERS_RANGE_Y = 512;

  // Fetch Gall-Peters tiles stored locally on our server.
  gallPetersMapType = new google.maps.ImageMapType({
    getTileUrl: function (coord, zoom) {
      const scale = 1 << zoom;
      // Wrap tiles horizontally.
      const x = ((coord.x % scale) + scale) % scale;
      // Don't wrap tiles vertically.
      const y = coord.y;

      if (y < 0 || y >= scale) return "";
      return (
        "https://developers.google.com/maps/documentation/" +
        "javascript/examples/full/images/gall-peters_" +
        zoom +
        "_" +
        x +
        "_" +
        y +
        ".png"
      );
    },
    tileSize: new google.maps.Size(GALL_PETERS_RANGE_X, GALL_PETERS_RANGE_Y),
    minZoom: 0,
    maxZoom: 1,
    name: "Gall-Peters",
  });
  // Describe the Gall-Peters projection used by these tiles.
  gallPetersMapType.projection = {
    fromLatLngToPoint: function (latLng) {
      const latRadians = (latLng.lat() * Math.PI) / 180;
      return new google.maps.Point(
        GALL_PETERS_RANGE_X * (0.5 + latLng.lng() / 360),
        GALL_PETERS_RANGE_Y * (0.5 - 0.5 * Math.sin(latRadians)),
      );
    },
    fromPointToLatLng: function (point, noWrap) {
      const x = point.x / GALL_PETERS_RANGE_X;
      const y = Math.max(0, Math.min(1, point.y / GALL_PETERS_RANGE_Y));
      return new google.maps.LatLng(
        (Math.asin(1 - 2 * y) * 180) / Math.PI,
        -180 + 360 * x,
        noWrap,
      );
    },
  };
}

// GeoJSON, describing the locations and names of some cities.
const cities = {
  type: "FeatureCollection",
  features: [
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [-87.65, 41.85] },
      properties: { name: "Chicago" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [-149.9, 61.218] },
      properties: { name: "Anchorage" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [-99.127, 19.427] },
      properties: { name: "Mexico City" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [-0.126, 51.5] },
      properties: { name: "London" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [28.045, -26.201] },
      properties: { name: "Johannesburg" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [15.322, -4.325] },
      properties: { name: "Kinshasa" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [151.207, -33.867] },
      properties: { name: "Sydney" },
    },
    {
      type: "Feature",
      geometry: { type: "Point", coordinates: [0, 0] },
      properties: { name: "0°N 0°E" },
    },
  ],
};

window.initMap = initMap;

//Marcador
function insertarMarcador() {
  // Obtiene los datos del formulario
  const tipo = document.getElementById("tipo").value;
  const latitud = document.getElementById("latitud").value;
  const longitud = document.getElementById("longitud").value;
  const descripcion = document.getElementById("descripcion").value;

  // Crea un objeto marcador
  const marcador = {
    tipo: tipo,
    latitud: latitud,
    longitud: longitud,
    descripcion: descripcion,
  };

  // Agrega el marcador al mapa
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: latitud, lng: longitud },
    zoom: 12,
  });
  const marker = new google.maps.Marker({
    position: { lat: latitud, lng: longitud },
    map: map,
    icon: {
      url: "https://maps.gstatic.com/mapfiles/ms/icons/red-dot.png",
      scaledSize: new google.maps.Size(32, 32),
    },
    title: tipo,
  });

  // Agrega el marcador a la base de datos
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "insertar.php");
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.send(JSON.stringify(marcador));

  // Muestra un mensaje de confirmación
  alert("Marcador insertado correctamente");
}

 // Mostrar el modal al cargar la página (esto es solo un ejemplo, puedes ajustarlo según tus necesidades)
 window.onload = function() {
  showModal();
};

// Función para mostrar el modal
function showModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "flex";
}

// Función para minimizar la alerta
function minimizeAlert() {
  var modal = document.getElementById("myModal");
  var minimizedAlert = document.getElementById("minimizedAlert");

  modal.style.display = "none";
  minimizedAlert.style.display = "block";

  // Aquí puedes agregar lógica adicional, como cargar información específica en la alerta minimizada
}

// Función para abrir el modal desde la alerta minimizada
function openModal() {
  var modal = document.getElementById("myModal");
  var minimizedAlert = document.getElementById("minimizedAlert");

  modal.style.display = "flex";
  minimizedAlert.style.display = "none";
}

