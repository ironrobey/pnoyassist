							<form id="form4" class="form-horizontal" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Goverment Issued ID's:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_gid = get_usermeta($comaker, 'ps_gid'); ?>
                                            <?php if( $ps_gid!='' ): ?>
                                            <a href="<?php echo site_url( 'assets/uploads/'.$ps_gid ); ?>" rel="shadowbox">View Upload</a>
                                            <?php else: ?>
                                            <p class="error">Please upload this requirement in comakers account. Thank you!</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Company ID:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_cid = get_usermeta($comaker, 'ps_cid'); ?>
                                            <?php if( $ps_cid != '' ): ?>
                                            <a href="<?php echo site_url( 'assets/uploads/'.$ps_cid ); ?>" rel="shadowbox">View Upload</a>
                                            <?php else: ?>
                                            <p class="error">Please upload this requirement in comakers account. Thank you!</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">COE w/ Compensation:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_coe = get_usermeta($comaker, 'ps_coe'); ?>
                                            <?php if($ps_coe!=''): ?>
                                            <a href="<?php echo site_url( 'assets/uploads/'.$ps_coe ); ?>" rel="shadowbox">View Upload</a>
                                            <?php else: ?>
                                            <p class="error">Please upload this requirement in comakers account. Thank you!</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload 2x2 Colored ID Picture:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_idpic = get_usermeta($comaker, 'ps_idpic'); ?>
                                            <?php if($ps_idpic!=''): ?>
                                            <a href="<?php echo site_url( 'assets/uploads/'.$ps_idpic ); ?>" rel="shadowbox">View Upload</a>
                                            <?php else:?>
                                            <p class="error">Please upload this requirement in comakers account. Thank you!</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Proof of billing ( under applican't name ):</label> 
                                        <div class="col-md-12 row">
                                            <?php $ps_proof = get_usermeta($comaker, 'ps_proof'); ?>
                                            <?php if($ps_proof!=''): ?>
                                            <a href="<?php echo site_url( 'assets/uploads/'.$ps_proof ); ?>" class="ps_proof_meta<?php echo ( $ps_proof!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                            <?php else: ?>
                                            <p class="error">Please upload this requirement in comakers account. Thank you!</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
							</form>