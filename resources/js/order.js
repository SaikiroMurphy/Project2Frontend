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

$(document).ready(function() {
    $('#date').on('change', function() {
        var date = $(this);
        if(date) {
            // $('#times').empty();
            // $('#times').append('<option value="" selected>Chọn khung giờ</option>');
            // $.each(data, function(key, times) {
            //     $('select[name="times"]').append('<option value="' + key + '">' + times.time + ' - ' + times.time + '</option>');
            // });
            $.ajax({
                url: 'orders/getTimes/',
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(data)
                {
                    if(data){
                        $('#times').empty();
                        $('#times').append('<option value="" selected>Chọn khung giờ</option>');
                        $.each(data, function(key, times){
                            $('select[name="times"]').append('<option value="'+ key +'">' + times.timeStart + ' - ' + times.timeEnd + '</option>');
                        });
                    }else{
                        $('#times').empty();
                    }
                }
            });
        }else{
            $('#times').empty();
        }
    });
});
