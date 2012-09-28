<?php

require_once 'vendor/jqgrid/jq-config.php';
// include the jqGrid Class
require_once ABSPATH."php/jqGrid.php";
// include the driver class
require_once ABSPATH."php/jqGridPdo.php";

	
class JQGridFactory extends jqGridRender {
	
	protected $gridid;
	protected $htmlid;
	protected $onselrow;
	
	public function setHtmlId ($v) {
		$this->htmlid = $v;
		$this->gridid = $this->htmlid."_grid";
	}
	
	public function setGridId($v) {
		$this->gridid = $v;
	}
	
	public function getGridId() {
		return $this->gridid;
	}
	
	public function getHtmlId() {
		return $this->htmlid;
	}
	
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
	
	public function getOnSelectRow() {
		$this->onselrow = "
function(rowid, selected)
{
	if(rowid && rowid !== lastSelection) {
		$('#".$this->gridid."').jqGrid('saveRow',lastSelection,{
				url:'clientArray',
				aftersavefunc: function() {
					$('#".$this->htmlid."').val(JSON.stringify($('#".$this->gridid."').jqGrid('getRowData')));
				}
			});
		$('#".$this->gridid."').jqGrid('restoreRow', lastSelection);
		$('#".$this->gridid."').jqGrid('editRow', rowid,{
				keys:true,
				aftersavefunc: function() {
					$('#".$this->htmlid."').val(JSON.stringify($('#".$this->gridid."').jqGrid('getRowData')));
				}
			});
		lastSelection = rowid;
	}
}";
		return $this->onselrow;
	}
	
}
	
?>