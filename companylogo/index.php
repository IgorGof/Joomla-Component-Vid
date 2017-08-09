<?php
    defined("_JEXEC") or die();
    $doc = new JFactory::getDocument();
    doc->addStyleSheet(JUri::base(true)."/templates/".$doc->template."/style.css");
?>
<!DOCTYPE html>
<html>
    <head>
        <jdoc::include type="head">
    </head>
    <body>
        <?php print_r($doc)?>
        <div class="wrap">
            <div class="head">
                <a href="/">
                    <img closs=logo src="<?php echo JUri::base(true)?>">
                </a>
            </div>
        </div>
    </body>
</html>
