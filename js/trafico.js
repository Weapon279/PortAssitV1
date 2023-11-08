    // Importar las bibliotecas necesarias
    import { axios } from "axios";
import { DirectionsRenderer, DirectionsService, GoogleMap } from "google-maps-react";
    
    // Definir la clase de la aplicación
    class App extends React.Component {
      constructor(props) {
        super(props);
    
        // Inicializar las variables
        this.state = {
          map: null,
          directionsRenderer: null,
          directionsService: null,
          origin: null,
          destination: null,
          routes: [],
          congestions: [],
        };
      }
    
      // Iniciar el mapa
      componentDidMount() {
        // Crear el mapa
        this.map = new GoogleMap({
          center: { lat: 20.663566, lng: -103.349168 },
          zoom: 13,
          mapTypeId: "roadmap",
        });
    
        // Crear el renderizador de indicaciones
        this.directionsRenderer = new DirectionsRenderer({
          map: this.map,
        });
    
        // Crear el servicio de indicaciones
        this.directionsService = new DirectionsService();
    
        // Obtener la ubicación actual del usuario
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition((position) => {
            this.setState({ origin: { lat: position.coords.latitude, lng: position.coords.longitude } });
          });
        }
      }
    
      // Buscar un lugar
      handlePlaceSearch(place) {
        if (place.geometry) {
          this.setState({
            destination: place.geometry.location,
          });
        }
      }
    
      // Obtener las indicaciones
      handleGetDirections() {
        this.directionsService
          .getRoute({
            origin: this.state.origin,
            destination: this.state.destination,
          })
          .then((response) => {
            this.setState({
              routes: response.routes,
            });
    
            // Obtener la información de tráfico
            this.getCongestionInformation();
          });
      }
    
      // Obtener la información de tráfico
      getCongestionInformation() {
        this.routes.forEach((route) => {
          this.directionsService
            .getTrafficForRoute({
              route: route,
            })
            .then((response) => {
              this.setState({
                congestions: [...this.state.congestions, {
                  routeId: route.id,
                  date: new Date(),
                  level: response.trafficPolylines[0].trafficLevel,
                  alternateRoute: response.alternativeRoutes[0] ? response.alternativeRoutes[0].polyline : null,
                }],
              });
    
              // Registrar la información de la ruta en la base de datos
              axios.post("http://localhost:5173/rutas", {
                usuarioId: 1,
                puntoInicio: this.state.origin.lat + "," + this.state.origin.lng,
                puntoFinal: this.state.destination.lat + "," + this.state.destination.lng,
                duracion: route.duration,
                trafico: response.trafficPolylines[0].trafficLevel,
              });
            });
        });
      }
    
    
    // Renderizar la aplicación
    ReactDOM.render(<App />, document.getElementById("root"));
    
    let map;
    let directionsService;
    let directionsRenderer;
    
    function initMap() {
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    
      map = new google.maps.Map(document.getElementById("map"),
        center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
      });
    
      directionsRenderer.setMap(map);
    }
    
    window.initMap = initMap;
    
    let placesService = new google.maps.places.PlacesService(map);
    let request = {
    query: 'Nombre del lugar',
      fields: ['name', 'geometry'],
    };
    
    placesService.findPlaceFromQuery(request, function(results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        let place = results[0];
      let marker = new google.maps.Marker({
        map,
        position: place.geometry.location,
      });
      }
    });
    
    
    let request = {
     origin: 'Origen',
     destination: 'Destino',
     travelMode: 'DRIVING',
     provideRouteAlternatives: true,
    };
    
    directionsService.route(request, function(result, status) {
     if (status === 'OK') {
       directionsRenderer.setDirections(result);
     }
    });
    
    directionsService.route(request, function(result, status) {
     if (status === 'OK') {
       for (let i = 0; i < result.routes.length; i++) {
         let route = result.routes[i];
         console.log('Ruta ' + (i + 1) + ': ' + route.legs[0].duration.text);
         console.log('Tráfico: ' + route.legs[0].traffic_speed_entry);
       }
     }
    });
    
    let mysql = require('mysql');
    let connection = mysql.createConnection({
     host: 'localhost',
     user: 'portu',
     password: 'portu123',```
