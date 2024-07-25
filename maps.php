<?php
header('Content-Type: application/json');

$locations = [
    ['<a href="#">GI INDRAMAYU</a>', -6.3453051, 108.3111198, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI JATIBARANG</a>', -6.4780561, 108.3422664, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI KADIPATEN</a>', -6.7914135, 108.1725177, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI KAMOJANG</a>', -7.1381998, 107.7820079, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI KARANGNUNGGAL</a>', -7.6361597, 108.1251585, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI KUNINGAN</a>', -6.9825838, 108.4081205, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI MALANGBONG</a>', -7.060093, 108.0832054, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI PAMEUNGPEUK</a>', -7.6464816, 107.7068107, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI PANGANDARAN</a>', -7.6723981, 108.6855997, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI PARAKAN</a>', -6.9658871, 107.8147837, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI SUMADRA</a>', -7.3821701, 107.7205845, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI TASIKMALAYA</a>', -7.3522101, 108.2067945, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI SANTOSA</a>', -7.253262, 107.630673, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI SUMEDANG</a>', -6.863783, 107.906839, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI UJUNGBERUNG</a>', -6.935764, 107.730274, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5'],
    ['<a href="#">GI WAYANGWINDU</a>', -7.196759, 107.626217, '', '- karyawan-1', '- karyawan-2', '- karyawan-3', '- karyawan-4', '- karyawan-5']
];

echo json_encode($locations);
?>
