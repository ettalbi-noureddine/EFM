<?php

defined('ABSPATH') or die("you do not have access to this page!");

// add custom time to cron
add_filter('cron_schedules', 'rsssl_filter_cron_schedules');
function rsssl_filter_cron_schedules($schedules)
{
    $schedules['oneminute'] = array(
        'interval' => 60, // seconds
        'display' => __('Once every minute')
    );
    return $schedules;
}

add_action('plugins_loaded', 'rsssl_schedule_cron', 15);
function rsssl_schedule_cron()
{
    if (get_site_option('rsssl_ssl_activation_active') || get_site_option('rsssl_ssl_deactivation_active')) {
        if (!wp_next_scheduled('rsssl_ssl_process_hook')) {
            wp_schedule_event(time(), 'oneminute', 'rsssl_ssl_process_hook');
        }
    } else {
        wp_clear_scheduled_hook('rsssl_ssl_process_hook');
    }

    add_action('rsssl_ssl_process_hook', array(RSSSL()->rsssl_multisite, 'run_ssl_process'));
}
