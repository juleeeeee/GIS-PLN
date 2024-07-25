<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="assets/img/ico.jpg" rel="icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        body {
            background-image: url('assets/img/bg.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="col-md-12">
                <h1 class="judul">Monitoring Wilayah Kerja STI JABAR</h1>
                <hr class="judul">
                <div class="head">
                    <div onclick="toggleContent('jabar1-content', 'jabar2-content')">JABAR 1</div>
                    <div onclick="toggleContent('jabar2-content', 'jabar1-content')">JABAR 2</div>
                </div>
                <hr class="tabel" align="center">
                <div id="jabar1-content" class="hidden content">
                    <table class="body">
                        <tr>
                            <td>Level 1 :</td>
                            <td>1. UID JABAR</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. UIP JBT 1</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. UPP KIT JBT 2 (JATIGEDE)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. UPP KIT JBT 4 (INDRAMAYU)</td>
                        </tr>
                    </table>
                    <button type="button" class="btn-primary" onclick="openMap('jabar1')">Open Map</button>
                </div>
                <div id="jabar2-content" class="hidden content">
                    <table class="body">
                        <tr>
                            <td>Level 1 :</td>
                            <td>1. KANTOR INDUK UIT JBT</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. UPP KIT JBT 1 (CISOKAN)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. UPP KIT JBT 2 (PLUMBON)</td>
                        </tr>
                    </table>
                    <button type="button" class="btn-primary" onclick="openMap('jabar2')">Open Map</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function toggleContent(showId, hideId) {
            var showContent = document.getElementById(showId);
            var hideContent = document.getElementById(hideId);

            if (showContent.classList.contains('hidden')) {
                showContent.classList.remove('hidden');
                hideContent.classList.add('hidden');
            } else {
                showContent.classList.add('hidden');
            }
        }

        function openMap(region) {
            var url = "map.php?region=" + region;
            window.location.href = url;
        }
    </script>
</body>
</html>
