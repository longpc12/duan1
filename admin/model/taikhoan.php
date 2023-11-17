<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by mataikhoan desc ";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($mataikhoan)
{
    $sql = "DELETE FROM taikhoan WHERE `taikhoan`.`mataikhoan` = $mataikhoan";
    pdo_execute($sql);
}
