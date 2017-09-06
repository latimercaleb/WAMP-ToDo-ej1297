//function to move items from the list to done.
$('.task-list').on('click', 'li', function(){
    $(this).fadeTo('slow', 0.68);
    $(this).css('text-decoration','line-through');
    $('.done-task-list').append(this);
    let itemID = $(this).find('.hidden-id').html();
    $.get('mark.php', {action: 'done', id: itemID});
    displayDone();
});

// call this on any information that may be in the database already in case the user closes the app and re-opens it
$('.done-task-list').children().css('text-decoration', 'line-through');
$('.done-task-list').children().fadeTo('slow', 0.68);
displayDone();

//function to delete done items
$('.done-task-list').on('click','li', function(){
    $(this).fadeOut(400,function(){
        let itemID = $(this).find('.hidden-id').html();
        $.get('mark.php', {action: 'delete', id: itemID});
        $(this).remove();
        displayDone();
    });
});

// function to display count and message of the done list or clear it if there are no done items
function displayDone(){
    let count = $('.done-task-list').children().length;
    if(count > 0){
        if(count == 1){
            $('.itemsCompleteCount').html(count + ' item done');
            $('.itemsCompleteCount').css('opacity', '0.68');
        }
        else{
            $('.itemsCompleteCount').html(count + ' items done');
            $('.itemsCompleteCount').css('opacity', '0.68');
        }
    }
    else {
        $('.itemsCompleteCount').html('');
    }
}
