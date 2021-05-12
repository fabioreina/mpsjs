
        <!DOCTYPE html>
        <html>
        <head>
                <title>Marker Collision Management</title>
                <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                <link
                        href="https://unpkg.com/material-components-web@6.0.0/dist/material-components-web.css"
                        rel="stylesheet"
                />
                <script src="https://unpkg.com/material-components-web@6.0.0/dist/material-components-web.min.js"></script>
                <link
                        rel="stylesheet"
                        href="https://fonts.googleapis.com/icon?family=Material+Icons"
                />

                <style type="text/css">
                        :root {
                                --mdc-theme-primary: #1a73e8;
                                --mdc-theme-secondary: #rgb(225, 245, 254);
                                --mdc-theme-on-primary: #fff;
                                --mdc-theme-on-secondary: rgb(1, 87, 155);
                        }

                        .mdc-text-field--focused:not(.mdc-text-field--disabled)
                        .mdc-floating-label {
                                color: var(--mdc-theme-primary);
                        }

                        .mdc-select--focused .mdc-select__dropdown-icon {
                                background: url(data:image/svg+xml,%3Csvg%20width%3D%2210px%22%20height%3D%225px%22%20viewBox%3D%227%2010%2010%205%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%0A%20%20%20%20%3Cpolygon%20id%3D%22Shape%22%20stroke%3D%22none%22%20fill%3D%22%23000%22%20fill-rule%3D%22evenodd%22%20opacity%3D%220.54%22%20points%3D%227%2010%2012%2015%2017%2010%22%3E%3C%2Fpolygon%3E%0A%3C%2Fsvg%3E)
                                no-repeat center;
                        }

                        .mdc-select:not(.mdc-select--disabled).mdc-select--focused
                        .mdc-floating-label {
                                color: var(--mdc-theme-primary);
                        }

                        /* Optional: Makes the sample page fill the window. */
                        html,
                        body {
                                height: 100%;
                                margin: 0;
                                padding: 0;
                        }

                        #container {
                                height: 100%;
                                display: flex;
                        }

                        #sidebar {
                                flex-basis: 15rem;
                                flex-grow: 1;
                                padding: 1rem;
                                max-width: 30rem;
                                height: 100%;
                                box-sizing: border-box;
                                display: flex;
                        }

                        #map {
                                flex-basis: 0;
                                flex-grow: 4;
                                height: 100%;
                        }

                        .mdc-select,
                        .mdc-select__anchor,
                        .mdc-select__menu {
                                width: 100%;
                        }
                </style>
                <script>
                        // eslint-disable no-undef
                        let map;

                        // Initialize and add the map
                        function initMap() {
                            const myLatLng = { lat: -23.413, lng: -46.4445 ,lat: -22.413, lng: -41.4445 };
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 4,
                                center: myLatLng,
                            });
                            @foreach( $places as $key0 => $value0)
                            new google.maps.Marker({
                                position: { lat: {{$value0->latitude}}, lng: {{$value0->longitude}} },
                                map,
                                title: "{{$value0->name}}",
                            });
                            @endforeach
                        }
                </script>
        </head>
        <body>
<div id="container">
        <div id="map"></div>

        </div>
</div>

<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMVeTbKJlspdZpw8TE_GSjVk3cxPQi8WM&callback=initMap&libraries=&v=beta&map_ids=3a3b33f0edd6ed2a"
        defer
></script>
</body>
</html>


