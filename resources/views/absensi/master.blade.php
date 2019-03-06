<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="{{ asset('js/daypilot-all.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
</head>
<body>

	<div id="dp"></div>

	<script type="text/javascript">
	    var dp = new DayPilot.Scheduler("dp");
	    	    dp.cellWidth = 40;
			    dp.eventHeight = 30;
			    dp.headerHeight = 25;

			    // view
			    dp.startDate = new DayPilot.Date(DayPilot.Date.today().firstDayOfMonth());  // or just dp.startDate = "2013-03-25";
			    dp.days = dp.startDate.daysInMonth();
			    dp.scale = "Day";
			    dp.timeHeaders = [
			      { groupBy: "Month" },
			      { groupBy: "Day", format: "d" }
			    ];
	    	dp.rowHeaderColumns = [
                {title: "Karyawan", width: 80},
                {title: "Divisi", width: 80}
            ];
            dp.resources = [
                 { name: "Room B", id: "B" },
                 { name: "Room C", id: "C" }
                ];
            
            dp.onBeforeResHeaderRender = function(args) {                       
               args.resource.columns[0].html ="tes";
                     
            };
            dp.rowCreateHandling = "Enabled";
			dp.onRowCreate = function(args) {
			  dp.resources.push({
			      id: DayPilot.guid(),
			      name: args.text
			  });
			  dp.update();
			};
	    	dp.init();
	</script>

</body>
</html>