$("#sumbit").on('click', function () {
    var superperemenaya = $('#id').val();

    $.ajax({
        url: 'ajax.php',
        type:'post',
        data:{
            id:superperemenaya
        },
        dataType:'json'
    }).done(function (resultat) {
       // console.log(resultat)
        console.log(resultat.name);
        console.log(resultat.email);
        $("#result").html(resultat.name + ' ' + resultat.email);
    })

    
});