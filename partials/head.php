<head>
<jdoc:include type="head" />

<?php

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');

//$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/jui/jquery.min.js');
//$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/jui/jquery-noconflict.js');
//$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/editor.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/media.css" type="text/css" />

</head>
