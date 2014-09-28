                            <form id="form7" class="form-horizontal" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Goverment Issued ID's:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_gid_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_gid = get_usermeta($user_id, 'ps_gid'); ?>
                                            <input type="hidden" name="ps_gid_meta" class="required" value="<?php echo $ps_gid; ?>">
                                            <?php $ps_gid_url = ( $ps_gid!='' ? site_url( 'assets/uploads/'.$ps_gid ) : '' ); ?>
                                            <a href="<?php echo $ps_gid_url; ?>" class="ps_gid_meta<?php echo ( $ps_gid!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Company ID:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_cid_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_cid = get_usermeta($user_id, 'ps_cid'); ?>
                                            <input type="hidden" name="ps_cid_meta" class="required" value="<?php echo $ps_cid; ?>">
                                            <?php $ps_cid_url = ( $ps_cid!='' ? site_url( 'assets/uploads/'.$ps_cid ) : '' ); ?>
                                            <a href="<?php echo $ps_cid_url; ?>" class="ps_cid_meta<?php echo ( $ps_cid!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Latest 3mos. Payslip:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_payslip_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_payslip = get_usermeta($user_id, 'ps_payslip'); ?>
                                            <input type="hidden" name="ps_payslip_meta" class="required" value="<?php echo $ps_payslip; ?>">
                                            <?php $ps_payslip_url = ( $ps_payslip!='' ? site_url( 'assets/uploads/'.$ps_payslip ) : '' ); ?>
                                            <a href="<?php echo $ps_payslip_url; ?>" class="ps_payslip_meta<?php echo ( $ps_payslip!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload 2x2 Colored ID Picture:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_idpic_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_idpic = get_usermeta($user_id, 'ps_idpic'); ?>
                                            <input type="hidden" name="ps_idpic_meta" class="required" value="<?php echo $ps_idpic; ?>">
                                            <?php $ps_idpic_url = ( $ps_idpic!='' ? site_url( 'assets/uploads/'.$ps_idpic ) : '' ); ?>
                                            <a href="<?php echo $ps_idpic_url; ?>" class="ps_idpic_meta<?php echo ( $ps_idpic!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">COE w/ Compensation:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_coe_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_coe = get_usermeta($user_id, 'ps_coe'); ?>
                                            <input type="hidden" name="ps_coe_meta" class="required" value="<?php echo $ps_coe; ?>">
                                            <?php $ps_coe_url = ( $ps_coe!='' ? site_url( 'assets/uploads/'.$ps_coe ) : '' ); ?>
                                            <a href="<?php echo $ps_coe_url; ?>" class="ps_coe_meta<?php echo ( $ps_coe!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Proof of billing ( under applican't name ):</label> 
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_proof_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_proof = get_usermeta($user_id, 'ps_proof'); ?>
                                            <input type="hidden" name="ps_proof_meta" class="required" value="<?php echo $ps_proof; ?>">
                                            <?php $ps_proof_url = ( $ps_proof!='' ? site_url( 'assets/uploads/'.$ps_proof ) : '' ); ?>
                                            <a href="<?php echo $ps_proof_url; ?>" class="ps_proof_meta<?php echo ( $ps_proof!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                </div>
                            </form>