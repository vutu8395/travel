<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/20/2017
 * Time: 10:10 PM
 */

//function cate_parent($data){
//    // 1 cap
//    foreach ($data as $key => $val){
//        $id=$val["id"];
//        $name=$val["name"];
//        echo"<option>$name</option>";
//    }
//}


//function cate_parent($data,$parent=0,$slt="--"){
//    foreach ($data as $key => $val){
//        $id=$val["id"];
//        $name=$val["name"];
//        if($val["parentId"]==$parent) {
//            // cap 1
//            echo "<option value='$id'>$slt $name</option>";
//            //cap2, $id thay doi
//            cate_parent($data,$id,$slt."--");
//
//        }
//
//    }
//}

// chon muc ta dang sua dung $select
function cate_parent($data,$parent=0,$slt="--", $select=0){
    foreach ($data as $key => $val){
        $id=$val["id"];
        $name=$val["name"];
        if($val["parentId"]==$parent) {

            if($select!=0 && $id=$select){
                echo "<option value='$id' selected='selected'>$slt $name</option>";
            }
            else {
                // cap 1
                echo "<option value='$id'>$slt $name</option>";
            }
            //cap2, $id thay doi
            cate_parent($data,$id,$slt."--");

        }

    }
}



function product_parent($data,$slt="--"){
    foreach ($data as $key => $val){
        $id=$val["id"];
        $name=$val["name"];

          echo "<option value='$id'>$slt $name</option>";

    }
}
?>