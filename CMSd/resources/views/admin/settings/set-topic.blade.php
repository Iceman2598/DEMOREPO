<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('admin.layouts.css')
</head>

<body>

    <div>
        <header>
            @include('admin.layouts.topbar')
        </header>

        @include('admin.layouts.sidebar')

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inflibinet</a>
                                            </li>
                                            <li class="breadcrumb-item active">set-topic</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Admin Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!---- try --->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Set Topics</h4>

                                    <em><strong>Note that if submissions have been made or reviewers signed up already,
                                            you should only add new topics to the end of the list or change a topic's
                                            name to clarify it. If you want to delete a topic in the middle of the list,
                                            replace its name with N/A or something authors and reviewers will know not
                                            to select.</strong></em>

                                    <form method="post" action="/submission/chair/set_topics.php">
                                        <input type="hidden" name="token" value="6911fbb1e71367c8bc6747fc2e7afce5">

                                        <p>Topics are used when making automated review assignments. Both authors and
                                            reviewers are asked to select topics. Enter a sequential list of topics
                                            below. When you click on <em>Set Topics</em>, topics will be added
                                            sequentially regardless of the Topic ID listed, with blank topics ignored;
                                            thus topics should only be deleted until a submission has been made or
                                            reviewer signed up. The <em>Short Name</em> field is optional; if present,
                                            it is used on pages where a long topic name may not display well.</p>

                                        <div class="form-group row">
                                            <label for="topicTable" class="col-lg-2 col-form-label">Topic Table:</label>
                                            <div class="col-lg-10">
                                                <table border="0" cellspacing="1" cellpadding="8" id="topicTable"
                                                    class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Topic ID</th>
                                                            <th>Topic Name</th>
                                                            <th>Short Name (Max 20 chars)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Topics rows here -->

                                                        <!-- Additional rows as required -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Add more topic rows script -->
                                        <div class="form-group row">
                                            <div class="col-lg-10 offset-lg-2">
                                                <span onclick="addTopicRow()" class="topic_link"
                                                    style="text-decoration: underline; cursor: pointer;">Add More
                                                    Rows</span>
                                            </div>
                                        </div>

                                        <script language="javascript">
                                            var topicNum = 1;
                                            var row = 1;
                                            function addTopicRow() {
                                                var topicTable = document.getElementById("topicTable");
                                                if (topicTable) {
                                                    for (var j = 1; j <= 5; j++) {
                                                        var topicRow = topicTable.insertRow(-1);
                                                        topicRow.className = "row" + row;
                                                        var idCell = topicRow.insertCell(-1);
                                                        idCell.align = "center";
                                                        idCell.innerHTML = topicNum;
                                                        var nameCell = topicRow.insertCell(-1);
                                                        nameCell.innerHTML = "<input name=\"name-" + topicNum + "\" value=\"\" size=\"50\" maxlength=\"250\" />";
                                                        var shortCell = topicRow.insertCell(-1);
                                                        shortCell.innerHTML = "<input name=\"short-" + topicNum + "\" value=\"\" size=\"20\" maxlength=\"20\" />";
                                                        topicNum++;
                                                        row = (row == 1) ? 2 : 1; // Alternates row color
                                                    }
                                                }
                                            }
                                        </script>

                                        <!-- Form Options -->
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Allow authors to select multiple
                                                submission topics?</label>
                                            <div class="col-lg-10">
                                                <label><input type="radio" name="OC_multipleSubmissionTopics"
                                                        value="1">Yes</label>
                                                <label><input type="radio" name="OC_multipleSubmissionTopics" value="0"
                                                        checked>No</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Allow committee members to select
                                                multiple submission topics?</label>
                                            <div class="col-lg-10">
                                                <label><input type="radio" name="OC_multipleCommitteeTopics" value="1"
                                                        checked>Yes</label>
                                                <label><input type="radio" name="OC_multipleCommitteeTopics"
                                                        value="0">No</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Display topics
                                                alphabetically?</label>
                                            <div class="col-lg-10">
                                                <label><input type="radio" name="OC_topicDisplayAlpha"
                                                        value="1">Yes</label>
                                                <label><input type="radio" name="OC_topicDisplayAlpha" value="0"
                                                        checked>No</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-10 offset-lg-2">
                                                <input type="submit" name="submit" class="btn btn-primary"
                                                    value="Set Topics">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- end row -->
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @include('admin.layouts.footer')
    </div>

    @include('admin.layouts.js')

</body>

</html>