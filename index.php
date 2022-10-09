<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>mahasiswa kece</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color:green;
      }
    table {
      border: solid 1px #800000;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #800000;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px#008080;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #800000;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px#008080;
    }
    a {
          background-color: lightblue;
          color:#008080;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data mahasiswa</h1><center>
    <center><a href="tambah_produk.php">+ &nbsp; Tambah data</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>nim</th>
          <th>nama</th>
          <th>email</th>
          <th>jurusan</th>
          <th>fakultas</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      
      $query = "SELECT * FROM data_mahasiswa ORDER BY nim ASC";
      $result = mysqli_query($koneksi, $query);
     
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['jurusan']; ?></td>
          <td><?php echo $row['universitas']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_produk.php?nim=<?php echo $row['nim']; ?>">Edit</a> |
              <a href="proses_hapus.php?nim=<?php echo $row['nim']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; 
      }
      ?>
    </tbody>
    </table>
  </body>
</html>