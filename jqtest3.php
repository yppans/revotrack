<html
<head>
<link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
<link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.classic.css" type="text/css" />
<script type="text/javascript" src="jqwidgets/scripts/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.js"></script>
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.selection.js"></script>	
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.sort.js"></script>		
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxdata.js"></script>	
</head>
<body>

<div id="jqxgrid">
<script type="text/javascript">
    $(document).ready(function () {
        // prepare the data
        var theme = 'classic';
        var source =
        {
            datatype: "json",
            datafields: [
					{ name: 'Name' },
					{ name: 'Job' },
					{ name: 'Phone' },
					{ name: 'Email' },
            ],
            url: 'data2.php',
            sort: function () {
                // update the grid and send a request to the server.
                $("#jqxgrid").jqxGrid('updatebounddata');
            }
        };
        // initialize jqxGrid
        $("#jqxgrid").jqxGrid(
        {
            source: source,
            theme: theme,
            sortable: false,
            sorttogglestates: 1,
            columns: [
                    { text: 'Name', datafield: 'Name', width: 200 },
                    { text: 'Job', datafield: 'Job', width: 100 },
                    { text: 'Phone', datafield: 'Phone', width: 100 },
                    { text: 'Email', datafield: 'Email', width: 140 }
                ]
        });
    });
</script>


</div>
</body>