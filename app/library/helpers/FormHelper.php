<?php

class FormHelper {
    public static function getBanner($id) {
        $ban = \Banner::find($id);
        ['img_src' => $ban->img->url('medium'), 'url' => $ban->url];
    }
}
