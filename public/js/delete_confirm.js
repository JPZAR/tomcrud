// .submit = name of the event js is listening for
$('form.delete-member').submit(function(e) {

    var deleteConfirmed = confirm('Are you sure you want to DELETE this member?');

    //if 'true', submission will be processed otherwise, if false delete submission will be halted.
    return deleteConfirmed;

});