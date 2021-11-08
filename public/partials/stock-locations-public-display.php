<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://tyganeutronics.com
 * @since      1.0.0
 *
 * @package    Stock_locations
 * @subpackage Stock_locations/public/partials
 */
?>

<div id="<?= $this->plugin_name ?>-display" class="<?= $this->plugin_name ?>-display">
    <span>
        <img width="32px" height="32px" alt="<?= __("Delivery", $this->plugin_name) ?>" src="<?= plugin_dir_url(__DIR__) . "img/map-marker-radius-outline.svg" ?>">
        <div class="<?= $this->plugin_name ?>-tooltip">
            <?php if (stock_locations_get_location()) : ?>
                <span><?php _e("Location:", $this->plugin_name) ?></span>
            <?php endif; ?>
            <a class="<?= $this->plugin_name ?>-button" href="#"><?= $this->renderStoreName() ?>
            </a>
            <span class="<?= $this->plugin_name ?>-tooltiptext">
                <?php if (stock_locations_get_location()) : ?>
                    <p><?= __("Click to change location.", $this->plugin_name) ?></p>
                <?php else : ?>
                    <p><?= __("Please select collection/delivery store so that we can show you products available in that store. You can change
            your selection at any time.", $this->plugin_name) ?></p>
                <?php endif; ?>
            </span>
        </div>
    </span>
</div>