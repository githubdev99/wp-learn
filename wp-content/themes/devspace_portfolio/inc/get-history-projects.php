<?php
if (!function_exists('get_history_projects')) {
    function get_history_projects()
    {
        $data_project_section = [];
        $data_filter_project_section = [];
        foreach (get_field('project_section') as $key_project_section) {
            $project_section['type'] = $key_project_section['type'];
            $project_section['url'] = $key_project_section['link']['url'];
            $project_section['url_target'] = $key_project_section['link']['target'];
            $project_section['image_url'] = $key_project_section['image']['sizes']['large'];
            $project_section['image_alt'] = $key_project_section['image']['alt'];
            $project_section['project_subtitle'] = implode(', ', array_column($key_project_section['tag'], 'name'));
            $project_section['project_title'] = $key_project_section['name'];

            $data_project_section[] = $project_section;
            $data_filter_project_section[] = $project_section['type'];
        }

        $filter_project_section = array_unique($data_filter_project_section);
        sort($filter_project_section);

        return [
            'data' => $data_project_section,
            'filter' => $filter_project_section,
        ];
    }
}
