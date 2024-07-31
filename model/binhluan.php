<?php
function insert_binhluan($id_user,$ngay_binh_luan,$noi_dung,$id_product, $rate){
    $sql="insert into binh_luan(`id_user`, `ngay_binh_luan`, `noi_dung`, `id_product`, `rate`) values('$id_user, '$ngay_binh_luan', '$noi_dung', $id_product, $rate') ";
    pdo_execute($sql);
}
function loadall_binhluan($id_product){
    $sql="select * from binh_luan where 1";
    if($id_product>0)
       $sql.=" AND id_product='".$id_product."'";
    
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return  $listbl;
}
function delete_binhluan($ma_binh_luan){
    $sql="delete from binh_luan where ma_binh_luan=".$ma_binh_luan ;
    pdo_execute($sql);
}
?>