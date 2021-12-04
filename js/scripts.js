var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

var oldCardType = $('#card-type').val();

function checkIfCardTypeHasChanged(oldCardType) {
    var newCardType = $('#card-type').val();
    if (newCardType != oldCardType) {
        $('#verifyEditModal').modal('show')
    } else { 
        console.log('card type has not changed'); 
    }
}