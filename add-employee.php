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
        <div class="row column2 graph margin_bottom_30">
            <div class="col-md-l2 col-lg-12">
                <div class="white_shd full">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-8 mt-3">
                                        <div class="locations">
                                            <h1>Add new employee</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full graph_body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content">
                                    <div class="content_body">
                                        <form action="" method="post">
                                            <fieldset>
                                                <div>
                                                    <label for="e-name">Employee Name <span>*</span> </label>
                                                    <input type="text" name="e-name" id="e-name" required>
                                                </div>
                                                <div>
                                                    <label for="e-last-name">Emoloyee Last Name<span>*</span> </label>
                                                    <input type="text" name="e-last-name" id="e-last-name" required>

                                                </div>
                                                <div>
                                                    <label for="e-mail">Email<span>*</span> </label>
                                                    <input type="e-mail" name="e-mail" id="e-mail" required>

                                                </div>
                                                <div>
                                                    <label for="password">Password<span>*</span> </label>
                                                    <input type="password" name="password" id="password" required>

                                                </div>
                                                <div>
                                                    <label for="e-city">City <span>*</span></label>
                                                    <input type="text" name="e-city" id="e-city" required>

                                                </div>
                                                <div>
                                                    <label for="e-state">State <span>*</span></label>
                                                    <input type="text" name="e-state" id="e-state" required>

                                                </div>
                                                <div>
                                                    <label for="m-driven">Mileage driven <span>*</span></label>
                                                    <input type="text" name="m-driven" id="m-driven" required>

                                                </div>
                                                <div>
                                                    <label for="t-driven">Time driven<span>*</span></label>
                                                    <input type="text" name="t-driven" id="t-driven" required>

                                                </div>
                                                <div>
                                                    <label for="t-driven">Upload photo<span>*</span></label>
                                                    <input type="file" id="e-photo" name="e-photo">
                                                </div>

                                                <div>
                                                    <button type="submit">SAVE</button>
                                                </div>
                                            </fieldset>
                                        </form>

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