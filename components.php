<?PHP
	function inDocType() {
		echo "<!DOCTYPE html>\n";
	}
	class pageHeader 
	{
		public $pageTitle;
		public $scriptFiles;
		public $cssFiles;
		
		public function __construct($pgtitle) {
			$this->pageTitile = $pgtitle;
			$this->scriptFiles = array();
			$this->cssFiles = array();
		}
		
		public function makeHeader($specialContent) {
			echo "<head>\n";
			echo "	<script src=\"" + var here + "\"></script>\n";
			echo "	<link href=\"" + var here + "\" rel=\"stylesheet\" tyle=\"text/css\">\n";
			echo "	" + $specialContent + "\n";
			echo "</head>\n";
		}
	}
?>