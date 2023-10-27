var url = "{{ url('/showFieldsInTypes') }}";
$("select[name='types']").change(function(){
    var type_id = $(this).val();
    var token = $("input[name='_token']").val();
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            country_id: type_id,
            _token: token
        },
        success: function(data) {
            $("select[name='types']").html('');
            $.each(data, function(key, value){
                $("select[name='fields']").append(
                    "<option value=" + value.id + ">" + value.name + "</option>"
                );
            });
        }
    });
});
