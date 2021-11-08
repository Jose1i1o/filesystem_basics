<?php

/* 
 * $_FILES['file']['file_upload'] -> In the superglobal $_FILES, the key 'file' is the name of the file input field.
 *
 * name: original file name
 * type: MIME type('image/jpeg')
 * size: file size in bytes
 * tmp_name: temporary file name
 * error: error code
 * move_uploaded_file($tmp_path, $destination) -> move the uploaded file from the temporary location to the destination
 */

// This allows you to see the array with all the contents: name, type, tmp_name, error, size
// if (isset($_POST['submit'])) {

//     // process the form data

//     echo "<pre>";
//     print_r($_FILES['file_upload']);
//     echo "</pre>";

//     $data = file_get_contents($_FILES['file_upload']['tmp_name']);
//     echo nl2br($data);
// }

// See upload_errors.php for error codes
function upload_error($error)
{
    $upload_errors = array(
        UPLOAD_ERR_OK => "No error.",
        UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize.",
        UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE.",
        UPLOAD_ERR_PARTIAL => "Partial upload.",
        UPLOAD_ERR_NO_FILE => "No file.",
        UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
        UPLOAD_ERR_CANT_WRITE => "Can´t write to disk.",
        UPLOAD_ERR_EXTENSION => "File upload stopped by extension.",
    );
    return $upload_errors[$error];
}

$upload_dir = __DIR__ . '/uploads';

if (isset($_POST['submit'])) {
    //process the data form data
    $error = $_FILES['file_upload']['error'];
    if ($error > 0) {
        echo upload_error($error);
    } else {

        $tmp_path = $_FILES['file_upload']['tmp_name'];
        $filename = basename($_FILES['file_upload']['name']); // security precauting to protect tricky values on namespaces
        $target_path = $upload_dir . '/' . $filename;

        if (move_uploaded_file($tmp_path, $target_path)) {
            echo "The file " . $filename . " has been uploaded.";
        } else {
            echo "There was an error uploading the file, please try again!";
        }
    }
}
