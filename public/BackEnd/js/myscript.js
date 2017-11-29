// viet ham de khi hien thi loi 5s mat di
$(document).ready(function(){
    $("div.alert").delay(5000).slideUp();
})

// viet ham them nut nhan
$(document).ready(function () {
    //alert(999);
    $("#addImages").click(function () {
        // viet js k dk xuong dong
        $("#insert").append('<div class="form-group"><input type="file" name="fEditDetail[]"></div>')
    });
});

// viet xoa hinh

$(document).ready(function () {

    // khi nhan vao nut, thuc hien cong viec function
    $("a#del_img_demo").on('click', function () {
       //alert(8999);
        // nhan xong tao ra 1 dg dan
        var url="http://localhost:89/travel/BackEnd/product/delimg/";
        // kiem trong form co ten la frmEditProduct
        var _token = $("form[name='frmEditProduct']").find("input[name='_token']").val();
        //alert(_token)
        // tro vao parent hien tai kiem ra dg dan, va id hinh cua tam hinh
        var idHinh=$(this).parent().find("img").attr("idHinh");
        //alert(idHinh)
        var img=$(this).parent().find("img").attr("src");
        //alert(img)
        // lay bat ky, id biet xoa hinh nao
        var rid=$(this).parent().find("img").attr("id");
        //alert(rid)
        // bat dau xoa
        $.ajax({
            url:url+idHinh,
            type:'GET',
            cache:false,
            data:{"_token":_token,"idHinh":idHinh,"urlHinh":img},
            success:function(data) {
                if(data=="Oke"){
                    // data == ok ben controller
                    $("#"+rid).remove();
                }
                else{
                    // bao loi
                    alert("error img");
                }
            }
        });


    });
});