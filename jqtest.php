<?php
include('header.php');
?>
<div id="main">
<div id="jqxgrid">
<script type="text/javascript">

$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [{ name: 'LastName' },{ name: 'FirstName' },{ name: 'JobTitle' },{ name: 'Address' },{ name: 'City' },],
        url: 'data.php'
    };
    $("#jqxgrid").jqxGrid({
        source: source,
        theme: 'classic',
        columns: [{ text: 'Last Name', datafield: 'LastName', width: 250 },{ text: 'First Name', datafield: 'FirstName', width: 150 },{ text: 'Job Title', datafield: 'JobTitle', width: 180 },{ text: 'Address', datafield: 'Address', width: 200 },{ text: 'City', datafield: 'City', width: 120 }]
    });
});
</script>
</div>
</div>
<div class="footer">
<?php include('footer.php'); ?>
</div>