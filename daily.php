<?php include 'header-admin.php';?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Daily Tasks</h2>
                </div>
            </div>
        </div>
        <!-- graph -->
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
                                        <a class="btn btn-primary margin_top_10 margin_left_10 " href="add-job.php"><i
                                                class="fa fa-plus" aria-hidden="true"></i> Add job </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full graph_body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content">
                                    <div class="table-scroll">
                                        <table id="table">
                                            <tr>
                                                <th>Customers</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>ZIP</th>
                                                <th>Dates</th>
                                                <th>Notes</th>
                                                <th>Status</th>
                                                <th>Display</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle active" aria-hidden="true"></i>
                                                        available</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i><button
                                                                id="but_add"></button>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle active" aria-hidden="true"></i>
                                                        available</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle active" aria-hidden="true"></i>
                                                        available</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle taken" aria-hidden="true"></i>
                                                        taken</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href=""><i class="fa fa-circle active" aria-hidden="true"></i>
                                                        available</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle active" aria-hidden="true"></i>
                                                        available</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle taken" aria-hidden="true"></i>
                                                        taken</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle taken" aria-hidden="true"></i>
                                                        taken</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle active" aria-hidden="true"></i>
                                                        available </a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kingsley Noel</td>
                                                <td>4072 Bluefish Dr SE</td>
                                                <td>Saint Petersburg</td>
                                                <td>Florida</td>
                                                <td>33705</td>
                                                <td>Sep 21, 2022</td>
                                                <td>Without special requirements</td>
                                                <td><a href="#"><i class="fa fa-circle taken"
                                                            aria-hidden="true"></i>taken</a>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
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
        <!-- end graph -->

    </div>
    <?php include 'footer.php';?>