<?php
if (!function_exists('get_history_companies')) {
    function get_history_companies()
    {
        $data_history_companies = [];
        foreach (get_field('company_section') as $key_company_section) {
            $history_companies['url'] = $key_company_section['link']['url'];
            $history_companies['url_target'] = $key_company_section['link']['target'];
            $history_companies['image_url'] = $key_company_section['image']['sizes']['large'];
            $history_companies['image_alt'] = $key_company_section['image']['alt'];
            $history_companies['project_subtitle'] = $key_company_section['job'];
            $history_companies['project_title'] = $key_company_section['name'];

            $data_history_companies[] = $history_companies;
        }

        return $data_history_companies;
    }
}
