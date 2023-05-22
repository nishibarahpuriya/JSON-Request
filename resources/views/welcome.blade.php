<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    </head>
    <body class="antialiased">
        <button id="sendRequest">Send JSON Request</button>
        <p id="show-data">Show Message......</p>
    </body>
    <script>
        $(document).on('click','#sendRequest',function(){
            $.ajax({
                url: "/ajax-endpoint",
                type: "POST",
                data: {
                    name: "Nishi",
                    geneder: "feamle",
                    contact : 8084044665
                },
                success: function (response) {
                  $('#show-data').text(response.message);
                },
                error: function (request, error) {
                    alert("Request: " + JSON.stringify(request));
                }
            });
        });
    </script>
</html>
