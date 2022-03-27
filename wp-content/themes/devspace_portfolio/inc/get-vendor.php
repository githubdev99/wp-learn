<?php
if (!function_exists('get_vendor')) {
    function get_vendor()
    {
        $data_vendor = [];
        foreach (get_field('vendor_section') as $key_vendor_section) {
            $vendor['type'] = $key_vendor_section['type'];
            $vendor['url'] = $key_vendor_section['link']['url'];
            $vendor['url_target'] = $key_vendor_section['link']['target'];
            $vendor['image_url'] = $key_vendor_section['image']['sizes']['large'];
            $vendor['image_alt'] = $key_vendor_section['image']['alt'];
            $vendor['name'] = $key_vendor_section['name'];

            $data_vendor[] = $vendor;
        }

        return $data_vendor;
    }
}
