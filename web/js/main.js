// TODO: Refactor shitty javascript
$(function() {
    // Hide everything to start
    $('#url-form').hide();
    $('#balance').hide();

    var url = localStorage.getItem('url');

    // If they have url in localstorage just grab the balance
    if (url) {
        makeAjaxRequest(url);
        $('#balance').show();
    } else {
        $('#url-form').show();
        $('#show-button').click(function(e) {
            if ($('#url').val()) {
                $('#url-form').hide();
                makeAjaxRequest($('#url').val());
                $('#balance').show();
            }

            e.preventDefault();
        })

    }

    function makeAjaxRequest(url) {
        $('#main').append($('<img src="' + base + '/img/loader.gif' + '" id="loader" />'));
        $.get(base + '/balance', {url: url, ajax: true}, function(data) {
            localStorage.setItem('url', url);
            $('#loader').remove();
            $('#balance').html(data);
        });
    }
});