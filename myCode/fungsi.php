<?php
$koneksiDB = mysqli_connect("localhost", "root", "", "siswa");
function query($syntaxQuery)
{
    global $koneksiDB;
    $query = mysqli_query($koneksiDB, $syntaxQuery);
    $dataDB = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $dataDB[] = $data;
    }
    return $dataDB;
}
function edit($syntaxQuery)
{
    global $koneksiDB;
    $nisn = $syntaxQuery["nisn"];
    $namaLengkap = $syntaxQuery["nama_siswa"];
    $ttl = $syntaxQuery["ttl"];
    $jk = $syntaxQuery["jk"];
    $jurusan = $syntaxQuery["jurusan"];
    $alamat = $syntaxQuery["alamat_siswa"];
    $query = "UPDATE siswa SET nisn='$nisn', nama_siswa='$namaLengkap', ttl='$ttl', jk='$jk', jurusan='$jurusan', alamat_siswa='$alamat' WHERE nisn='$nisn' ";
    mysqli_query($koneksiDB, $query);

    return mysqli_affected_rows($koneksiDB);
}
function editOrtu($syntaxQuery)
{
    global $koneksiDB;
    $nik = $syntaxQuery['id_ortu'];
    $namaOrtu = $syntaxQuery['nama-ortu'];
    $pekerjaan = $syntaxQuery['pekerjaan'];
    $agama = $syntaxQuery['agama'];
    $alamatOrtu = $syntaxQuery['alamat_ortu'];
    $telepon = $syntaxQuery['telepon'];
    $query = "UPDATE orang_tua SET id_ortu='$nik', nama_ortu='$namaOrtu', pekerjaan='$pekerjaan', agama='$agama', alamat_ortu='$alamatOrtu', telepon='$telepon' WHERE id_ortu = '$nik'";
    mysqli_query($koneksiDB, $query);

    return mysqli_affected_rows($koneksiDB);
}
function delete($nisn)
{
    global $koneksiDB;
    $query = "DELETE FROM siswa WHERE nisn = '$nisn'";
    mysqli_query($koneksiDB, $query);

    return mysqli_affected_rows($koneksiDB);
}
function addOrtu($addData)
{
    global $koneksiDB;
    $nik = $addData['nik'];
    $nama = $addData['nama-ortu'];
    $pekerjaan = $addData['pekerjaan'];
    $agama = $addData['agama'];
    $alamat = $addData['alamat-ortu'];
    $telepon = $addData['telepon'];

    $query = "INSERT INTO orang_tua VALUE ('$nik', '$nama', '$pekerjaan', '$agama', '$alamat', '$telepon')";
    mysqli_query($koneksiDB, $query);
    return mysqli_affected_rows($koneksiDB);
}

function addSiswa($addData)
{
    global $koneksiDB;
    $nik = $addData['nik'];
    $nisn = $addData['nisn'];
    $nama = $addData['namaL'];
    $ttl = $addData['ttl'];
    $jk = $addData['jk'];
    $jurusan = $addData['jurusan'];
    $alamat = $addData['alamat'];

    $query = "INSERT INTO siswa VALUE ('$nisn', '$nik', '$nama', '$ttl', '$jk', '$jurusan', '$alamat')";
    mysqli_query($koneksiDB, $query);
    return mysqli_affected_rows($koneksiDB);
}

function register($signup)
{
    global $koneksiDB;
    $nama = $signup["nama"];
    $username = $signup["username"];
    $email = $signup["email"];
    $password1 = mysqli_real_escape_string($koneksiDB, $signup["password1"]);
    $password2 = mysqli_real_escape_string($koneksiDB, $signup["password2"]);

    $findUsername = mysqli_query($koneksiDB, "SELECT username FROM admin WHERE username = '$username'");
    if (mysqli_fetch_assoc($findUsername)) {
        echo "<script type='text/javascript'>alert('username sudah tersedia');</script>";
        return false;
    }

    if ($password1 !== $password2) {
        echo "<script type='text/javascript'>alert('password tidak sama');</script>";
        return false;
    }

    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    $insertToDatabase = "INSERT INTO admin VALUES('', '$nama', '$username', '$email', '$password1')";
    mysqli_query($koneksiDB, $insertToDatabase);
    return  mysqli_affected_rows($koneksiDB);
}
