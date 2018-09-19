		$(document).ready(function() {
			$("input[name='checkAll']").click(function() {
				var checked = $(this).attr("checked");
				$("#table tr td input:checkbox").attr("checked", checked);
			});
		});