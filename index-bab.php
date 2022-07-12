<?php include "./koneksi.php";?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Project!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      
       
      <div class="container-fluid">
      <div class="card-content">
      <div class="media">
      <div class="media-right">
      <style>
      .gambar{
      height: 100px;
      width: 120px;
      }
      </style>
         
      <img src="https://i.ibb.co/S3wmKJ7/Logo-Bank-Perkreditan-Rakyat-laluahmad-com.png" class="gambar" alt="Placeholder image">
      
      </div>
      
      </div>
      
      <p class="subtitle">
        My <strong>Project()</strong>!
      </p>
      <p class="subtitle">
      Peraturan!
      </p>
    </div>
  </section>
  
  
  <div class="notification is-link is-light">
  <button class="delete"></button>
  Example Search:Bab I ..</div>
  <article class="panel is-link">
  <p class="panel-heading">
  Search Bab
  </p>
 <form action="" method="post">
  <div class="panel-block">
  <p class="control has-icons-left">
  <input class="input is-link" type="text" name="search" id="search" placeholder="Search Bab..">
  <span class="icon is-left">
 <svg id="file-search" data-name="multi color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon multi-color" width="48" height="48"><path id="tertiary-fill" d="M4,3H7A0,0,0,0,1,7,3V20a0,0,0,0,1,0,0H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3Z" style="fill: rgb(222, 202, 202); stroke-width: 2;"></path><path id="primary-stroke" d="M8,20H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h8.59a1,1,0,0,1,.7.29l3.42,3.42a1,1,0,0,1,.29.7V8" style="fill: none; stroke: rgb(18, 46, 226); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="secondary-stroke" d="M10,15a4,4,0,1,1,4,4A4,4,0,0,1,10,15Zm11,6-4-3.4" style="fill: none; stroke: rgb(237, 231, 250); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>  </span>
  </p>
  <div class="buttons">
  <button class="button is-link" type="submit">Search</button>
   </div>
  </div>
</form>
<center>
<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="post-bab.php">Tambah Bab2</a></li>
    <li><a href="post-pasal.php">Tambah Pasal2</a></li>
    <li><a href="index-bab.php">Index Bab</a></li>
      </ul>
</nav>
</center>
<div class="content">
<p><center>SALINAN PERATURAN OTORITAS JASA KEUANGAN</center>
<center><strong>NOMOR 4/POJK.03/2015</strong></center>
<center>TENTANG PENERAPAN TATA KELOLA BAGI BANK PERKREDITAN RAKYAT</center></p></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
 document.addEventListener('DOMContentLoaded', () => {
 (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
 const $notification = $delete.parentNode;
 
 $delete.addEventListener('click', () => {
 $notification.parentNode.removeChild($notification);
 });
 });
 });
 
  
  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-expander/1.7.0/jquery.expander.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
  $(".readmore").expander({
  slicePoint : 130,
  expandText: 'Lihat lebih banyak...',
  userCollapseText : 'Lihat lebih sedikit...'
  });
  });
  </script>
  </article>
  
  
  
  
  
 <table class="table table-striped table-bordered">
 <thead>
 <tr>
 <th width="1%">No</th>
 <th>Bab</th>
 
 
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 $batas = 5;
 $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
 $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
 $previous = $halaman - 1;
 $next = $halaman + 1;
 
 $data = mysqli_query($koneksi,"select * from bab");
 $jumlah_data = mysqli_num_rows($data);
 $total_halaman = ceil($jumlah_data / $batas);
 
 $keyword="";
 if (isset($_POST['search'])) {
 $keyword = $_POST['search'];
 }
 
 $query = mysqli_query($koneksi,"SELECT * FROM bab WHERE nama_bab LIKE '%".$keyword."%' OR ".$no." LIKE '%".$keyword."%'  ORDER BY id DESC Limit $halaman_awal,$batas");
 $hitung_data = mysqli_num_rows($query);
 if ($hitung_data > 0) {
 while ($data = mysqli_fetch_array($query)) {
 ?>
 <tr>
 <td><?php echo $no++; ?></td> 
 <td class="readmore"><?php  echo $data['nama_bab'];?></td>
 <td class="align-center"><a class="button is-light" href="index-pasal.php?id=<?php echo $data['id'];?>">detail pasal</a></td>
  <td class="align-center"><a class="button is-light" href="hapus-bab.php?id=<?php echo $data['id'];?>">Hapus</a></td>
  <td class="align-center"><a class="button is-light" href="post-edit-bab.php?id=<?php echo $data['id'];?>">Edit</a></td> 
 </tr>
 <?php } } else { ?> 
 <tr>
 <td colspan='4' class="text-center">Tidak ada data ditemukan</td>
 </tr>
 <?php } ?>
 </tbody>
 </table> 
  <nav class="pagination is-right" role="navigation" aria-label="pagination">
  <a class="pagination-previous" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
  <a class="pagination-next" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next page</a>
  <ul class="pagination-list">
<?php 
 for($x=1;$x<=$total_halaman;$x++){
 ?> 
 <li><a class="pagination-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
 <?php
 }
 ?>		
     </ul>
  </nav>
  </div>
  </body>
  <footer class="footer">
  <div class="content has-text-centered">
  <p>
  <p class="subtitle">
        PERUMDA <b>BPR</b><strong><br>BANK CIREBON</strong>
      </p>
    </p>
  </div>
  </footer>
</html>