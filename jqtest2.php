<head>


<script type="text/javascript" src="jqwidgets/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.edit.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var data = {};
            var theme = 'classic';
            var source =
            {
                datatype: "json",
                datafields: [
					 { name: 'staff_id' },
					 { name: 'FirstName' },
					 { name: 'LastName' },
					 { name: 'Title' },
					 { name: 'Address' },
					 { name: 'City' },
					 { name: 'Country' }
                ],
                id: 'staff_id',
                url: 'data.php',
                updaterow: function (rowid, rowdata) {
                    // synchronize with the server - send update command
                    var data = "update=true&FirstName=" + rowdata.FirstName + "&LastName=" + rowdata.LastName + "&Title=" + rowdata.Title;
                    data = data + "&Address=" + rowdata.Address + "&City=" + rowdata.City + "&Country=" + rowdata.Email";
                    data = data + "&staff_id=" + rowdata.staff_id;
                    $.ajax({
                        dataType: 'json',
                        url: 'data.php',
                        data: data,
                        success: function (data, status, xhr) {
                            // update command is executed.
                        }
                    });
                }
            };
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 700,
                height: 350,
                selectionmode: 'singlecell',
                source: source,
                theme: theme,
                editable: true,
                columns: [
                      { text: 'EmployeeID', editable: false, datafield: 'staff_ID', width: 100 },
                      { text: 'First Name', columntype: 'dropdownlist', datafield: 'FirstName', width: 100 },
                      { text: 'Last Name', columntype: 'dropdownlist', datafield: 'LastName', width: 100 },
                      { text: 'Title', datafield: 'Title', width: 180 },
                      { text: 'Address', datafield: 'Address', width: 180 },
                      { text: 'City', datafield: 'City', width: 100 },
                      { text: 'Email', datafield: 'Email', width: 140 }
                  ]
            });
        });
    </script>
</head>
<body class='default'>
	<div id="jqxgrid">
	</div>