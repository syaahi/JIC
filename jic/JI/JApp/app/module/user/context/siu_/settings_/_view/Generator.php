<?php namespace _m\user\context\siu\settings\_view;

class Generator extends \_m\webpage\view\_Generator
{

	public function generate( $page )
	{
		$layout = new Layout();

		$layout->append( (new TitleBar)->toString() );

		return $this->builder()->generate( $layout );
	}
}