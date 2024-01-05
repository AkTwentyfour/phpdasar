<!-- FUNCTION & ARGUMEN -->

<?php

$username = "kamal";
function x($nama)
{
    return "Nama anda : $nama";
}
;

echo x($username);


// Dalam kode PHP Anda:

// 1. Anda mendefinisikan variabel `$username` dengan nilai "kamal".
// 2. Anda membuat sebuah fungsi bernama `x` yang menerima satu parameter `$nama` dan mengembalikan string "Nama anda : $nama".
// 3. Anda memanggil fungsi `x` dengan "MEMBERIKAN NILAI DARI VARIABEL $username SEBAGAI ARGUMEN"
// 4. Hasilnya, fungsi mengembalikan string "Nama anda : kamal".
// 5. String tersebut kemudian dicetak menggunakan pernyataan `echo`.

// Jadi, output yang akan ditampilkan adalah:

// ```
// Nama anda : kamal
// ```

// Dengan kata lain, fungsi `x` digunakan untuk membuat pesan dengan menyertakan nama yang diteruskan ke dalamnya.
?>