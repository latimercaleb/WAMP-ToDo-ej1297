// function to write to the db

// function to transition new list item

// test functions
$('#addButton').on('click', function(){
    var newListItemText = $('#newTask').val();
    $('#newTask').val("").focus();
    console.log(newListItemText);
    $('.task-list').append('<li>'+ newListItemText+'</li>');
});
