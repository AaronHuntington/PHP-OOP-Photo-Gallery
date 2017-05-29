<?php 
    include("includes/header.php"); 
    if(!$session->is_signed_in()){redirect("login.php");}

    $photos = photo::find_all();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <?php include("includes/top_nav.php"); ?>
    <?php include("includes/side_nav.php"); ?>
</nav>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Photos
                <!--     <small>Subheading</small> -->
                <p class="bg-success"><?php echo $message; ?></p>
                </h1>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Id</th>
                                <th>File Name</th>
                                <th>Title</th>
                                <th>Size</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($photos as $photo) : ?>
                                <tr>
                                    <td>
                                        <img class="admin-photo-thumbnail" src="<?php echo $photo->picture_path(); ?>">

                                        <div class="action_link">
                                            <a href="delete_photo.php/?id=<?php echo $photo->id; ?>">
                                                Delete
                                            </a>
                                            <a href="edit_photo.php?id=<?php echo $photo->id; ?>">
                                                Edit
                                            </a>    
                                            <a href="../photo.php?id=<?php echo $photo->id; ?>">
                                                View
                                            </a>



                                        </div>



                                    </td>
                                    <td><?php echo $photo->id; ?></td>
                                    <td><?php echo $photo->filename; ?></td>
                                    <td><?php echo $photo->title; ?></td>
                                    <td><?php echo $photo->size; ?></td>
                                    <td>
                                        <?php 
                                            $comments = comment::find_the_comments($photo->id);

                                            echo '<a href="comment_photo.php?id='.$photo->id.'">';
                                            echo count($comments); 
                                            echo '</a>';
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>






            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>