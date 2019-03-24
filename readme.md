`Apod`

---------------
`$n = new Apod('YOUR_API_KEY');
 $fetch = $n->fetch();
 echo $fetch->getUrl() . PHP_EOL;
 echo $fetch->getExplanation() . PHP_EOL;
 echo $fetch->getTitle() . PHP_EOL;
 echo $fetch->getMediaType() . PHP_EOL;`
 
 OR
 
`$n = new Apod('YOUR_API_KEY');
 $url   = $n->fetch()->getUrl();
 $title = $n->fetch()->getTitle();`