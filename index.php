<?php include 'header-admin.php';?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Map</h2>
                </div>
            </div>
        </div>
        <div class="row column2 graph margin_bottom_30">
            <div class="col-md-l2 col-lg-12">
                <div class="white_shd full">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 mt-3">
                                        <div class="locations">
                                            <h2>All jobs</h2>
                                        </div>
                                        <div class="locations padding_left_10">
                                            <input class="padding_left_10" type="text" placeholder="Search..">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full graph_body">
                        <div class="row">
                            <div class="col-md-12 margin_bottom_30 ">
                                <div class="map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14115.028197507352!2d-82.72710777135352!3d27.817248223942457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2e35ca03ada99%3A0x73967ed17651532e!2sKenneth%20City%2C%20FL%2033709%2C%20USA!5e0!3m2!1sen!2srs!4v1665002583864!5m2!1sen!2srs"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="padding_left_40">Recent Projects</h4>
                                    <a href="daily.php" class="text-muted padding_right_10">See all
                                        projects</a>
                                </div>
                                <div class="content">
                                    <div class="area_chart" style="overflow-x:auto;">
                                        <table id="table">
                                            <tr>
                                                <th>Customer</th>
                                                <th>Adress</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>ZIP</th>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>