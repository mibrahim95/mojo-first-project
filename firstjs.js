$(function () {
    $('.navbar').removeClass('active');
    var current = location.pathname;
    $('.navbar').each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
})

$(document).ready(function () {
    $('.snapchat').on('click', function () {
        $('.snapchatModal').modal('show');
    });

    $('.ui.accordion').accordion();
    
});