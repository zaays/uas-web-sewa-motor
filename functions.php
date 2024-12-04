<?php

$conn = mysqli_connect("localhost", "root", "", "dbmotor");


function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[]=$row;
    }
    return $rows;
};

function authenticate_user($username, $password) {
    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'dbmotor');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk memeriksa username dan password
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($stored_password);
    $stmt->fetch();

    // Debug: Menampilkan hasil query
    if ($stored_password) {
        // echo "Password di database: $stored_password<br>";
        echo "Password salah<br>";
    } else {
        echo "Pengguna tidak ditemukan.<br>";
    }

    // Bandingkan password langsung (tanpa enkripsi)
    if ($stored_password && $password === $stored_password) {
        return true;
    }
    return false;
}

function create ($data){
    global $conn;
        //ambil data dari tiap elemen yang ada di form
        $nama=htmlspecialchars($data["nama"]);
        $jenis=htmlspecialchars($data["jenis"]);
        $tanggal=htmlspecialchars($data["tanggal"]);
        $no=htmlspecialchars($data["no"]);
        $nik=htmlspecialchars($data["nik"]);
    
        //query insert data
        $query = "INSERT INTO tbpinjam
                    VALUES ('','$nama','$jenis','$tanggal','$no','$nik')";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM tbpinjam WHERE id = $id");
    mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    //ambil data dari tiap elemen yang ada di form
    $id=$data["id"];
    $nama=htmlspecialchars($data["nama"]);
    $jenis=htmlspecialchars($data["jenis"]);
    $tanggal=htmlspecialchars($data["tanggal"]);
    $no=htmlspecialchars($data["no"]);
    $nik=htmlspecialchars($data["nik"]);
    
    //query update data
    $query = "UPDATE tbpinjam SET
            nama = '$nama',
            jenis = '$jenis',
            tanggal = '$tanggal',
            no = '$no',
            nik = '$nik'
            WHERE id=$id
            ";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function temukan($search){
    $query = "SELECT * FROM tbpinjam WHERE
    nama LIKE '%$search%'
    ";
    return query($query);
}

?>