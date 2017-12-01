<?php namespace Controller;
use \ArrayObject;
// Markdown Converter and Loader
class MarkdownLoader
{

	private $posts = ["test"];
	public $html = "test";

	public function __construct()
	{
		$this->html = "";
		$this->getMarkDown();
	}

	public function __invoke()
	{
		return $this->ConvertMarkdown();
	}

	private function getMarkDown()
	{
		// gets files from md directory
		$this->posts = scandir("md/");
	}

	private function CheckExtension($md)
	{
			if (preg_match('/^.+\.(md)$/',$md)) { // RegularExpression that checks for .md extension
				return true;
		}
	}

	private function ConvertMarkdown()
	{
		$rHtml = "";
		$parser = new \Parsedown();
		foreach ($this->posts as $p) {
			if ($this->CheckExtension($p)) {
			$md = file_get_contents('md/' . $p); // gets the content of the md file
			$md = $parser->text($md); // uses parser to create md section
			$rHtml .= "\n";
			$rHtml .= "<!--BLOG-POST-->\n"; // adds a comment
			$rHtml .= "<div id='blog-post'>\n"; // creates a division for the content
			$rHtml .= $md . "\n"; // adds converted markdown to $html
			$rHtml .= "</div>\n";
			}
		}
		$this->html .= "\n";
		return $rHtml;
	}

}
?>
