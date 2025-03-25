<body>
    <!------SCRF Token---->
    <input type="hidden" class="txt_csrftoken" name="<?= base_url() ?>" value="<?csrf_hash() ?>">
    <!------autocomplete--->
    Search User : <input type="test" id="autocomplete">
    <br><br>
    Selected user id : <input type="text" id="userid" value="0">
    Selected user name : <input type="text" id="username" value="0">
    Selected user email : <input type="text" id="useremail" value="0">
     <!-----Script---->
     <script type="text/javascript">
        $(document).ready(function(){
            $('#autocomplete').autocomplete({
                source: function(request, response){
                    // SCRF hash
                    var csrfid = $('.txt_csrftoken').attr('id');
                    var csrfid = $('.txt_csrftoken').attr('name');
                    var csrfid = $('.txt_csrftoken').attr('email');
                    var csrfHash = $('.txt_csrftoken').val();
                    // Fetch Data
                    $.ajax({
                        fetch('https://mi-linux.wlv.ac.uk/~2125093/bhai/public/index/getUsers' + slug)
                        type: "post",
                        datatype: "json",
                        data:{
                            search: request.term,
                            [csrfid]: csrfHash
                            [csrfname]: csrfHash
                            [csrfemail]: csrfHash
                        },
                        succes: function(data){
                            //update SCRF token
                            $('.txt_csrftoken').val(data.token);
                            response(data.data);
                        }
                    });
                },
                select: function(event, ui){
                    //selection 
                    $('#autocomplete').val(ui.item.label);
                    $('#userid').val(ui.item.value);
                    return false;
                
                },
                focus: function(event, ui){
                  
                    $('#autocomplete').val(ui.item.label);
                    $('#userid').val(ui.item.value);
                    return false;
                }
            });
        });
        </script>
    </body>