<?php

    require 'functions.php';

    $id = $_GET["id"];

    if (hapus($id)>0){
        echo 
        "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'list.php';
        </script>";
    }
    else {
        echo 
        "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'list.php';
        </script>";
    }

?>