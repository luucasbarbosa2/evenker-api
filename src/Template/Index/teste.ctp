<input class = "token" type ="hidden" value ="<?=$token?>">
<script type="text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


    $.ajax({
        url: '/index/auth',
        type: 'POST',
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $(".token").val(),
            'Authorization': 'Basic osdasodnsakjfkjfnidusnfksjdf'
        },
        data: {param1: 'value1'},
    })
            .done(function () {
                console.log("success");
            })
            .fail(function () {
                console.log("error");
            })
            .always(function (data) {
                console.log(data);
                console.log("complete");
            });




</script>