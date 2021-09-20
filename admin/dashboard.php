<?php include "includes/admin_header.php"; ?>
    <div id="wrapper">
        <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin Dashboard
                            <small><?php echo $_SESSION['username'] ?></small>
                        </h1>
                    </div>
                </div>


                <!-- /.row -->

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div class='huge'><?php echo $post_count = recordCount('posts') ?></div>
                                        <div>Posts</div>

                                    </div>
                                </div>
                            </div>
                            <a href="./posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div class='huge'><?php echo $comment_count = recordCount('comments') ?></div>
                                        <div>Comments</div>

                                    </div>
                                </div>
                            </div>
                            <a href="./comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div class='huge'><?php echo $user_count = recordCount('users') ?></div>
                                        <div> Users</div>

                                    </div>
                                </div>
                            </div>
                            <a href="./users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div class='huge'><?php echo $category_count = recordCount('categories') ?></div>
                                        <div>Categories</div>

                                    </div>
                                </div>
                            </div>
                            <a href="./categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
<!--表格-->

                <?php

                $post_published_count = checkStatus('posts', 'post_status', 'published');

                $post_draft_count = checkStatus('posts', 'post_status', 'draft');

                $unapproved_comments_count = checkStatus('comments', 'comment_status', 'unapproved');

                $subscriber_count = checkUserRole('users', 'user_role', 'subscriber');

                ?>



<div class="row">
    <script type="text/javascript">
        google.load("visualization", "1.1", {packages:["bar"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Data', 'Count'],
                ['All Posts', <?php echo $post_count; ?>],
                ['Active Posts', <?php echo $post_published_count; ?>],
                ['Comments', <?php echo $comment_count; ?>],
                ['Users', <?php echo $user_count; ?>],
                ['Categories', <?php echo $category_count; ?>],
                ['Draft Posts', <?php echo $post_draft_count; ?>],
                ['Pending Comments', <?php echo $unapproved_comments_count; ?>],
                ['Subscriber', <?php echo $subscriber_count; ?>]


            ]);

            var options = {
                chart: {
                    title: '',
                    subtitle: '',
                },
                bars: 'vertical',
                vAxis: {format: 'decimal'},
                height: 400,
                colors: ['#1b9e77', '#d95f02', '#7570b3']
            };

            var chart = new google.charts.Bar(document.getElementById('chart_div'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <div id="chart_div" style="width: 900px; height=500px;"></div>

</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>