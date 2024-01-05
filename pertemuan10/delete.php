<?php

require 'functions.php';

$id = $_GET["id"];

var_dump($id);

if (delete($id) > 0) {
    echo "
        <script>
            alert('Deleted successfuly')
            document.location.href = 'index.php'
        </script>
    ";
}
else {
    echo "
        <script>
            alert('Error, deleting process unsuccessful')
            document.location.href = 'index.php'
        </script>
    ";
};


?>