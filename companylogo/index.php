<?php
    defined("_JEXEC") or die();
    $doc = JFactory::getDocument();
    $doc->addStyleSheet(JUri::base(true)."/templates/".$doc->template."/style.css");
?>
<!DOCTYPE html>
<html>
    <head>
        <jdoc:include type="head" />
    </head>
    <body>
        <div class="wrap">
            <div class="head">
                <a href="/">
                    <img closs=logo src="<?php echo JUri::base(true)?>">
                </a>
            </div>
        </div>
    </body>
</html>
