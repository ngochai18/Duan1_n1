<div class="row mx-[20px]">
            <div class="row formtitle alert alert-info">
                <h1 class="font-bold text-[20px]">DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10">
                
                </div>
                <div class="row mb10 formds">
                    <table>
                        <tr>
                            <th class="p-2 border-[1px] border-solid border-[#ccc] text-center">ID</th>
                            <th class="p-2 border-[1px] border-solid border-[#ccc] text-center">Nội dung</th>
                            <th class="p-2 border-[1px] border-solid border-[#ccc] text-center">id_user</th>
                            <th class="p-2 border-[1px] border-solid border-[#ccc] text-center">id_produc</th>
                            <th class="p-2 border-[1px] border-solid border-[#ccc] text-center">Ngày bình luận</th>

                        </tr>
                        <?php
                        // dùng foreach duyệt mảng -> dùng extract để show dữ liệu
                            foreach($listbinhluan as $binhluan){
                                extract($binhluan);
                                $suabl ="index.php?act=suabl&id_user=".$id_user;
                                $xoabl ="index.php?act=xoabl&id_user=".$id_user;
                            echo '
                            <tr>
                                <td class="p-[4px] border-[1px] border-solid border-[#ccc] text-center"> '.$id_user.' </td>
                                <td class="p-[4px] border-[1px] border-solid border-[#ccc] text-center">'.$noi_dung.'</td>
                                <td class="p-[4px] border-[1px] border-solid border-[#ccc] text-center">'.$id_product.'</td>
                                <td class="p-[4px] border-[1px] border-solid border-[#ccc] text-center">'.$ngay_binh_luan.'</td>

                                <td class="p-[4px] border-[1px] border-solid border-[#ccc] text-center">
                                    <a href="'.$xoabl.'" ><input type="button" name=""value="XÓA" class="text-white bg-red-500 w-[80px] py-[5px] rounded ml-[20px] mb-[20px] hover:opacity-60 mt-[10px]" onclick="return confirm(\'Bạn có chắc chắn muốn xóa ?\')">
                                </td>
                            </tr>  
                            ';      
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <!-- <input type="submit" value="CHỌN TẤT CẢ">
                    <input type="reset" value="BỎ CHỌN TẤT CẢ">
                    <input type="reset" value="XÓA CÁC MỤC ĐÃ CHỌN"> -->
                    <!-- <a href="add.html"><input type="button" value="NHẬP THÊM"></a> -->
                </div>
            </div>
            
        </div>