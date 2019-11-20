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
    var newTodo = $('#newTodo').val();
    if(newTodo != '') {

        $.post( "./index.php", { action: "submitTodo", todoTitle: newTodo, position: badgeNum }, function( data ) {
            console.log(data);
          });

        $('#todoList').append(
            '<div class="item todoItem">' +
                '<div class="right floated content">'+
                    '<div class="ui negative button"> Delete </div>'+
                    '<div class="ui positive button todoComplete">Complete</div>'+
                '</div>'+
                '<div class="ui red circular label left floated todoNum">' + badgeNum + '</div> '+
                '<div class="content todoContent">'
                    + newTodo +
                '</div>'+
            '</div>');
        badgeNum = badgeNum + 1;
    }
});

$('#todoList').on('click','.todoComplete', function () {
   if(!$(this).hasClass('completed')){
       $(this).addClass('completed');
       $(this).parents('.todoItem').find('.todoContent').wrap('<strike>');
       $(this).parents('.todoItem').find('.todoNum').removeClass('red').addClass('green');
   }else{
       $(this).removeClass('completed');
       $(this).parents('.todoItem').find('.todoContent').unwrap().removeClass('green');
       $(this).parents('.todoItem').find('.todoNum').addClass('red').removeClass('green');
   }
});

$('#todoList').on('click','.deleteTodo', function () {
    var id = $(this).parents('.todoItem').data('id');
    $.post( "./index.php", { action: "deleteTodo", id: id }, function( data ) {
        console.log(data);
      });


});

$('#searchText').on('keyup',function(){
    var value = $(this).val().toLowerCase();
    $("#tableToSearch tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});