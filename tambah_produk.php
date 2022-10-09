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
        color: #708090;
      }
    button {
          background-color: #708090;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #C0C0C0;
      border: 2px solid #ccc;
      outline-color: #708090;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>nim</label>
          <input type="text" name="nim" autofocus="" required="" />
        </div>
        <div>
          <label>nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>email</label>
         <input type="text" name="email" />
        </div>
        <div>
          <label>jurusan</label>
         <input type="text" name="jurusan" required="" />
        </div>
        <div>
          <label>universitas</label>
         <input type="text" name="universitas" required="" />
        </div>
        <div>
          <label>gambar</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan data</button>
        </div>
        </section>
      </form>
  </body>
</html>