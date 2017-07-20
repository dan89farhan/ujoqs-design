// modal-2
$('document').ready(function(){
	$('#register').click(function(){
        $('#myModal-2').fadeOut();
        $('.modal-backdrop').fadeOut();
    });
});
//button active code
$('a').click(function() {
        $(this).toggleClass("active");
    });
//image preview
$(document).ready(function() {
document.getElementById("jimage").onchange = function () {
var reader = new FileReader();
reader.onload = function (e) {
    if (e.total > 250000) {
        $('#imageerror').text('Image too large');
        $jimage = $("#jimage");
        $jimage.val("");
        $jimage.wrap('<form>').closest('form').get(0).reset();
        $jimage.unwrap();
        $('#uploadedimage').removeAttr('src');
        return;
    	}
        $('#imageerror').text('');
            document.getElementById("uploadedimage").src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);
    };
});
//Extraction of file name from fullpath
        var extension;
        $(document).ready(function(){
        $('#jimage').change(function(){
        var value =$(this).val();
        extension=value.replace(/^.*(\\|\/|\:)/, '');
        document.getElementById('filename').innerHTML=extension;
        });
    });
//menu
$('document').ready(function(){
    $('#menu').unbind('click').click(function(){
        $('.block-2').slideToggle();
        $('.block-3').slideToggle();
        $('.block-4').slideToggle();
        $('.block-5').slideToggle();
    });
});

//header styles
$('document').ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>120){
            $('.header-3').css("position","fixed");
            $('.header-3').css("width","100%");
            $('.header-3').css("margin-top","40px");
            $('.header-style').css("position","fixed");
            $('.header-2').hide();
            $('.sidebar-icon').fadeIn();
            $('.listed-cat').css("position","fixed");
            $('.listed-cat').css("margin-top","45px");
        }
        else{
            $('.header-3').css("position","relative");
            $('.header-3').css("margin-top","0px");
            $('.header-2').show();
            $('.header-style').css("position","static");
            $('.sidebar-icon').fadeOut();
            $('.listed-cat').css("position","relative");
            $('.listed-cat').css("margin-top","0px");
        }
    });
});

//navigation with ajax
// $(document).ready(function(){
//     $("a").click(function(event){
//         link=$(this).attr("href");
//         $.ajax({
//             url:link,
//         })
//         .done(function(html){
//             $("#page").empty().append(html);
//         })
//         .fail(function(){
//             console.log("error");
//             })
//         .always(function(){
//             console.log("complete");
//         })
//     });
// });