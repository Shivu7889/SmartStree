<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Center map based on visitor's location</title>
  <script src="https://cdn.maptiler.com/maplibre-gl-js/v2.4.0/maplibre-gl.js"></script>
  <link href="https://cdn.maptiler.com/maplibre-gl-js/v2.4.0/maplibre-gl.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    #map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <div id="map"></div>
  <script>
      const key = 'Uh2v4RGwAvQy83y3uqvV';
      const map = new maplibregl.Map({
        container: 'map', // container's id or the HTML element in which MapLibre GL JS will render the map
        style: `https://api.maptiler.com/maps/streets-v2/style.json?key=${key}`, // style URL
        center: [16.62662018, 49.2125578], // starting position [lng, lat]
        zoom: 10, // starting zoom
      });

      fetch(`https://api.maptiler.com/geolocation/ip.json?key=${key}`)
      .then((response) => response.json())
      .then((data) => {
      const userLngLat = [data.longitude, data.latitude];
      map.jumpTo({
        center: userLngLat,
        zoom: 12
      });
      const marker = new maplibregl.Marker()
        .setLngLat(userLngLat)
        .addTo(map);
      });


      map.addControl(new maplibregl.NavigationControl(), 'top-right');

      map.addControl(
        new maplibregl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        })
    );
  </script>
</body>
</html>