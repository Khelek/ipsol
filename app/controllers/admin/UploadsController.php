<?php namespace Admin;
use Banner, Lang, AdminController, View, Input, Redirect;

class UploadsController extends AdminController {


    public function __construct()
    {
        parent::__construct();
    }

    public function upload()
    {
        $file = Input::file('upload');
        $destinationPath = public_path().'/files';
        // If the uploads fail due to file system, you can try doing public_path().'/uploads' 
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension();
        $upload_success = $file->move($destinationPath, $filename);

        if( $upload_success ) {
            $CKEditorFuncNum = Input::get('CKEditorFuncNum');
            $url = \URL::asset("files/".$filename);
            $re = "window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', 'Изображение успешно загружено')";
        } else {
            $re = "alert('При загрузке произошла ошибка')";
        }
        return "<script>$re;</script>";
    }

}
