                            <form id="form6" class="form-horizontal" role="form">
                                <input type="hidden" name="application_id" value="<?php #echo (isset($loan_application_id) ? $loan_application_id : '' ); ?>">
                                <input type="hidden" name="comaker" value="<?php #echo (isset($comaker)? $comaker: ''); ?>">
                                <p>I hereby certify that all information provided in this application and in all supporting documents are true and correct, and made for the purpose of obtaining credit. I further authorize Prime Esteem Services, Inc. to perform the necessary credit checkings and information on me and my co-maker's. I understand that this application may be denied with no obligation on the part of Prime Esteem Services, Inc. to disclose the reason thereof.</p>
                                <br>
                                <p>I acknowledge that upon receipt of the loan proceeds thru credit to my PINOY ASSIST Visa Debit Card, I am deemed to have fully examined the documents and have waived any and all objections thereto.</p>
                                <br>
                                <p>I authorize PINOY ASSIST to withdraw funds from my Company Issued ATM card to pay my monthly amortization. PINOY ASSIST will then deposit the remaining balance of my salary to the PINOY ASSIST Visa Debit Card. </p>

                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Co-Maker's Signature over printed name:</label>
                                        <dv class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="fileuploadPS" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_signature = get_usermeta($profile->user_id, 'ps_signature'); ?>
                                            <input type="hidden" name="ps_signature" class="required" value="<?php echo $ps_signature; ?>">
                                            <?php $ps_url = ( $ps_signature!='' ? site_url( 'assets/uploads/'.$ps_signature ) : '' ); ?>
                                            <a href="<?php echo $ps_url; ?>" class="view_ps<?php echo ( $ps_signature!='' ? : ' hide' ); ?><?php echo ( isset($status) && $status != 0 ? ' disabled' : '' );?>" rel="shadowbox">View Upload</a>    
                                        </dv>
                                    </div>
                                </div>
                            </form>