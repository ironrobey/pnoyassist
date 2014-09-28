<div class="modal fade" id="loan-calculator" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<h4>Loan Calculator</h4>
            </div>
            <div class="modal-body">
            	<div class="pargroup">
            		<div class="row">
            			<div class="col-md-12">
            				<div class="par">
            					<p>
            						<a class="btn btn-success" href="">
            							<i class="iconfa-money"></i> Amount of Loan Desire: <strong> &#8369; <span id="amount40" class="color069"></span></strong>
            						</a>
            					</p>
            					<div id="slider40" style="margin-top:25px"></div>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<div class="par">
            					<p>
            						<a class="btn btn-success" href="">
            							<i class="iconfa-calendar"></i> Length of loan: <strong><span id="amount50" class="color069"></span></strong>
            						</a>
            					</p>
            					<div id="slider50" style="margin-top:25px"></0iv>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<p style="padding:0 10px;">Monthly Business Loan Payment: &#8369; <span id="monthlypaymentModal" class="color069"></span></p>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="modal-footer">
            	<a class="btn btn-default" data-dismiss="modal">close</a>
            </div>
        </div>
    </div>
</div>
<?php common_js(); ?>
<?php ( isset($js) ? parse_js( $js ) : '' ); ?>

<?php if($this->uri->segment(2)): ?>
<script type="text/javascript">
Shadowbox.init();
</script>
<?php endif; ?>

</body>
</html>
