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
                                            <h1>Add new customer</h1>
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
                                                    <label for="customer-name">Customer Name <span>*</span> </label>
                                                    <input type="text" name="customer-name" id="customer-name" required>
                                                </div>
                                                <div>
                                                    <label for="c-last-name">Customer Last Name<span>*</span> </label>
                                                    <input type="text" name="c-last-name" id="c-last-name" required>

                                                </div>
                                                <div>
                                                    <label for="c-address">Address<span>*</span> </label>
                                                    <input type="text" name="c-address" id="c-address" required>

                                                </div>
                                                <div>
                                                    <label for="c-city">City <span>*</span></label>
                                                    <input type="text" name="c-city" id="c-city" required>

                                                </div>
                                                <div>
                                                    <label for="c-state">State <span>*</span></label>
                                                    <input type="text" name="c-state" id="c-state" required>

                                                </div>
                                                <div>
                                                    <label for="c-zip">Zip <span>*</span></label>
                                                    <input type="text" name="c-zip" id="c-zip" required>
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