$(function()
{
    $("[name='page']").css("display","none");
    $("#p1").css("display","flex");
});
$(document).ready(function()
{
    $("#btnReset").click(function()
    {
        $("input").val("");
    });
    $("#btnSubmit").click(function()
    {
        var n=$("#txtName").val();
        var e=$("#txtEmail").val();
        var a=$("#txtAmount").val();
        alert("Thanks You \" "+n+" \" \n for donate $"+a+" \n Email : "+e+"");
    });
    $("[name='btnMainMenu'],#btn2").click(function()
    {
        $("[name='page']").css("display","none");
        if($(this).attr("id")=="btn1")
            $("#p1").css("display","flex");
        else if($(this).attr("id")=="btn2")
            $("#p2").css("display","flex");
        else if($(this).attr("id")=="btn3")
            $("#p3").css("display","flex");
        else if($(this).attr("id")=="btn4")
            $("#p4").css("display","unset");
    });

    $("[name='ulLiTitle']").click(function()
    {
        var no=$(this).attr("no");
        $("[name='ulLiTxt']").css({"display":"none"});
        $("[name='ulLiTxt'][no='"+no+"']").css("display","unset");
    });
});
