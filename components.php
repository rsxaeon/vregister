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
			foreach ($this->scriptFiles as $sf) {
				echo "	<script src=\"" + $sf + "\"></script>\n";
			}
			foreach ($this->cssFiles as $cf) {
				echo "	<link href=\"" + $cf + "\" rel=\"stylesheet\" tyle=\"text/css\">\n";
			}
			echo "	" + $specialContent + "\n";
			echo "</head>\n";
		}
	}
?>