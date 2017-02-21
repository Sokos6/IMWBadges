<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<div class="wrap">

    <div id="icon-options-general" class="icon32"></div>
    <h1>IMW Badges</h1>

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox">

                        <h2><span>Let's Get Started!</span></h2>

                        <div class="inside">
                            <form method="post" action="">
                                <table class="form-table">
                                    <tr>
                                        <td>
                                            <label for="wpimw_username">IMW Username</label>
                                        </td>
                                        <td>
                                            <input name="wpimw_username" id="wpimw_username" type="text" value="" class="regular-text" />
                                        </td>
                                    </tr>
                                </table>

                                <p>
                                    <input class="button-primary" type="submit" name="wpimw_username_submit" value="Save" />
                                </p>
                            </form>
                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->
                    <div class="postbox">

                        <h2><span>Most Recent Badges</span></h2>

                        <div class="inside">
                            <p>Below are your 20 most recent badges</p>

                            <ul class="wpimw-badges">

                                <?php for( $i = 0; $i < 20; $i++ ): ?>
                                    <li>
                                        <ul>
                                            <li>
                                                <img class="wpimw-gravatar" width="120px" src="<?php echo $plugin_url . '/images/wp-badge.png'; ?>">
                                            </li>
                                            <li class="wpimw-badge-name">
                                                <a href="#">Badge Name</a>
                                            </li>
                                            <li class="wpimw-project-name">
                                                <a href="#">Project Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php endfor; ?>

                            </ul>

                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables .ui-sortable -->

            </div>
            <!-- post-body-content -->

            <!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">

                <div class="meta-box-sortables">

                    <div class="postbox">

                        <h2><span><?php esc_attr_e(
									'Sidebar Content Header', 'wp_admin_style'
								); ?></span></h2>

                        <div class="inside">
                            <p>
                                <?php esc_attr_e(
									'Everything you see here, from the documentation to the code itself, was created by and for the community. WordPress is an Open Source project, which means there are hundreds of people all over the world working on it. (More than most commercial platforms.) It also means you are free to use it for anything from your cat’s home page to a Fortune 500 web site without paying anyone a license fee and a number of other important freedoms.',
									'wp_admin_style'
								); ?>
                            </p>
                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables -->

            </div>
            <!-- #postbox-container-1 .postbox-container -->

        </div>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div>
<!-- .wrap -->