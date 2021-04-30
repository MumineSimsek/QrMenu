function Switch_category(key, id) {
    var  status =  $('#statusSwitch' + key).val();
    if (status === "1"){
        status = 0;
    }else if (status === "0") {
        status = 1;
    }
    $.ajax({
        url: '/kategori/durum',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'post',
        data:{
            id,
            status,
        },
        success: function (result) {
            $('#statusSwitch' + key).attr("value",status);

        },

    });
}

$(document).ready(function(){
    var size = $("#size").val();
    var i
    for (i = 1; i <= size; i++) {
        if ($('#statusSwitch' + i).val() === "1") {
            $('#statusSwitch' + i).attr('checked', 'checked');

        } else  {

            $('#statusSwitch' + i).removeAttr('checked');
        }
    }

});