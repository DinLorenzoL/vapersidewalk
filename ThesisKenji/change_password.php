<script>
            function lettersOnly() 
            {
                        var charCode = event.keyCode;

                        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 32)
                            return true;
                        else
                            return false;
            }
            function numbersOnly(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
            function alpha(e) {
                var k;
                document.all ? k = e.keyCode : k = e.which;
                return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
            }
</script>
<?php
error_reporting(0);
if(isset($_POST['passwordSubmit'])){
      include("SQL.php");
      $cp = $_POST['change_pass'];
      $id = "1";
      $sql = "UPDATE `admin` SET `password`='" .$cp. "' WHERE `id` = ". $id;
                                     $result = $conn->query($sql);

     if($result)
     {
            echo "<script type='text/javascript'> alert('Password Successfully Updated') </script>";
            echo "<script> location.href='dashboard.php'</script>";
      }else{
            echo "<script type='text/javascript'> alert('Update Error') </script>";
      }
      $conn->close();

}

?>
