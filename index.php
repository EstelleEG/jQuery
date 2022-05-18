<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jquery</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <div class="container">
        <h1 id="titre_1">Jquery</h1>
        <button id="hide"> Masquer le titre </button>
        <button id="show" > Afficher le titre </button>
    </div>

    <script>
        $(document).ready(function(){
            //alert('coucou')
            $('#hide').on('click', function(){

                console.log(this);

                $('#titre_1').fadeOut();
                $('#show').fadeIn();
                $('#hide').fadeOut();
            });

            $('#show').on('click', function(){

                $('#titre_1').fadeIn();
                $('#show').fadeOut();
                $('#hide').fadeIn();
            });

            // $('#show').on('click', function(){
            //     $('#titre_1').text('titre2');
            // } )

        });
    </script>

</body>
</html>

