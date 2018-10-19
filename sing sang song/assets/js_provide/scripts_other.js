// Easing函數使用: easings.net/zh-tw

$(function () {
    

    $('#vocal10').click(function () {

        var chk = [];
        $('#vocal10 input:checkbox:checked[name="text"]').each(
            function (i) {
                chk[i + 1] = this.value;
            }
        );


        var str = chk.toString();
        if (str.toLowerCase().indexOf('other') >= 0) {
            $('#txt_other').show();
        }
        else {
            $('#txt_other').hide();
        }

    });

});