/**
 * Created by HaiLong on 11/7/2016.
 */
$(document).ready(function () {
    $('#btnSubmit').click(function () {
        $('#tourUpdateForm').submit();
    });

    $('#tourEditorForm').validate(
        /* Validate Form */
        {
            onkeyup: false,
            onfocusout: false,
            errorElement: 'p',
            errorLabelContainer: $(this).parent().children(".alert.alert-danger").children(".message"),
            rules:
            {
                tourTitleVi:{ required: true },
                tourTitleEn:{	required: true},
                tourTextLink:{ required: true},
                tourShrtCntVi:{ required: true},
                tourShrtCntEn:{ required: true},
                tourCntVi:{ required: true},
                tourCntEn:{ required: true},
                tourScheduleVi:{ required: true},
                tourScheduleEn:{ required: true},
                tourLengthVi:{ required: true},
                tourLengthEn:{ required: true},
                tourPriceVi:{ required: true},
                tourPriceEn:{ required: true},
                tourDescVi:{ required: true},
                tourDescEn:{ required: true},
                tourKeywordVi:{ required: true},
                tourKeywordEn:{ required: true},
            },
            messages:
            {
                tourTitleVi:{ required: 'Nhập tiêu đề'},
                tourTitleEn:{	required: 'Nhập tiêu đề'},
                tourTextLink:{ required: 'Nhập text link'},
                tourShrtCntVi:{ required: 'Nhập tóm tắt nội dung'},
                tourShrtCntEn:{ required: 'Nhập tóm tắt nội dung'},
                tourCntVi:{ required: 'Nhập nội dung'},
                tourCntEn:{ required: 'Nhập nội dung'},
                tourScheduleVi:{ required: 'Nhập kế hoạch'},
                tourScheduleEn:{ required: 'Nhập kế hoạch'},
                tourLengthVi:{ required: 'Nhập thời gian'},
                tourLengthEn:{ required: 'Nhập thời gian'},
                tourPriceVi:{ required: 'Nhập giá tour'},
                tourPriceEn:{ required: 'Nhập giá tour'},
                tourDescVi:{ required: 'Nhập mô tả tour'},
                tourDescEn:{ required: 'Nhập mô tả tour'},
                tourKeywordVi:{ required: 'Nhập Từ khóa'},
                tourKeywordEn:{ required: 'Nhập Từ khóa'},
            },
            invalidHandler: function()
            {
                $(this).parent().children().slideDown('fast');
            },
            submitHandler: function(form)
            {
                $(form).parent().children(".alert.alert-danger").slideUp('fast');
                var $form = $(form).ajaxSubmit();
                tour_submit_handler($form, $('.tour_server_response') );
            }
        }
    )
    var tour_submit_handler = function (form, wrapper) {

        var $wrapper = $(wrapper); //this class should be set in HTML code
        $wrapper.css("display","block");
        var data = {
            tourTitleVi: $('#titleVi').val(),
            tourTitleEn: $('#titleEn').val(),
            tourTextLink: $('#textLink').val(),
            tourLocation: $("#location").chosen().val(),
            tourFrt: $('#tourFtr ').is(":checked") == true ? "Y" : "N",
            tourRcm: $('#tourRcm ').is(":checked") == true ? "Y" : "N",
            tourShrtCntVi: $('#shrtCntVi').val(),
            tourShrtCntEn: $('#shrtCntEn').val(),
            tourCntVi: $('#tourCntVi').val(),
            tourCntEn: $('#tourCntEn').val(),
            tourScheduleVi: $('#tourSchVi').val(),
            tourScheduleEn: $('#tourSchEn').val(),
            tourLengthVi: $('#tourLthVi').val(),
            tourLengthEn: $('#tourLthEn').val(),
            tourPriceVi: $('#tourPrcVi').val(),
            tourPriceEn: $('#tourPrcEn').val(),
            tourKeywordVi: $('#keywordVi').val(),
            tourKeywordEn: $('#keywordEn').val(),
            tourDescVi: $('#tourDescVi').val(),
            tourDescEn: $('#tourDescEn').val(),
            formAction: $('#btnSubmit').text(),
            rpvImg: $('#rpvImg').files,
        };
        // send data to server
        $.post("/admin/tourEditor", data, function(response) {
            if(response.info == 'Success'){
                alert(response.Content);

            } else {
                alert(response.Content);

            }
        }, "json");

        return false;
    }
});