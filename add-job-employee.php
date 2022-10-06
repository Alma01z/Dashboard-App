<?php include 'header-worker.php';?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Jobs</h2>
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
                                            <h1>Add your job</h1>
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
                                                    <label for="customer">Customer <span>*</span> </label>
                                                    <input type="text" name="customer" id="customer" required>
                                                </div>
                                                <div>
                                                    <label for="address">Address<span>*</span> </label>
                                                    <input type="text" name="address" id="address" required>

                                                </div>
                                                <div>
                                                    <label for="city">City <span>*</span></label>
                                                    <input type="text" name="city" id="city" required>

                                                </div>
                                                <div>
                                                    <label for="state">State <span>*</span></label>
                                                    <input type="text" name="state" id="state" required>

                                                </div>
                                                <div>
                                                    <label for="zip">Zip <span>*</span></label>
                                                    <input type="text" name="zip" id="zip" required>

                                                </div>
                                                <div>
                                                    <label for="mdriven">Mileage driven <span>*</span></label>
                                                    <input type="text" name="mdrivene" id="mdriven" required>

                                                </div>
                                                <div>
                                                    <label for="tdriven"> Time driven<span>*</span></label>
                                                    <input type="text" name="tdrivene" id="tdriven" required>

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