                            <form method="POST" id="enter_key">
                                <input type="hidden" name="application_id" value="<?php echo ( isset( $loan_application_id ) ? $loan_application_id : 0 ); ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="borrower-key" class="control-label">Enter Co-borrower key</label>
                                        <input type="text" name="borrower_key" id="borrower-key" class="form-control input-default">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary enter-borrower-key">Link Principal and Coborrower Accounts</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
                                    </div>
                                </div>
                            </form>