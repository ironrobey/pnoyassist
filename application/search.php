<?php 
/*
Template Name: Search
*/
get_header(); ?>

<?php 
    $cur_user = wp_get_current_user(); 
?>

    <div class="container">

        <div class="row">
            <?php get_sidebar( $cur_user->roles[0] ); ?>
            <div class="col-md-9">

                <?php global $post; ?>

                <?php $results = search_user( $_GET['s'], $_GET['filter'], $cur_user->ID ); ?>

                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Search result for:</strong> <?php echo ucwords( $_GET['s'] ); ?></div>
                    <table class="table workplacements">
                        <input type="hidden" name="referrer" value="<?php echo $post->post_name;?>">
                        <thead>
                            <tr>
                                <th>Name/Institution</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach( $results as $result ): ?>
 							<tr>
 								<td><a href="#" class="view-user" data-id="<?php echo $result->ID; ?>"><?php echo $result->display_name; ?></a></td>
 								<td><?php echo $result->user_email; ?></td>
 								<td class="left"><?php echo get_user_meta( $result->ID, 'user_phone', true ); ?></td>
 							</tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">&nbsp;</td>
                            </tr>
                        </tfoot>

                    </table>
                </div><!-- /.panel -->

            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">View Workplacement</h4>
                </div><!-- /.modal-header -->
                <div class="modal-body">
                    <div class="alert hide" role="alert">
                        <p class="bold"> 
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        </p>
                    </div>
                    <div class="modal-container"></div>
                </div><!-- /.modal-body -->
                <?php if( is_page( 'inactive-work-placements' ) && !in_array( 'workplacement', $cur_user->roles) ): ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Update Work Placement <i class="fa fa-spinner hide"></i></button>
                </div><!-- /.modal-footer -->
                <?php endif; ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#myModal -->

<?php get_footer(); ?>