$(document).ready(function() {
    $('#types').on('change', function() {
        var type_id = $(this).val();
        if(type_id) {
            $.ajax({
                url: 'orders/getFields/' + type_id,
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(data)
                {
                    if(data){
                        $('#fields').empty();
                        $('#fields').append('<option value="" selected>Chọn sân</option>');
                        $.each(data, function(key, fields){
                            $('select[name="fields"]').append('<option value="'+ key +'">' + fields.name + '</option>');
                        });
                    }else{
                        $('#fields').empty();
                    }
                }
            });
        }else{
            $('#fields').empty();
        }
    });
});
