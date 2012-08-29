<?php
	
class WebtemplateFactory extends BaseFactory {
			
	public static function run($id,$html) {
		
		$query = new SysWebtemplateQuery();
		if ($webtemplate = $query->findPK($id)) {
			$html = $webtemplate->getDocType()."<html><head>".$webtemplate->getHead()."</head><body>".$webtemplate->getHeader().$html.$webtemplate->getFooter()."</body></html>";
		}
		
		return $html; 
		
	}
		
}
	
?>