<?php
include 'admin_header.php';
include './config/db.php';

// query hall selector

$sql_selector_hall = "SELECT*FROM hall";

$query = mysqli_query($conn, $sql_selector_hall);

$selector_result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// query session selector

$sql_session = "SELECT *FROM session_detail";

$query_session = mysqli_query($conn, $sql_session);
$selector_session_result = mysqli_fetch_all($query_session, MYSQLI_ASSOC);
// query categories

$sql_categories = "SELECT * FROM categories";
$selectors_categories = mysqli_fetch_all(mysqli_query($conn, $sql_categories), MYSQLI_ASSOC);

?>
<style>
body {
    font-family: sans-serif !important;
}

.data-nav li:nth-child(1) a {
    color: blue !important;
}
</style>
<div class="container-fluid">
    <div class="row">

        <?php
include 'admin_menu.php';
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Admin</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <!------------- add button ------------------>
                        <button class="btn btn-success" id="btn-add">Add</button>

                        <!--------------------- end ----------------------->
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <!------------------ model pop up for filling data ----------------->
            <form class="post_data" method="post" enctype="multipart/form-data" id="post_data">
                <div class="modal fade" id="Mymodel" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="Model">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Movie</h5>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                    id="btn-close"> <span aria-hidden="true">&times;</span> </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Movie title</label>
                                        <input type="text" class="form-control" id="Movie_title" name="movie_title">
                                        <small id="errorMovieTitleUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">duration Time(mn)</label>
                                        <input type="text" class="form-control" id="duration_time" name="duration_time">
                                        <small id="errordurationTimeUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Movie Price</label>
                                        <input type="text" class="form-control" id="Movie_price" name="movie_price">
                                        <small id="errorMoviePriceUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">select categories</label>

                                        <select name="categories_id_add" id="categories_id_add" class="form-control">
                                            <option value="">choose</option>
                                            <?php foreach ($selectors_categories as $selector_categories): ?>
                                            <option value="<?php echo $selector_categories['categories_id'] ?>">
                                                <?php echo $selector_categories['categories_name'] ?></option>
                                            <?php endforeach?>
                                        </select>
                                        <small id="errorMoviePriceUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">select hall</label>

                                        <select name="hall_id_add" id="hall_id_add" class="form-control">
                                            <option value="">choose</option>
                                            <?php foreach ($selector_result as $selector): ?>
                                            <option value="<?php echo $selector['hall_id'] ?>">
                                                <?php echo $selector['hall_name'] ?></option>
                                            <?php endforeach?>
                                        </select>
                                        <small id="errorMoviePriceUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Select session</label>
                                        <select name="hall_id_add" id="session_id_add" class="form-control">
                                            <option value="">choose</option>
                                            <?php foreach ($selector_session_result as $selector_session): ?>
                                            <option value="<?php echo $selector_session['session_id'] ?>">
                                                <?php echo $selector_session['session_name'] ?></option>
                                            <?php endforeach?>
                                        </select>
                                        <small id="errorMoviePriceUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-mb-6">
                                            <label for="file_input" class="col-form-label">Image</label><br>
                                            <div class="custom-file">

                                                <input type="file" id="file_input" value="" name="filename"
                                                    class="form-control">
                                                <small id="errorfileImageUpdate"
                                                    class="form-text text-danger d-none">This field is required!</small>
                                                <div style="width:100px; height:100px; background-color: grey; margin-top: 10px;"
                                                    id="view-image">
                                                    <img src="" alt="" id="img" style="width:100px; height:100px;">
                                                </div>
                                                <div class="col-mb-6">
                                                    <label for="message-text" class="col-form-label">Movie
                                                        Status</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" value="" id="flexCheckDefault">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with radio button" value="Invisible"
                                                            id="status">
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="" alt="">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    id="btn-close-buttom">Close</button>
                                <button type="button" class="btn btn-primary" id="btnAdd">Add-info</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!----------------------- end --------------------->
            <!-------------------------------- Model for update --------------------------->
            <form class="post_data" method="post" enctype="multipart/form-data" id="post_data-update">
                <div class="modal fade" id="MymodelUpdate" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="Model">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelUpdate">Add Movie</h5>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                    id="btn-close_update"> <span aria-hidden="true">&times;</span> </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Movie title</label>
                                        <input type="text" class="form-control" id="Movie_title_update"
                                            name="movie_title">
                                        <small id="errorMovieTitleUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">duration Time</label>
                                        <input type="text" class="form-control" id="duration_time_update"
                                            name="duration_time">
                                        <small id="errordurationTimeUpdate" class="form-text text-danger d-none">This
                                            field is required!</small>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Movie Price</label>
                                        <input type="text" class="form-control" id="Movie_price_update"
                                            name="movie_price">
                                        <small id="errorMoviePrice" class="form-text text-danger d-none">This field is
                                            required!</small>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-mb-6">
                                            <label for="message-text" class="col-form-label">Image</label><br>
                                            <div class="custom-file">
                                                <input type="text" id='hall_id_update' value="" class="form-control">
                                                <input type="file" id="file_input-Update" value="" name="filename">

                                                <small id="errorfileImage" class="form-text text-danger d-none">This
                                                    field is required!</small>
                                                <div style="width:100px; height:100px; background-color: grey; margin-top: 10px;"
                                                    id="view-image">
                                                    <img src="" alt="" id="imgUpdate"
                                                        style="width:100px; height:100px;">
                                                </div>
                                                <div class="col-mb-6">
                                                    <label for="message-text" class="col-form-label">Movie
                                                        Status</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" value="">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with radio button" value="Invisible"
                                                            id="status-update">
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="" alt="">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    id="Update-btn-close-buttom">Close</button>
                                <button type="submit" class="btn btn-primary" id="Updatebtn">Update</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--------------------------------------- end ---------------------------------->
            <div class="table-responsive">
                <table id="table_id" class="table table-striped table-sm">

                    <thead>
                        <tr>
                            <th>No-&nbsp;Status</th>
                            <th>Movie Title</th>
                            <th>Duration Time</th>
                            <th>Movie Price</th>
                            <th>Status</th>
                            <th>Hall Id</th>
                            <th>image</th>
                        </tr>
                    </thead>
                    <tbody id="Tableinfo">

                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php
include 'admin_footer.php';
?>

</html>