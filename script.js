// function to write to the db

// add a keypress handle for when enter is pressed when filling out the form
// add some styling to the button to make it look better

// function to add new list item
$('#addButton').on('click', function(){
    var newListItemText = $('#newTask').val();
    $('#newTask').val("").focus();
    console.log(newListItemText);
    $('.task-list').append('<li>'+ newListItemText+'</li>');
    displayDone();
});

//function to move items from the list to done.
$('.task-list').on('click', 'li', function(){
    $(this).fadeTo('slow', 0.68);
    $(this).css('text-decoration','line-through');
    $('.done-task-list').append(this);
    displayDone();
});

//function to delete done items
$('.done-task-list').on('click','li', function(){
    console.log('triggered');
    $(this).fadeOut(400,function(){
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
        }
        else{
            $('.itemsCompleteCount').html(count + ' items done');
        }
    }
    else {
        $('.itemsCompleteCount').html('');
    }
}
