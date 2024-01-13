<?php
// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
function query($query)
{
    global $connection;

    $result = mysqli_query($connection, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
;


function search($keyword)
{
    $query = "SELECT * FROM films WHERE 
        title LIKE '$keyword%' OR
        director LIKE '$keyword%' OR
        genre LIKE '$keyword%' OR
        actor LIKE '$keyword%'
    ";

    $films = query($query);

    return $films;
}



function add($data)
{
    global $connection;

    $title = htmlspecialchars($data["title"]);
    $director = htmlspecialchars($data["director"]);
    $genre = htmlspecialchars($data["genre"]);
    $actor = htmlspecialchars($data["actor"]);


    $img = upload();
    if (!$img) {
        return false;
    }


    $query = "INSERT INTO films VALUES ('', '$title', '$director', '$genre', '$actor', '$img')";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}


function upload()
{
    $fileName = $_FILES["img"]["name"];
    $fileSize = $_FILES["img"]["size"];
    $fileError = $_FILES["img"]["error"];
    $fileDirectory = $_FILES["img"]["tmp_name"];

    // cek apakah tidak ada gambar diupload
    if ($fileError === 4) {
        echo
            "<script>
            alert('Choose image first !')
        </script>";
        return false;
    }


    // cek ekstensi gambar
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    if (!in_array($fileExtension, $validExtension)) {
        echo
            "<script>
            alert('Wrong type, image only!')
        </script>";
        return false;
    }


    // cek size gambar
    if ($fileSize > 5000000) {
        echo
            "<script>
            alert('File too large!')
        </script>";
        return false;
    }


    // generate 
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $fileExtension;

    // pindahkan gambar yang diupload
    move_uploaded_file($fileDirectory, '../assets/' . $newFileName);
    return $newFileName;
}



function delete($get)
{
    global $connection;

    mysqli_query($connection, "DELETE FROM films WHERE id = $get");

    return mysqli_affected_rows($connection);
}



function update($data)
{
    global $connection;

    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $director = htmlspecialchars($data["director"]);
    $genre = htmlspecialchars($data["genre"]);
    $actor = htmlspecialchars($data["actor"]);
    $oldImg = htmlspecialchars($data['oldImg']);

    if ($_FILES['img']['error'] === 4) {
        $img = $oldImg;
    } else {
        $img = upload();
    }


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



function register($data)
{
    global $connection;

    $username = $data["username"];
    $email = $data["email"];
    $password = mysqli_real_escape_string($connection, $data["password"]);
    $confirmPassword = mysqli_real_escape_string($connection, $data["confirmPassword"]);

    // cek apakah username sudah ada di database
    $result = mysqli_query($connection, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo
            "<script>
            alert('Username already taken !')
        </script>";
        return false;
    }

    // cek apakah konfirmasi password sudah benar
    if ($password !== $confirmPassword) {
        echo
            "<script>
            alert('Password does not match !')
        </script>";
        return false;
    }

    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user baru ke database
    mysqli_query($connection, "INSERT INTO users VALUES ('', '$username', '$email', '$password')");

    return mysqli_affected_rows($connection);
}




?>