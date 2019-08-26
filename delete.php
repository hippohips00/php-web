<?php
                $connect=mysqli_connect("localhost", "root", "1234", "board") or die("fail");

                $URL = './index.php';                   //return URL


                $query = "(delete from board where id like 'test';)";


                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 삭제되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>
