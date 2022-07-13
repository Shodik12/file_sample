<?php include "koneksi.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tinymce Editor in using PHP Example - Nicesnippets.com</title>
    <!-- include Boostrap 5 -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- include tinymce -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script></head>
<body>



<?php 
   
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi,"SELECT * FROM bab WHERE id='$id'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Form Post Edit Project(Bab)</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="edit-bab.php">
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                            
                            <div class="mb-1">
                                <label><strong>Isi disini :</strong></label>
                                <textarea id="textarea"  name="nama_bab" class="form-control"  value="<?php echo $data['bab']; ?>"><?php echo $data['bab']; ?></textarea><br>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
   <script>
   tinymce.init({
   selector: 'textarea',
   setup(editor) {
   editor.on('init', () => {
   console.log(tinyMCE.activeEditor.getContent())
   })
   }
   });  
   </script>
   </body>
   <!-- Script -->

</body>
</html>
