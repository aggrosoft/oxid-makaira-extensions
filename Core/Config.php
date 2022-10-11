<?php

namespace Aggrosoft\Makaira\Core;

class Config extends Config_parent
{
    public function getShopConfVar($varName, $shopId = null, $module = '')
    {
        if ($varName === 'makaira_connect_activate_search' && $module === self::OXMODULE_MODULE_PREFIX . 'makaira/connect') {
            $user = oxNew(\OxidEsales\Eshop\Application\Model\User::class);
            if ($user->loadActiveUser()) {
                if ($user->inGroup('oxiddealer')) {
                    return false;
                }
            }
        }
        return parent::getShopConfVar($varName, $shopId, $module);
    }
}