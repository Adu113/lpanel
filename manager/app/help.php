<?php

    use Librarys\App\AppUpgrade;

    define('LOADED', 1);
    require_once('global.php');

    $title      = lng('app.help.title_page');
    $appUpgrade = new AppUpgrade();
    $hasUpgrade = $appUpgrade->checkHasUpgradeLocal();
    require_once(ROOT . 'incfiles' . SP . 'header.php');
?>

    <ul class="alert">
        <li class="info">
            <span><?php echo lng('home.alert.features_is_construct'); ?></span>
        </li>
    </ul>

    <ul class="menu-action">
        <li>
            <a href="about.php">
                <span class="icomoon icon-about"></span>
                <span><?php echo lng('app.about.menu_action.about'); ?></span>
            </a>
        </li>
        <li>
            <a href="check_update.php">
                <span class="icomoon icon-update"></span>
                <span><?php echo lng('app.about.menu_action.check_update'); ?></span>
            </a>
        </li>

        <?php if ($hasUpgrade) { ?>
            <li>
                <a href="upgrade_app.php">
                    <span class="icomoon icon-update"></span>
                    <span><?php echo lng('app.about.menu_action.upgrade_app'); ?></span>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="validate_app.php">
                <span class="icomoon icon-check"></span>
                <span><?php echo lng('app.about.menu_action.validate_app'); ?></span>
            </a>
        </li>
        <li>
            <a href="feedback.php">
                <span class="icomoon icon-feedback"></span>
                <span><?php echo lng('app.about.menu_action.feedback'); ?></span>
            </a>
        </li>
    </ul>

<?php require_once(ROOT . 'incfiles' . SP . 'footer.php'); ?>