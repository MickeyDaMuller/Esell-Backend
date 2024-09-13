<?php

namespace dbn;

use PDO;
use \dbn\Database;

require 'classes/dbConnection.php';

class AuthModel extends Database
{
    protected function upload($query, $array)
    {
        try {
            $stmt = $this->connection()->prepare($query);
            if ($stmt->execute($array)) {
                $result = "successful";
            } else {
                $result = "not successful";
            }
            return $result;
        } catch (\PDOException $e) {
            return "select error message" . $e->getMessage();
        }
    }

    public function viewListItems($query, $array)
    {
        try {
            $sql = $this->connection()->prepare($query);
            $sql->execute($array);
            if ($sql->rowCount() > 0) {
                foreach ($sql as $row) {
                    $res[] = $row;
                }
                if (!empty($res)) {
                    return $res;
                }
            }
        } catch (\PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    protected function uploadLastId($query, $array)
    {
        $conn = $this->connection();
        try {
            $stmt = $conn->prepare($query);
            if ($stmt->execute($array)) {
                $id = $conn->lastInsertId();
                $result = $id;
            } else {
                $result = "not successful";
            }
            return $result;
        } catch (\PDOException $e) {
            return "select error message" . $e->getMessage();
        }
    }

    protected function update($query, $array)
    {
        try {
            $stmt = $this->connection()->prepare($query);
            $stmt->execute($array);
            if ($stmt->rowCount() > 0) {
                $result = "successful";
            } else {
                $result = "not successful";
            }
            return $result;
        } catch (\PDOException $e) {
            return "select error message" . $e->getMessage();
        }
    }

    protected function readByPagination($page, $dbTable, $array)
    {
        try {
            $perPage = 9;

            // Calculate Total pages
            $stmt = $this->connection()->prepare($dbTable);
            $stmt->execute($array);
            $count = $stmt->rowCount();
            $total_results = $stmt->fetchColumn();
            $total_pages = ceil($count / $perPage);

            // Current page
            $pages = isset($page) ? $page : 1;
            $starting_limit = ($pages - 1) * $perPage;

            // Query to fetch post
            $query = "$dbTable LIMIT $starting_limit, $perPage";

            // Fetch all posts for the current page
            $post = $this->connection()->prepare($query);
            $post->execute($array);
            $post = $post->fetchAll();

            $pagination = [
                'total_pages' => $total_pages,
                'page' => $pages,
                'total_results' => $total_results,
                'count' => $count,
            ];

            $res = [];
            $res['posts'] = $post;
            $res['paginator'] = $pagination;
            return $res;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
