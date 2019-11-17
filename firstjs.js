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

    $('.step').on('click', function(){
        $('.step').removeClass('active');
        $('.educationgSeg').addClass('transition hidden');
        $(this).addClass('active');
        $('#'+$(this).data('seg')).removeClass('transition hidden');
    });

    $('.menu .item').tab();

    $( ".sortable" ).sortable({
        update: function(event, ui) {
            $('.todoNum').each(function(){
               $(this).html($(this).parents('.item').index()+1);
            });
        }
    });
    $( ".sortable" ).disableSelection();

});

var badgeNum = $('.todoItem').length + 1;
$('#addTodo').on('click', function () {
    if($('#newTodo').val() != '') {

        $('#todoList').append(
            '<div class="item todoItem">' +
            '<div class="ui checkbox right floated">'+
            '<input type="checkbox" class="todoComplete">'+
            '<label></label>' +
            '</div>'+
            '<div class="ui red circular label left floated todoNum">' + badgeNum + '</div> '
            + $('#newTodo').val() +
            '</div>');
        badgeNum = badgeNum + 1;
    }
});

$('#todoList').on('change','.todoComplete', function () {
   if($(this).is(':checked')){
       $(this).parents('.todoItem').find('.content').wrap('<strike>').addClass('green inverted');
   }else{
       $(this).parents('.todoItem').find('.content').unwrap().removeClass('green inverted');
   }
});