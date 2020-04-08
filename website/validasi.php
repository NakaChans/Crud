 <?php
if(isset($_POST["tombol"])){
  $str = $_POST["str"];
  if (empty($_POST["str"])) {
    echo "<script>alert('Null')</script>";
  }else{
  if(preg_match_all("/[a-zA-Z0-9]+/", $str)){
    echo "<script>alert('Cocok')</script>";
  }else{
    echo "<script>alert('Mengandung karakter khusus')</script>";
  }}
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title> Validasi With Regex</title>
  <style type="text/css">
    .a {
        margin: auto auto;
        width: 400px;
        padding: 20px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    button{
        margin 5px auto;
        float: right;
    }
</style>
 </head>
 <body>
  <h1 align="center">Validasi With Regex</h1>
  <div class="a">
  <form method="POST">
  Masukan string : <input type="text" name="str">
  <br><br>
  <button name="tombol" type="submit"> ceck </button>
  </form>
</div>
  <br>
 </body>
</html>