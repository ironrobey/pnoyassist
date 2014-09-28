                        <div id="c-6">
                            <form id="form6" class="form-horizontal" role="form">
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">Co-borrower key</label>
                                        <input type="text" name="borrower-key" id="borrower-key" class="form-control input-default" value="<?php echo get_usermeta($user_id, 'borrower_key');?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary generate">Generate Key</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
                                    </div>
                                </div>

                            </form>
                        </div>