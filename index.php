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
    <div class="container py-4">
        <form action="#" method="POST">
            <div class="col-md-12">
                <h1 class="judul mb-3">Monitoring Wilayah Kerja STI JABAR</h1>
                <hr class="judul">
                <ul class="nav nav-tabs mb-3" id="regionTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="jabar1-tab" data-bs-toggle="tab" data-bs-target="#jabar1-content" type="button" role="tab" aria-controls="jabar1-content" aria-selected="true">JABAR 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="jabar2-tab" data-bs-toggle="tab" data-bs-target="#jabar2-content" type="button" role="tab" aria-controls="jabar2-content" aria-selected="false">JABAR 2</button>
                    </li>
                </ul>
                <div class="tab-content" id="regionTabsContent">
                    <div id="jabar1-content" class="tab-pane fade show active" role="tabpanel" aria-labelledby="jabar1-tab">
                        <table class="table table-striped table-bordered">
                            <tbody>
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
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary mt-2" onclick="openMap('jabar1')">Open Map</button>
                    </div>
                    <div id="jabar2-content" class="tab-pane fade" role="tabpanel" aria-labelledby="jabar2-tab">
                        <table class="table table-striped table-bordered">
                            <tbody>
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
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary mt-2" onclick="openMap('jabar2')">Open Map</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function openMap(region) {
            var url = "map.php?region=" + region;
            window.location.href = url;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
