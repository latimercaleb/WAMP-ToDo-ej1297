// function to write to the db

//keypress handle for when enter is pressed when filling out the form
// $('#newTask').keypress(function(e){
//     if(e.keyCode === 13){ // checks to see if the key pressed is the enter key (or code 13)
//         $('#addButton').click(); // calls the event
//     }
// });
//
// // function to add new list item
// // THIS FUCKING FUNCTION COST ME THREE HOURS OF DEBUGGING
// $('#addButton').on('click', function(){
//     //var newListItemText = $('#newTask').val();
//     //$('#newTask').val("").focus();
//     //$('.task-list').append('<li>'+ newListItemText+'</li>');
//     displayDone();
// });

//function to move items from the list to done.
$('.task-list').on('click', 'li', function(){
    $(this).fadeTo('slow', 0.68);
    $(this).css('text-decoration','line-through');
    $('.done-task-list').append(this);
    let itemName = $(this).html();
    $.get('mark.php', {as: 'done', name: itemName});
    displayDone();
});

$('.done-task-list').children().css('text-decoration', 'line-through');
$('.done-task-list').children().fadeTo('slow', 0.68);
displayDone();

//function to delete done items
$('.done-task-list').on('click','li', function(){
    $(this).fadeOut(400,function(){
        $(this).remove();
        let itemName = $(this).html();
        $.get('mark.php', {as: 'delete', name:'itemName'});
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
