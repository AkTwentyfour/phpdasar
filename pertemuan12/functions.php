<?php
// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
function query($query) {
    global $connection;
    
    $result = mysqli_query($connection, $query);
    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
};


function add($data) {
    global $connection;

    $title = htmlspecialchars($data["title"]);
    $director = htmlspecialchars($data["director"]);
    $genre = htmlspecialchars($data["genre"]);
    $actor = htmlspecialchars($data["actor"]);
    $img = htmlspecialchars($data["img"]);

    $query = "INSERT INTO films VALUES ('', '$title', '$director', '$genre', '$actor', '$img')";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}


function delete($get) {
    global $connection;

    mysqli_query($connection, "DELETE FROM films WHERE id = $get");

    return mysqli_affected_rows($connection);
}



function update($data) {
    global $connection;

    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $director = htmlspecialchars($data["director"]);
    $genre = htmlspecialchars($data["genre"]);
    $actor = htmlspecialchars($data["actor"]);
    $img = htmlspecialchars($data["img"]);

    $query = "UPDATE films SET
                id = '$id',
                title = '$title',
                director = '$director',
                genre = '$genre',
                actor = '$actor',
                img = '$img'
            WHERE id = $id
    ";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}


function search($keyword) {
    $query = "SELECT * FROM films WHERE 
        title LIKE '$keyword%' OR
        director LIKE '$keyword%' OR
        genre LIKE '$keyword%' OR
        actor LIKE '$keyword%'
    ";

    $films = query($query);

    return $films;
}





?>