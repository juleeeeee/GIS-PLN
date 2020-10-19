<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">

    <style>
        #map {
            height: 100%;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body> <!--isi dari web-->
    <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
    <div id="map"></div>
    <script>
        var map;
        function initMap() {
            //  ["nama tempat", Garis_Lintang, Garis_Bujur]
            var locations = [
                ['<a href="#">UID JABAR</a>', -6.9210317, 107.6059983, ''],
                ['<a href="#">UIP JBT 1</a>', -6.9382358, 107.625752, ''],
                ['<a href="#">UPP KIT JBT 2 (JATIGEDE)</a>', -6.7661387, 108.1737793, ''],
                ['<a href="#">UPP KIT JBT 4 (INDRAMAYU)</a>', -6.3812537, 108.1328283, ''],
                ['<a href="#">KANTOR INDUK UIT JBT</a>', -6.9500185, 107.6101556, ''],
                ['<a href="#">UPP KIT JBT 1 (CISOKAN)</a>', -6.9310121, 107.3556011, ''],
                ['<a href="#">UPP KIT JBT 3 (BANJAR)</a>', -7.3743547, 108.5393569, ''],
                ['<a href="#">KANTOR INDUK PUSHARLIS</a>', -6.9171532, 107.6383925, ''],
                // ['<a href="#">UP2W3 BANDUNG</a>', #, #, ''],
                // ['<a href="#">UP2W3 DAYEUHKOLOT</a>', #, #, ''],
                // ['<a href="#">BIP HUKUM</a>', #, #, ''],
                ['<a href="#">SPI REGIONAL 9</a>', -6.9081938, 107.6291969, ''],
                ['<a href="#">UP2B JABAR</a>', -6.9505903, 107.6091619, ''],
                ['<a href="#">UPT CIREBON</a>', -6.735840, 108.540533, ''],
                ['<a href="#">UP3 BANDUNG</a>', -6.949046, 107.611526, ''],
                ['<a href="#">UPT KARAWANG</a>', -6.324691, 107.291614, ''],
                ['<a href="#">UP3 TASIKMALAYA</a>', -7.316097, 108.230805, ''],
                ['<a href="#">UP3 CIREBON</a>', -6.710954, 108.540380, ''],
                ['<a href="#">UP3 GARUT</a>', -7.194770, 107.886004, ''],
                ['<a href="#">UP3 INDRAMAYU</a>', -6.324870, 108.322874, ''],
                ['<a href="#">UP3 CIMAHI</a>', -6.870800, 107.536443, ''],
                ['<a href="#">UP3 SUMEDANG</a>', -6.837632, 107.916750, ''],
                ['<a href="#">UP3 MAJALAYA</a>', -7.005999, 107.625804, ''],
                ['<a href="#">UP3 PURWAKARTA</a>', -6.554642, 107.445771, ''],
                ['<a href="#">UP3 CIANJUR</a>', -6.813643, 107.136780, ''],
                ['<a href="#">UP3 KARAWANG</a>', -6.305648, 107.292176, ''],
                ['<a href="#">UP3 SUKABUMI</a>', -6.913535, 106.932346, ''],
                ['<a href="#">UP2D JABAR</a>', -6.919991, 107.609172, ''],
                ['<a href="#">UPT BANDUNG</a>', -6.951102, 107.613667, ''],
                ['<a href="#">ULP CIREBON KOTA</a>', -6.721304, 108.572034, ''],
                ['<a href="#">ULP SUMBER</a>', -6.763419, 108.479861, ''],
                ['<a href="#">ULP CILEDUG</a>', -6.906633, 108.749251, ''],
                ['<a href="#">ULP CILIMUS</a>', -6.877463, 108.496187, ''],
                ['<a href="#">ULP KUNINGAN</a>', -6.976452, 108.484773, ''],
                ['<a href="#">ULP INDRAMAYU KOTA</a>', -6.325692, 108.321739, ''],  
                ['<a href="#">ULP JATIBARANG</a>', -6.475804, 108.303824, ''],
                // ['<a href="#">ULP HAURGEULIS</a>', #, #, ''],
                ['<a href="#">ULP CIKEDUNG</a>', -6.482245, 108.155048, ''],
                ['<a href="#">ULP SUMEDANG KOTA</a>', -6.856629, 107.920256, ''],
                ['<a href="#">ULP MAJALENGKA</a>', -6.830076, 108.206182, ''],
                ['<a href="#">ULP TANJUNGSARI</a>', -6.896137, 107.807788, ''],
                ['<a href="#">ULP JATIWANGI</a>', -6.726799, 108.271844, ''],
                // ['<a href="#">ULP PURWAKARTA KOTA</a>', #, #, ''],
                ['<a href="#">ULP SUBANG</a>', -6.562945, 107.768192, ''],
                ['<a href="#">ULP PAMANUKAN</a>', -6.298475, 107.820755, ''],
                ['<a href="#">ULP PLERED</a>', -6.638025, 107.406769, ''],
                ['<a href="#">ULP PAGADEN</a>', -6.461013, 107.810787, ''],
                ['<a href="#">ULP KARAWANG KOTA</a>', -6.307695, 107.292720, ''],
                ['<a href="#">ULP CIKAMPEK</a>', -6.412000, 107.464407, ''],
                ['<a href="#">ULP KOSAMBI</a>', -6.371540, 107.378778, ''],
                // ['<a href="#">ULP PRIMA KARAWANG</a>', #, #, ''],
                ['<a href="#">ULP RENGASDENGKLOK</a>', -6.164509, 107.297951, ''],
                ['<a href="#">BC HAR BEKASI</a>', -6.239115, 106.993918, ''],
                // ['<a href="#">BC HAR CIREBON</a>', #, #, ''],
                ['<a href="#">BC HAR BANDUNG</a>', -6.919991, 107.609172, ''],
                ['<a href="#">BC HAR TASIKMALAYA</a>', -6.919991, 107.609172, ''],
                ['<a href="#">BC HAR KARAWANG</a>', -6.919991, 107.609172, ''],
                ['<a href="#">BC HAR BOGOR</a>', -6.919991, 107.609172, ''],
                ['<a href="#">ULTG CIREBON</a>', -6.919991, 107.609172, ''],
                ['<a href="#">ULTG GARUT</a>', -7.2684924, 107.9109375, ''],
                ['<a href="#">GI CIAMIS</a>', -7.3305337, 108.3405525, ''],
                ['<a href="#">GI CIKEDUNG</a>', -6.4760055, 108.1305655, ''],
                ['<a href="#">GI DARAJAT</a>', -7.2149017, 107.7447098, ''],
                ['<a href="#">GI HAURGEULIS</a>', -6.4395846, 107.9430015, ''],
                ['<a href="#">GI INDRAMAYU</a>', -6.3453051, 108.3111198, ''],
                ['<a href="#">GI JATIBARANG</a>', -6.4780561, 108.3422664, ''],
                ['<a href="#">GI KADIPATEN</a>', -6.7914135, 108.1725177, ''],
                ['<a href="#">GI KAMOJANG</a>', -7.1381998, 107.7820079, ''],
                ['<a href="#">GI KARANGNUNGGAL</a>', -7.6361597,108.1251585, ''],
                ['<a href="#">GI KUNINGAN</a>', -6.9825838,108.4081205, ''],
                ['<a href="#">GI MALANGBONG</a>', -7.060093,108.0832054, ''],
                ['<a href="#">GI PAMEUNGPEUK</a>', -7.6464816,107.7068107, ''],
                ['<a href="#">GI PANGANDARAN</a>', -7.6723981,108.6855997, ''],
                ['<a href="#">GI PARAKAN</a>', -6.9658871,107.8147837, ''],
                ['<a href="#">GI SUMADRA</a>', -7.3821701,107.7205845, ''],
                ['<a href="#">GI TASIKMALAYA</a>', -7.3522101,108.2067945, ''],
                ['<a href="#">GITET TASIKMALAYA</a>', -7.4025138,108.2325712, ''],
                ['<a href="#">ULTG PURWAKARTA</a>', -6.7189257,106.9961391, ''],
                // ['<a href="#">ULTG KARAWANG</a>', #, #, ''],

                // rama >>

                ['<a href="#">ULP BANDUNG UTARA</a>', -6.878882, 107.597320, ''],
                // ['<a href="#">ULP BANDUNG PRIMA</a>', #, #, ''],
                // ['<a href="#">ULP BANDUNG SELATAN</a>', #, #, ''],
                ['<a href="#">ULP UJUNG BERUNG</a>', -6.913162, 107.694964, ''],
                ['<a href="#">ULP BANDUNG BARAT</a>', -6.908571, 107.578980, ''],
                ['<a href="#">ULP BANDUNG TIMUR</a>', -6.899004, 107.641124, ''],
                ['<a href="#">ULP CIJAURA</a>', -6.953733, 107.640498, ''],
                ['<a href="#">ULP KOPO</a>', -6.933816, 107.571436, ''],
                ['<a href="#">ULP TASIK KOTA</a>', -7.327345, 108.222576, ''],
                ['<a href="#">ULP RAJAPOLAH</a>', -7.227009, 108.190068, ''],
                ['<a href="#">ULP BANJAR</a>', -7.371623, 108.535791, ''],
                ['<a href="#">ULP PANGANDARAN</a>', -7.683058, 108.657872, ''],
                ['<a href="#">ULP SINGAPARNA</a>', -7.346039, 108.109535, ''],
                ['<a href="#">ULP CIAMIS</a>', -7.326155, 108.348361, ''],
                ['<a href="#">ULP KARANG NUNGGAL</a>', -7.631998, 108.132749, ''],
                // ['<a href="#">ULP GARUT KOTA</a>', #, #, ''],
                ['<a href="#">ULP CIKAJANG</a>', -7.325848, 107.794917, ''],
                ['<a href="#">ULP CIBATU</a>', -7.100192, 107.981051, ''],
                ['<a href="#">ULP LELES</a>', -7.100126, 107.898495, ''],
                ['<a href="#">ULP PAMEMPEUK</a>', -7.646572, 107.708589, ''],
                ['<a href="#">ULP CIMAHI KOTA</a>', -6.870650, 107.536527, ''],
                ['<a href="#">ULP LEMBANG</a>', -6.818264, 107.622003, ''],
                ['<a href="#">ULP PADALARANG</a>', -6.838789, 107.487541, ''],
                ['<a href="#">ULP CILILIN</a>', -6.947857, 107.467168, ''],
                ['<a href="#">ULP RAJAMANDALA</a>', -6.832997, 107.346741, ''],
                ['<a href="#">ULP PRIMA CIBABAT</a>', -6.9093641,107.5363552, ''],
                ['<a href="#">ULP PADALARANG</a>', -6.9091911,107.5363552, ''],
                ['<a href="#">ULP CILILIN</a>', -6.9090182,107.5363552, ''],
                ['<a href="#">ULP BANJARAN</a>', -7.0356838,107.5915654, ''],
                ['<a href="#">ULP RANCAEKEK</a>', -6.9590957,107.7625523, ''],
                ['<a href="#">ULP PRIMA MAJALAYA</a>', -6.9589148,107.694701, ''],
                ['<a href="#">ULP BALEENDAH</a>', -7.0062066,107.6235505, ''],
                ['<a href="#">ULP MAHKOTA (CIPARAY)</a>', -7.0351997,107.7097523, ''],
                ['<a href="#">ULP CIANJUR KOTA</a>', -6.8136279,107.1280221, ''],
                ['<a href="#">ULP SUKANEGARA</a>', -7.0983098,107.1302984, ''],
                ['<a href="#">ULP TANGERANG</a>', -6.2001219,106.6421796, ''],
                ['<a href="#">ULP CIPANAS</a>', -6.7347405,107.0405859, ''],
                // ['<a href="#">ULP MANDE</a>', #, #, ''],
                ['<a href="#">ULP CIBADAK</a>', -6.8964184,106.8171209, ''],
                ['<a href="#">ULP PELABUHAN RATU</a>', -6.9870122,106.5534487, ''],
                ['<a href="#">ULP CIKEMBAR</a>', -6.9512679,106.7672778, ''],
                ['<a href="#">ULP SUKARAJA</a>', -6.9175575,106.9629706, ''],
                ['<a href="#">ULP SUKABUMI KOTA</a>', -6.9205228,106.9298781, ''],
                ['<a href="#">ULP CICURUG</a>', -6.7996716,106.7732205, ''],
                ['<a href="#">ULTG BANDUNG UTARA</a>', -6.8848177,107.6114281, ''],
                ['<a href="#">ULTG BANDUNG SELATAN</a>', -7.0573642,107.5683252, ''],
                ['<a href="#">GI TASIKMALAYA</a>', -7.3517347,108.2055755, ''],
                ['<a href="#">ULTG BANDUNG TIMUR</a>', -6.9658598,107.8141064, ''],
                ['<a href="#">GIS SAGULING</a>', -6.8419592,107.3617491, ''],
                ['<a href="#">GIS CIBABAT BARU</a>', -6.8859352,107.5459709, ''],
                ['<a href="#">GIS GEDEBAGE</a>', -6.9597426,107.7024548, ''],
                
                // rama >>

            ];

            map = new google.maps.Map(document.getElementById('map'),
                {
                    center: {lat:-6.8727539, lng:107.8247303},
                    zoom:10
                }
            );
            var marker;
            var infowindow = new google.maps.InfoWindow();

            for (var i = 0; i <locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng
                    (locations[i][1],locations[i][2]),
                        map : map
                });
                google.maps.event.addListener(marker,'click',
                    (function(marker, i){
                        return function(){
                            infowindow.setContent(""+locations[i][0]+"<br>"+locations[i][4]);
                            infowindow.open(map, marker);
                        }
                    }) (marker, i));
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?=AIzaSyAXwrlvlTV0lb3-Dqn137BK1QbjF5wY-a0&callback&callback=initMap" async defer></script>
</body>
</html>
