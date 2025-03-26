
<head>
    <title>Autocomplete with CodeIgniter 4 and AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <h1>Autocomplete</h1>
    
    <div class="ui-widget">
        <label for="search">Search: </label>
        <input type="text" id="search" name="search" class="form-control">
    </div>
    
    <script>
    $(document).ready(function() {
        $("#search").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "<?= site_url('https://mi-linux.wlv.ac.uk/~2125093/bhai/public/autocomplete/getUsers') ?>",
                    dataType: "json",
                    method: "POST",
                    data: {
                        search_term: request.term
                    },
                    success: function(data) {
                        response(data);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + " - " + error);
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {
                console.log("Selected: " + ui.item.value + " with ID: " + ui.item.id);
                // You can do something with the selected item here
            }
        });
    });
    </script>
</body>
