<?php

class BlogsController extends BaseController
{

    function beforeAction()
    {
    }
    function index()
    {
        // $this->Category->orderBy('name', 'ASC');
        // $this->Category->showHasOne();
        // $this->Category->showHasMany();
        // $this->Category->where('parent_id', '0');
        // $categories = $this->Category->search();
        // $this->set('categories', $categories);
    }
    function delete($id = -1)
    {
        if (isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin") {
            return header('Location: ' . BASE_PATH . '/posts');
        }
        if ($id == -1) {
            return header('Location: ' . BASE_PATH . '/blogs/manager');
        }
        $this->Blog->id = $id;
        $this->Blog->delete();
        return header('Location: ' . BASE_PATH . '/blogs/manager');
    }

    function detail($id = -1, $isNext = null)
    {
        $blogs = $this->Blog->search();
        if (!empty($blogs)) {
            $first = reset($blogs);
            $last = end($blogs);
            if (!empty($last))
                $index_last = $last["Blog"]["id"];
            if (!empty($first))
                $index_first = $first["Blog"]["id"];
        }

        if ($id == null) {
            $this->Blog->where('id', $index_first);
            $blog = $this->Blog->search();
            $this->set('blog', $blog);
        }

        (int) $index = (int)$id;
        if ($isNext == 1) {
            do {
                $index--;
                if ($index >= $index_first) {
                    $this->Blog->where('id', $index);
                    $blog = $this->Blog->search();
                    $this->set('blog', $blog);
                }
            } while (empty($blog) && $index_first < $index);
            if (empty($blog) && $index_first > $index) {
                $this->Blog->where('id', $index_last);
                $blog = $this->Blog->search();
                $this->set('blog', $blog);
            }
        } else if ($isNext == 2) {
            do {
                $index++;
                if ($index <= $index_last) {
                    $this->Blog->where('id', $index);
                    $blog = $this->Blog->search();
                    $this->set('blog', $blog);
                }
            } while (empty($blog) && $index_last > $index);
            if (empty($blog) && $index_last < $index) {
                $this->Blog->where('id', $index_first);
                $blog = $this->Blog->search();
                $this->set('blog', $blog);
            }
        } else {
            $this->Blog->where('id', $index_first);
            $blog = $this->Blog->search();
            $this->set('blog', $blog);
        }
    }
    function manager($pageNumber = 1)
    {
        //check role
        if (isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin") {
            return header('Location: ' . BASE_PATH . '/posts');
        }

        $this->Blog->setPage($pageNumber);
        $this->Blog->setLimit('1');
        $blogs = $this->Blog->search();
        $totalPages = $this->Blog->totalPages();
        $this->set('totalPages', $totalPages);
        $this->set('blogs', $blogs);
        $this->set('currentPageNumber', $pageNumber);
    }

    function add()
    {
        //check role
        if (isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin") {
            return header('Location: ' . BASE_PATH . '/posts');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['title_blog']) && isset($_POST['description'])
            ) {
                $title = $_POST['title_blog'];
                $content = $_POST['description'];

                $target_dir = ROOT . DS . "public" . DS . "img" . DS;
                if (isset($_FILES["file_input"])) {
                    $target_file = $target_dir . $_FILES["file_input"]["name"];
                    $uploadOk = 1;
                    $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    //Check image is actual or fake
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["file_input"]["tmp_name"]);
                        if ($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $uploadOk = 0;
                        }
                    }
                    //check file size limit 10Mb
                    if ($_FILES["file_input"]["size"] > 10000000) {
                        $uploadOk = 0;
                    }

                    //alow some type img
                    if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg") {
                        $uploadOk = 0;
                    }

                    //start upload
                    if ($uploadOk == 0) {
                        return $this->set("message", false);
                    } else {
                        if (move_uploaded_file($_FILES["file_input"]["tmp_name"], $target_file)) {
                        } else {
                            return $this->set("message", false);
                        }
                    }
                    $this->Blog->imgname = $_FILES["file_input"]["name"];
                }
                $this->Blog->title = $title;
                $this->Blog->content = $content;
                $result = $this->Blog->save();

                if ($result == -1) {
                    return $this->set("message", "Đã xảy ra lỗi");
                }
            }
            header('Location: ' . BASE_PATH . '/blogs/manager');
            return $this->set("message", "Thêm thành công");
        }
    }

    function afterAction()
    {
    }
}
