<div id="mainwrapper" class="mainwrapper">
    
    <?php $role_name = role_name( $this->session->userdata( 'login_data' )['role'] ); ?>
    
    <div class="header">
        <div class="logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url( 'assets/images/comlogo.png' ); ?>" alt="" /></a>
        </div>
        <?php main_navi_display(); ?>
    </div>
    
    <div class="leftpanel">
        
        <?php navigation_display(); ?>
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="<?php echo site_url( $role_name ); ?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Dashboard</li>
        </ul>
        
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>All Features Summary</h5>
                <h1><?php echo ucwords( $this->uri->segment(1) ); ?> Dashboard</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
                <h4 class="widgettitle">Data Table</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Name</th>
                            <th class="head1">Email</th>
                            <th class="head0">Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach( $users as $user ): ?>
                        <tr class="gradeX">
                          <td class="aligncenter"><span class="center">
                            <input type="checkbox" name="id" value="<?php echo $user->user_id; ?>"/>
                          </span></td>
                            <td><?php echo get_usermeta( $user->user_id, 'firstname' ); ?> <?php echo get_usermeta( $user->user_id, 'lastname' ); ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo get_usermeta( $user->user_id, 'phone_number' ); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2014. PinoyAssist. All Rights Reserved.</span>
                    </div>
                    <div class="footer-right">
                        <span>Designed by: <a href="http://tektile.com.ph/">Tektile Web Technologies</a></span>
                    </div>
                </div><!--footer-->
            
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->