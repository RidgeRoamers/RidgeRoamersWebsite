var ContactPage = function () {

    return {

        //Basic Map
        initMap: function () {
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    div: '#map',
                    scrollwheel: false,
                    lat: 47.1123123,
                    lng: -88.5488411
                });

                var marker = map.addMarker({
                    lat: 47.1123123,
                    lng: -88.5488411,
                    title: 'Ridge Roamers'
                });
            });
        },

        //Panorama Map
        initPanorama: function () {
            var panorama;
            $(document).ready(function () {
                panorama = GMaps.createPanorama({
                    el: '#panorama',
                    lat: 47.1123123,
                    lng: -88.5488411
                });
            });
        }

    };
}();