<?php

include 'koneksi.php';

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $email     = $_POST['email'];
  $jurusan   = $_POST['jurusan'];
  $universitas    = $_POST['universitas'];
  $gambar = $_FILES['gambar']['name'];



if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg');
  $x = explode('.', $gambar); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $gambar = $angka_acak.'-'.$gambar;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$gambar);
                  $query = "INSERT INTO data_mahasiswa (nim,nama, email, jurusan, universitas, gambar) VALUES ('$nim','$nama', '$email', '$jurusan', '$universitas', '$gambar')";
                  $result = mysqli_query($koneksi, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                   
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
            
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_data_mahasiswa.php';</script>";
            }
} else {
   $query = "INSERT INTO data_mahasiswa ( nim,nama, email, jurusan, universitas, gambar) VALUES ('$nim','$nama', '$email', '$jurusan', '$universitas', null)";
                  $result = mysqli_query($koneksi, $query);
                 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}

 

