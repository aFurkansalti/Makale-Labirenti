$(document).ready(function() {
    $("#current_pwd").keyup(function() {
        var current_pwd = $("#current_pwd").cal();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/check-current-password',
            data:{current_pwd:current_pwd},
            success:function(resp){
                if(resp=="false"){
                    $("#verifyCurrentPwd").html("Current Password is incorrect");
                } else if(resp=="true"){
                    $("#verifyCurrentPwd").html("Current Password is correct");
                }
            }, error:function(){
                alert("Error");
            }
        });
    });
});

$(document).on("click", ".updateCmsPageStatus",function(){
    var status = $(this).children("i").attr("status");
    var page_id = $(this).attr("page_id");
    alert(page_id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url:'/admin/update-css-pages-status',
        data:{status:status,page_id:page_id},
        success:function(resp){

        },error:function(){
            alert("Error");
        }
    })
})
