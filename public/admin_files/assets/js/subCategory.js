function Switch_subCategory(key, id) {
    var  status =  $('#statusSwitch2' + key).val();
    if (status === "1"){
        status = 0;
    }else if (status === "0") {
        status = 1;
    }
    $.ajax({
        url: '/alt-kategori/durum',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'post',
        data:{
            id,
            status,
        },
        success: function (result) {
            $('#statusSwitch2' + key).attr("value",status);

        },

    });
}

$(document).ready(function(){
    var size = $("#size2").val();
    var i
    for (i = 1; i <= size; i++) {
        if ($('#statusSwitch2' + i).val() === "1") {
            $('#statusSwitch2' + i).attr('checked', 'checked');

        } else  {

            $('#statusSwitch2' + i).removeAttr('checked');
        }
    }

});