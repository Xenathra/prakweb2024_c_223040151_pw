
<?php  
//koneksi ke database
$conn = mysqli_connect('localhost', 'root', '','prakweb2024_C_223040151_pw');


//fungsi query buat ambil data
function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}





?>
