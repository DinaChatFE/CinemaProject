<script>
$(document).ready(function() {
    var MovieStatus = 0;
    $("#btn-add").click(function() {
        $("#Mymodel").modal("show");
        $("#img").attr('src', '../images/blank image.png');
    });
    $("#btn-close").click(function() {
        $('#Mymodel').modal('toggle');
    });
    $("#btn-close-buttom").click(function() {
        $('#Mymodel').modal('toggle');
    });
    $("#btnAdd").click(function() {
        var validationTitle12 = false;
        var validationDuration = false;
        var validationMoviePrice = false;
        var validationFileImage = false;
        const movieTitle = $("#Movie_title").val();
        const durationTime = $("#duration_time").val();
        const hall_id = $("#hall_id_add").val()
        const MoviePrice = $("#Movie_price").val();
        const fileInput = $("#file_input").val();
        const ImageName = $('#file_input')[0].files[0]['name'];
        if (movieTitle === '') {
            $("#errorMovieTitle").removeClass('d-none');
        } else {
            $("#errorMovieTitle").addClass('d-none');
            validationTitle12 = true;
        }
        if (durationTime === '') {
            $("#errordurationTime").removeClass('d-none');
        } else {
            $("#errordurationTime").addClass('d-none');
            validationDuration = true;
        }

        if (MoviePrice === '') {
            $("#errorMoviePrice").removeClass('d-none');
        } else {
            $("#errorMoviePrice").addClass('d-none');
            validationMoviePrice = true;
        }
        if (fileInput === '') {
            $("#errorfileImage").removeClass('d-none');
        } else {
            $("#errorfileImage").addClass('d-none');
            validationFileImage = true;
        }

        if (validationTitle12 == true && validationMoviePrice == true && validationDuration == true &&
            validationFileImage == true) {
            console.log('status:', MovieStatus);
            //add data to database
            $.ajax({
                type: "POST",
                url: "InsertData.php",
                data: {
                    'movieTitle': movieTitle,
                    'DurTime': durationTime,
                    'moviePrice': MoviePrice,
                    'moviestatus': MovieStatus,
                    'imgName': ImageName,
                    'hall_id': hall_id

                },
                cache: false,
                success: function() {
                    $.ajax({
                        type: "Get",
                        url: "GetData.php",
                        data: "data",
                        success: function(data) {
                            $('#Tableinfo').html(data);
                        }

                    });
                    $("#Movie_title").val('');
                    $("#duration_time").val('');
                    $("#Movie_price").val('');
                    $("#file_input").val('');
                    $("#img").attr('src', '../images/blank image.png');
                }
            });

        }
    });

    $(function() {
        $("#file_input").change(function(event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#img").attr("src", x);
        });
    })
    $('input[type="checkbox"]').click(function() {
        if ($(this).prop("checked") == true) {
            $("#status").attr('value', 'visible');
            MovieStatus = 1;
        } else if ($(this).prop("checked") == false) {
            $("#status").attr('value', 'Invisible');
            MovieStatus = 0;
        }
    });

    function addItemToTable(id, title, time, price, imagename) {
        $("#Tableinfo").append('<tr><td>' + id + '<td><td>' + title + '<td><td>' + time + '</td><td>' + price +
            '</td><td>' + imagename + '</td></tr>');
    }
    //load data from database
    $.ajax({
        type: "Get",
        url: "GetData.php",
        data: "data",
        success: function(data) {
            $('#Tableinfo').html(data);
        }
    });

    //Delete data from dataabse
    $('#Tableinfo').on('click', '#DeleteBtn', function() {
        var r = confirm("Are you sure about that?");
        if (r == true) {
            $ItemID = $(this).parent().parent().attr('id');
            console.log("id:", $ItemID);
            $.ajax({
                type: "POST",
                url: "DeleteData.php",
                data: {
                    'ItemID': $ItemID

                },
                cache: false,
                success: function() {
                    $.ajax({
                        type: "Get",
                        url: "GetData.php",
                        data: "data",
                        success: function(data) {
                            $('#Tableinfo').html(data);
                        }
                    });
                    console.log("Delete successfully");

                }
            });

        } else {
            //close confirm form
        }
    });
    //Update information of movie content
    $('#Tableinfo').on('click', '#EditBtn', function(e) {

        $("#MymodelUpdate").modal("show");
        $("#btn-close_update").click(function() {
            $('#MymodelUpdate').modal('toggle');

        });
        $("#Update-btn-close-buttom").click(function() {
            $('#MymodelUpdate').modal('toggle');
        });
        //take data from td of tablec
        e.preventDefault();

        const ItemID = $(this).parent().parent().children(':nth-child(2)');
        const MovieTitle = $(this).parent().parent().children(':nth-child(4)');
        const durationTime1 = $(this).parent().parent().children(':nth-child(6)');
        const moviePrice = $(this).parent().parent().children(':nth-child(8)');
        const hall_id = $(this).parent().parent().children(':nth-child(11)');
        const ImageView = $(this).parent().parent().children(':last-child()');


        $("#Movie_title_update").attr('value', '' + MovieTitle.val());
        $(
            "#duration_time_update").attr('value', '' + durationTime1.val());
        $(
            "#Movie_price_update").attr('value', '' + moviePrice.val());
        $("#imgUpdate").attr(
            'src', '../images/' + ImageView.val());
        $("#file_input-Update").attr('value', '' +
            ImageView.val());
        $("#hall_id_update").attr('value', '' + hall_id.val())


        $("#Updatebtn").click(function(e) {



            e.preventDefault()
            var validationTitle12 = false;
            var validationDuration = false;
            var validationMoviePrice = false;
            var validationFileImage = false;
            const movieTitleUp = $("#Movie_title_update").val();
            const durationTimeUp = $("#duration_time_update").val();
            const MoviePriceUp = $("#Movie_price_update").val();



            const imageNameUp = $('#file_input-Update')[0].files[0]['name'];

            if (movieTitleUp === '') {
                $("#errorMovieTitleUpdate").removeClass('d-none');
            } else {
                $("#errorMovieTitleUpdate").addClass('d-none');
                validationTitle12 = true;
            }
            if (durationTimeUp === '') {
                $("#errordurationTimeUpdate").removeClass('d-none');
            } else {
                $("#errordurationTimeUpdate").addClass('d-none');
                validationDuration = true;
            }

            if (MoviePriceUp === '') {
                $("#errorMoviePriceUpdate").removeClass('d-none');
            } else {
                $("#errorMoviePriceUpdate").addClass('d-none');
                validationMoviePrice = true;
            }
            if (imageNameUp === '') {
                $("errorfileImageUpdate").removeClass('d-none');
            } else {
                $("#errorfileImageUpdate").addClass('d-none');
                validationFileImage = true;
            }
            console.log(movieTitleUp, durationTimeUp, MoviePriceUp, imageNameUp)
            if (validationTitle12 == true && validationMoviePrice == true &&
                validationDuration == true && validationFileImage == true) {
                $.ajax({
                    method: "POST",
                    url: "EditData.php",
                    data: {
                        'movieID': ItemID.val(),
                        'movieTitle': movieTitleUp,
                        'DurTime': durationTimeUp,
                        'moviePrice': MoviePriceUp,
                        'imgName': imageNameUp,
                    },
                    cache: false,
                    success: function() {
                        $.ajax({
                            type: "GET",
                            url: "GetData.php",
                            data: "data",
                            success: function(data) {
                                $('#Tableinfo').html(data);
                            }
                        });
                    }
                });

            }

        });

    });

    function ClearUpdate() {
        $("#Movie_title_update").val('');
        $("#duration_time_update").val('');
        $("#Movie_price_update").val('');
        $("#imgUpdate").val('');
        $("#imgUpdate").attr('src', '../images/blank image.png');
    }

    $(function() {
        $("#file_input-Update").change(function(event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#imgUpdate").attr("src", x);
        });
    });
    $('input[type="checkbox"]').click(function() {
        if ($(this).prop("checked") == true) {
            $("#status-update").attr('value', 'visible');
            MovieStatus = 1;
        } else if ($(this).prop("checked") == false) {
            $("#status-update").attr('value', 'Invisible');
            MovieStatus = 0;
        }
    });




});
</script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script>
window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="dashboard.js"></script>
</body>
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
});
</script>
