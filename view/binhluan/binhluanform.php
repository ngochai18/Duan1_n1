<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$id_product=$_REQUEST['id_product']; // $_REQUEST chứ tất cả các giá trị được gửi đến trang web
$dsbl = load_binhluan($id_product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XGND</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <!-- css.gg -->
    <link href="https://css.gg/css" rel="stylesheet" />
    <!-- UNPKG -->
    <link href="https://unpkg.com/css.gg/icons/icons.css" rel="stylesheet" />
    <!-- JSDelivr -->
    <link href="https://cdn.jsdelivr.net/npm/css.gg/icons/icons.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="view/css/style.css">
    </head>
<body>
<div class="comment my-12">
                <h1 class="text-[40px] text-[#000] font-bold ">Bình Luận</h1>
                <div class="py-2">
                        <table class="w-full border-[1px] border-solid border-[#000] min-h-[200px] my-2">
                            <tbody>
                                <?php
                                    foreach($dsbl as $bl){
                                        extract($bl);
                                        $linkdm="index.php?act=sanpham&iddm=".$id;
                                        echo ' <tr>
                                        <td class="p-2">'.$noi_dung.'</td>
                                        <td class="p-2">'.$id_user.'</td>
                                        <td class="p-2">'.$ngay_binh_luan.'</td>
                                    </tr>';
                                    }
                                ?>
                               
                            </tbody>
                        </table>
                    <?php
                        if(isset($_SESSION['user'])){
                        
                    ?>
                    <form  action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <input type="hidden" name="id_product" value="<?=$id_product?>">
                        <input type="text"  id="" class="w-[80%] py-2 border-[1px] border-solid border-[#000]" placeholder="Bình luận tại đây...">
                        <input type="submit" value="GỬI BÌNH LUẬN" class="w-[19%] py-2 bg-slate-500 hover:bg-[green]">
                    </form>
                    <?php
                    }else{?>
                    <strong><p class="thongbao">Vui lòng đăng nhập để bình luận</p></strong>
                    <?php
                    }
                    ?>
                     <?php
                    // add binh luan
                    if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                        $noi_dung = $_POST['noi_dung'];
                        $id_product=$_POST['id_product'];
                        $id_user = $_SESSION['id_user']['ma_binh_luan'];
                        $ngay_binh_luan = date('Y-m-d');
                        insert_binhluan($noi_dung,$id_user,$id_product,$ngay_binh_luan);
                        header("location: ".$_SERVER['HTTP_REFERER']); // HTTP_REFERER : trở về trang hiện tại
                    }
                    ?>
                </div>
            </div>
    <div class="footer">
            <p>Copyrights © 2024 by Nhóm 1</p>
        </div>
    </div>
    <script src="view/js/sticky.js"></script>
    <script src="view/js/slide.js"></script>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script src="view/js/scroll.js"></script>
    <script>
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
            }

            function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
            }
    </script>
</body>

</html>