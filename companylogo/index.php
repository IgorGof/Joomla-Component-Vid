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
                <a href="<?php echo JUri::base(true); ?>">
                    <img class="logo" src="<?php echo JUri::base(true)."/templates/".$doc->template."/images/logo.png"; ?>">
                </a>
                <jdoc:include type="modules" name="position-0"/>
            </div>
        </div>
    </body>
</html>
