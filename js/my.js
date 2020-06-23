$(document).ready(function(){
    $("#myForm").submit(function(){
        var honnan = $('#origin');
        var hova = $('#destination');
        var start = $('#depart');
        var end = $('#return');
        var emil = $('#email');
        var seat = $('#seat option:selected');
        if (honnan.val()==""){
            alert("Adja meg az utazás kezdőpontját!");
            honnan.addClass('not-valid');
            return false;
        }else if (hova.val()==""){
            alert("Adja meg az utazás végpontját!");
            hova.addClass('not-valid');
            return false;
        }else if (start.val()==""){
            alert("Adja meg az indulás idejét!");
            start.addClass('not-valid');
            return false;
        }else if (end.val()==""){
            alert("Adja meg az indulás végét!");
            end.addClass('not-valid');
            return false;
        }else if (emil.val()==""){
            alert("Adja meg az e-mail címét!");
            emil.addClass('not-valid');
            return false;
        }else if (seat.val()=="Személy"){
            alert("Adja meg a személyek számát!");
            emil.addClass('not-valid');
            return false;
        }
        else if (!validateEmail(emil.val())){
            alert("Adjon meg egy érvényes e-mail címet!");
            return false;
        }

    });
});

//Validate email
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}