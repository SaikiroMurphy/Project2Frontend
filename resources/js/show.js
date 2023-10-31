$(function (){
    $('.Fields').hide();
    // $('#img').hide();
});
function call()
{
    // Nếu check thì hiện form tiếp theo

    $(document).on('change', '#Types', function() {
        var value = $(this).val();
    })

    // var value  = $('#Types').val();
    // $.ajax({
    //     type: ''
    // })
//     if(types)
//     {
//         $('.Fields').show();
//
//     } else
//     {
//         $('.Fields').hide();
//     }
// }
// function call2()
// {
//     var fields  = $('#Fields').val();
//     // if(fields)
//     // {
//     //     $('#img').show();
//     // }
//     // else
//     // {
//     //     $('#img').hide();
//     // }
}
