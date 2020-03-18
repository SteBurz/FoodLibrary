$(document).ready(function(){
    createNewFoodEntry();
    changeFoodEntry();
    dataTables();
    logIn();
    logOut();
    signUp();
});

function createNewFoodEntry() {
    if ($('#addNewFood_form').length) {
        $('#addNewFood_form').submit(function(e) {
            e.preventDefault();

            $.post('./helper/addNewFood.php', {
                    foodName: $('#foodName').val(),
                    amount: $('#foodAmount').val(),
                    amountType: $('#foodAmountType').val(),
                    bestBefore: $('#foodBestBefore').val()
            }).then(function (data) {
                data = JSON.parse(data);
                if ( data.status === 'success'){
                    showMessage({
                        'form': $('#addNewFood_form'),
                        'message': 'Lebensmittel hinzugefügt.'
                    });
                } else {
                    showMessage({
                        'form': $('#addNewFood_form'),
                        'message': 'Etwas ist schief gelaufen!'
                    });
                }
            });

            waitAndReload($('#addFood'));
        });
    }

}

function changeFoodEntry() {
    $('[data-foodName]').on('click', function() {
       var selectedFood_name = $(this).attr('data-foodName');
       var selectedFood_amount = $(this).attr('data-amount');
       var selectedFood_amountType = $(this).attr('data-amountType');
       var selectedFood_bestBefore = $(this).attr('data-bestBefore');

       $('#changeFood_foodName').text(selectedFood_name);
       $('#changeFood_newFoodName').val(selectedFood_name).attr('placeholder', selectedFood_name);
       $('#changeFood_newAmount').val(selectedFood_amount).attr('placeholder', selectedFood_amount);
       $('#changeFood_newBestBefore').val(selectedFood_bestBefore).attr('placeholder', selectedFood_bestBefore);
       $('#changeFood_newAmountType').val(selectedFood_amountType);
       $('#deleteFood_name').val(selectedFood_name);
    });

    $('#changeFood_button').on('click', function() {
        $('#deleteFood_form').css('display', 'none');
        $('#changeFood_form').css('display', 'block');
    });

    $('#deleteFood_button').on('click', function() {
        $('#changeFood_form').css('display', 'none');
        $('#deleteFood_form').css('display', 'block');
    });

    $('#changeFood_submit').on('click', function(e) {
        e.preventDefault();

        $.post('./helper/changeExistingFood.php', {
                foodName: $('#changeFood_foodName').text(),
                newFoodName: $('#changeFood_newFoodName').val(),
                newAmountType: $('#changeFood_newAmountType').val(),
                newAmount: $('#changeFood_newAmount').val(),
                newBestBefore: $('#changeFood_newBestBefore').val()
        }).then(function (data) {
            data = JSON.parse(data);
            if ( data.status === 'success'){
                showMessage({
                    'form': $('#changeFood_form'),
                    'message': 'Lebensmittel abgeändert.'
                });
            } else {
                showMessage({
                    'form': $('#changeFood_form'),
                    'message': 'Lebensmittel gelöscht.'
                });
            }
        });

        waitAndReload($('#changeFood'));
    });

    $('#deleteFood_submit').on('click', function(e) {
        e.preventDefault();

        $.post('./helper/deleteExistingFood.php', {
                foodName: $('#deleteFood_name').val()
        }).then(function (data) {
            data = JSON.parse(data);
            if (data.status === 'success') {
                showMessage({
                    'form': $('#deleteFood_form'),
                    'message': 'Lebensmittel gelöscht.'
                });
            } else {
                showMessage({
                    'form': $('#deleteFood_form'),
                    'message': 'Etwas ist schiefgelaufen!'
                });
            }
        });

        waitAndReload($('#changeFood'));
    });

}


// used in loginScreen.php
function logIn() {
    $('#login_submit').on('click', function (e) {
        e.preventDefault();

        $.post('./helper/login.php', {
                userName: $('#login_username').val(),
                password: $('#login_password').val()
        }).then(function (data) {
            data = JSON.parse(data);
            if ( data.status === 'success'){
                window.location.reload();
            } else if ( data.status === 'noPermission') {
                console.log('Passwort oder Benutzername falsch. Bitte versuche es erneut.');
            } else if ( data.status === 'invalid Form') {
                console.log('Formular nicht valide.');
            } else {
                console.log('Huch! Da lief was falsch!');
            }
        });
    });
}


// used in isLoggedIn.php
function logOut() {
    $('#logout').on('click', function (e) {
        e.preventDefault();

        $.post('./helper/logout.php').then(function(data) {
            data = JSON.parse(data);
            if (data.status === 'success') {
                window.location.reload();
            } else if (data.status === 'failed') {
                console.log('failed')
            }
        });
    });
}

// used if loginScreen.php
function signUp() {
    $('#signup_submit').on('click', function (e) {

        e.preventDefault();

        $.post('./helper/signUp.php', {
            userName: $('#signup_username').val(),
            password: $('#signup_password').val()
        }).then(function (data) {
            data = JSON.parse(data);
            if ( data.status === 'success'){
                showMessage({
                    'form': $('#signUp_form'),
                    'message': 'Du wurdest erfolgreich angemeldet! Logge dich ein.'
                });
            } else if(data.status === 'userExists') {
                showMessage({
                    'form': $('#signUp_form'),
                    'message': 'Dieser benutzer existiert bereits.'
                });
            } else{
                showMessage({
                    'form': $('#signUp_form'),
                    'message': 'Da ist was schief gelaufen.'
                });
            }
        });
    });

}


function showMessage(options) {
    options.form.remove();
    $('.modal-footer').remove();
    $('.modal-body').append('<h2>'+options.message+'</h2>');
}


function waitAndReload(modalContainer) {
    setTimeout(function () {
        modalContainer.modal('hide');
        window.location.reload();
    }, 2000);
}


function dataTables() {
    $('#foodTable').DataTable({
        "order": [[ 2, "asc" ]]
    });

    var searchbar = $('input[type="search"]');

    $('.dataTables_length').addClass('bs-select');
    searchbar
        .addClass('form-control form-control-sm')
        .attr('placeholder', 'search');
}