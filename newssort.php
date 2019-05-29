<?php
$bbcNews = array(
	array('title'=>'Story-A', 'date'=>'2008-05-28', 'category'=>'Science'),
	array('title'=>'Story-B', 'date'=>'2010-05-15', 'category'=>'Science'),
	array('title'=>'Story-C', 'date'=>'2019-05-28', 'category'=>'Science'),
	array('title'=>'Story-D', 'date'=>'2012-01-11', 'category'=>'Arts'),
	array('title'=>'Story-D', 'date'=>'2014-11-09', 'category'=>'Arts'),
);

$formattedarray = array();


if(!empty($bbcNews))
{
	foreach($bbcNews as $bbn)
	{
		$formattedarray[] = array(
			'title'=>ucfirst($bbn['title']),
			'date'=>strtotime($bbn['date']),
			'category'=>ucfirst($bbn['category'])
		);
	}
}

$category = array_column($formattedarray, 'category');
$datetime = array_column($formattedarray, 'date');

array_multisort($category, SORT_DESC, $datetime, SORT_DESC, $formattedarray);

foreach($formattedarray as $newsarray)
{
	echo $newsarray['category'] . "--->" . $newsarray['title'] . "--->" . date('Y-m-d', $newsarray['date']) . "<br/>";
}

?>