<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       The XUUPS Project http://sourceforge.net/projects/xuups/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Defacer
 * @since           1.0
 * @author          trabis <lusopoemas@gmail.com>
 */

use Xmf\Module\Admin;
use XoopsModules\Defacer\{
    Helper
};
/** @var Admin $adminObject */
/** @var Helper $helper */

require dirname(__DIR__) . '/preloads/autoloader.php';

require dirname(__DIR__, 3) . '/include/cp_header.php';
require dirname(__DIR__, 3) . '/class/xoopsformloader.php';
require  dirname(__DIR__) . '/include/common.php';

require_once __DIR__ . '/admin_functions.php';
// require_once  dirname(__DIR__) . '/class/Utility.php';

$moduleDirName = basename(dirname(__DIR__));
/** @var Helper $helper */
$helper      = Helper::getInstance();
$adminObject = Admin::getInstance();

$pathIcon16    = Admin::iconUrl('', 16);
$pathIcon32    = Admin::iconUrl('', 32);
$pathModIcon32 = $helper->getModule()->getInfo('modicons32');

// Load language files
$helper->loadLanguage('admin');
$helper->loadLanguage('modinfo');
$helper->loadLanguage('main');

$myts = \MyTextSanitizer::getInstance();

if (!isset($GLOBALS['xoopsTpl']) || !($GLOBALS['xoopsTpl'] instanceof \XoopsTpl)) {
    require_once $GLOBALS['xoops']->path('class/template.php');
    $xoopsTpl = new \XoopsTpl();
}
