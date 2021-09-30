function readURL(input, previewId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $(previewId).css('background-image', 'url('+e.target.result +')');
            $(previewId).hide();
            $(previewId).fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function () {

    let $fileInput = $('.file-input');
    let $droparea = $('.file-drop-area');
    var filesCount = $fileInput[0].files.length;
    var $textContainer = $fileInput.prev();

    if (filesCount>0){
        var fileName = $fileInput.val().split('\\').pop();
        $textContainer.text(fileName);
    }
    // highlight drag area
    $fileInput.on('dragenter focus click', function () {
        $droparea.addClass('is-active');
    });

    // back to normal state
    $fileInput.on('dragleave blur drop', function () {
        $droparea.removeClass('is-active');
    });

    // change inner text
    $fileInput.on('change', function () {
        var fileName = $(this).val().split('\\').pop();
        $textContainer.text(fileName);

    });

    $('#banner').change(function () {
        readURL(this,'#image_preview')
    });

    const input = $('.video_input');
    const videoSource = $("<source></source>");

    input.on('change','input[type=file]',function() {
        $('#video').parent().removeClass('is-invalid');
        $('.size-info').removeClass('invalid-feedback');

        const videoContainer = $(this).parent().siblings('.video_preview');
        const files = this.files || [];
        if(files[0].size > 20480000){
            videoContainer.fadeOut(600)
            $('#video').parent().addClass('is-invalid');
            $('.size-info').addClass('invalid-feedback');
            return
        }
        if (!files.length) return;
        const video =videoContainer.find('video');
        video.hide();
        const progress = videoContainer.find('.progress');
        progress.find('.progress-bar').css('width',"0%");
        progress.find('span').html("0%");
        const reader = new FileReader();
        videoContainer.fadeIn(600);

        reader.onload = function (e) {


            videoSource.attr('src', e.target.result);
            video.fadeIn(600);
            video.append(videoSource);
            video.get(0).load();
            progress.find('.progress-bar').css('width',"100%");
            progress.find('span').html("100%");
        };

        reader.onprogress = function (e) {
            let percent = Math.round((e.loaded * 100) / e.total) + "%";
            progress.find('.progress-bar').css('width',percent);
            progress.find('span').html(percent);
        };
        reader.readAsDataURL(files[0]);
    });
});
