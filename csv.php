<div class="wrapper">
    <!--<form id="csv_form" method="post" enctype="multipart/form-data">-->
        <div class="input_section">
            <div class="input_heading">Select file to upload</div>
            <input type="file" name="csv_file" id="csv_file" accept=".csv">
            <button onclick="upload_csv()">Submit</button>
        </div>
    <!--</form>-->

    <div class="container" id="csv_output_container">
        <b>Ready to upload?</b>
        <button onclick="post_csv_upload()">Upload</button>
        <button onclick="reset_csv_upload()">Cancel</button>
        <br><br>
        <table class="list" id="csv_output">

        </table>
    </div>
</div>

<!-- Leave blank for spacing -->
<div class="wrapper"></div>
