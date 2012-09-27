<?php

require_once 'vendor/jqgrid/jq-config.php';
// include the jqGrid Class
require_once ABSPATH."php/jqGrid.php";
// include the driver class
require_once ABSPATH."php/jqGridPdo.php";

	
class JQGridFactory extends jqGridRender {
	
	public $html = '
		{% autoescape false %}
			{{ calldecl ("jqgrid.css") }}
			{{ calldecl ("jquery.js") }}
			{{ calldecl ("grid.locale-en.js") }}
			{{ calldecl ("jqgrid.js") }}
			{{ calldecl ("blockUI.js") }}
		{% endautoescape %}
	';
	
	public function buildHtml($tblelement,$pager,$script,$summary,$params,$createtbl,$createpg) {
		
		return $this->html.parent::renderGrid($tblelement,$pager,$script,$summary,$params,$createtbl,$createpg,false);
			
	}
	
	protected $onselrow = <<< ONSELROW
function(rowid, selected)
{
	if(rowid && rowid !== lastSelection) {
		$("#$gridid").jqGrid('saveRow',lastSelection,{
				url:'clientArray',
				aftersavefunc: function() {
					$("#$htmlid").val(JSON.stringify($('#$gridid').jqGrid('getRowData')));
				}
			});
		$("#$gridid").jqGrid('restoreRow', lastSelection);
		$("#$gridid").jqGrid('editRow', rowid,{
				keys:true,
				aftersavefunc: function() {
					$("#$htmlid").val(JSON.stringify($('#$gridid').jqGrid('getRowData')));
				}
			});
		lastSelection = rowid;
	}
}
ONSELROW;
	
	public function getOnSelectRow() {
		return $this->onselrow;
	}
	
}
	
?>