<form action=<?php echo $html->linkSrc("posts", "uploadimg")?> method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<h1> <?php if (isset($message)){echo $message;} ?> </h1>
