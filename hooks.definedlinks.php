<?php

    class Hooks_definedlinks extends Hooks
    {
        public function control_panel__add_to_head()
        {
            if (URL::getCurrent(false) == '/publish')
            {
                $file = 'defined-links.json';
                $current_content_list = file_get_contents($file, true);
                $current_content_list = json_decode($current_content_list);

                $content_set = ContentService::getContentByFolders(array("/*"));
                $content_set->multisort('url');
                $content_set = $content_set->get();

                $content_list = [];
                $content_list[] = ['name' => 'Select...', 'url' => false ];

                foreach ($content_set as $content){
                    if (isset($content['url']) && isset($content['title'])){
                        $name = '[' . $content['url'] . '] ' . $content['title'];
                        $url = $content['url'];
                        $content_list[] = [ 'name' => $name, 'url' => $url ];
                    }
                }

                if ($current_content_list !== $content_list){
                    $json = json_encode($content_list);
                    file_put_contents($file,$json, FILE_USE_INCLUDE_PATH);
                }

                return $this->js->link('definedlinks.js');
            }
        }
    }

?>
