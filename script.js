// function to write to the db

// function to transition new list item


// function to add new list item
$('#addButton').on('click', function(){
    var newListItemText = $('#newTask').val();
    $('#newTask').val("").focus();
    console.log(newListItemText);
    $('.task-list').append('<li>'+ newListItemText+'</li>');
    // perhaps extract this into it's own function for easier use later
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
});

//function to move items from the list to done.
$('.task-list').on('click', 'li', function(){
    $(this).css('text-decoration','line-through');
    $('.done-task-list').append(this);
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
});

//function to delete done items
$('.done-task-list').on('click','li', function(){
    console.log('triggered');
    $(this).remove();
    // perhaps have some sort of transition here or a fade out or something
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
});
