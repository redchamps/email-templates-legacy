<?php
namespace RedChamps\EmailTemplatesLegacy\Plugin;

use Magento\Framework\Filter\Template;

class FilterTemplate
{
    public function afterIsStrictMode(Template $subject, $result)
    {
        return false;
    }
}
