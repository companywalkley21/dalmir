<?php





function admin_url($param)
{
    $admin_dir = config_item('admin_dir');
    return site_url("{$admin_dir}/{$param}");
    
}