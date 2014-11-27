<?php

trait AttachImageTrait {

    private function attachImage($attribute, $dimensions, $url)
    {
        $this->hasAttachedFile($attribute, [
            'styles' => [
                'medium' => ['dimensions' => $dimensions, 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
            ],
            'url' => $url
        ]);
    }

}