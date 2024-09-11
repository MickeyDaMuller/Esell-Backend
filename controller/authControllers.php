<?php

namespace dbn;

use PDO;
use \dbn\AuthModel;

require 'models/authModels.php';

class AuthController extends AuthModel
{
    // Queries for data retrieval
    const GET_CATEGORIES_QUERY = "SELECT * FROM `categories`";
    const ADD_CATEGORY_QUERY = "INSERT INTO `categories` (name, categoryURL) VALUES (?, ?)";
    const GET_CATEGORY_BY_ID_QUERY = "SELECT * FROM `categories` WHERE id = ?";
    const UPDATE_CATEGORY_QUERY = "UPDATE `categories` SET name = ?, categoryURL = ? WHERE id = ?";
    const DELETE_CATEGORY_QUERY = "DELETE FROM `categories` WHERE id = ?";
    const GET_BRAND_QUERY = "SELECT * FROM `brand_logos`";
    const ADD_BRAND_QUERY = "INSERT INTO `brand_logos` (name, logoURL) VALUES (?, ?)";
    const GET_BRAND_BY_ID_QUERY = "SELECT * FROM `brand_logos` WHERE id = ?";
    const UPDATE_BRAND_QUERY = "UPDATE `brand_logos` SET name = ?, logoURL = ? WHERE id = ?";
    const DELETE_BRAND_QUERY = "DELETE FROM `brand_logos` WHERE id = ?";
    // const GET_POSTS_QUERY = "SELECT * FROM `posts`";
    // const ADD_POST_QUERY = "INSERT INTO `posts` (title, content, image, category_id, author_id, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
    // const GET_POST_BY_ID_QUERY = "SELECT * FROM `posts` WHERE id = ?";
    // const UPDATE_POST_QUERY = "UPDATE `posts` SET title = ?, content = ?, image = ?, category_id = ?, author_id = ? WHERE id = ?";
    // const DELETE_POST_QUERY = "DELETE FROM `posts` WHERE id = ?";
    // const GET_CATEGORIES_QUERY = "SELECT * FROM `categories`";
    // const GET_CATEGORY_BY_ID_QUERY = "SELECT * FROM `categories` WHERE id = ?";
    // const UPDATE_CATEGORY_QUERY = "UPDATE `categories` SET name = ? WHERE id = ?";
    // const DELETE_CATEGORY_QUERY = "DELETE FROM `categories` WHERE id = ?";
    // const GET_USERS_QUERY = "SELECT * FROM `users`";
    // const GET_USER_BY_ID_QUERY = "SELECT * FROM `users` WHERE id = ?";
    // const UPDATE_USER_QUERY = "UPDATE `users` SET name = ?, email = ?, phone = ?, address = ?, password_hash = ? WHERE id = ?";
    // const DELETE_USER_QUERY = "DELETE FROM `users` WHERE id = ?";
    // const GET_ADMINS_QUERY = "SELECT * FROM `admins`";
    // const GET_ADMIN_BY_ID_QUERY = "SELECT * FROM `admins` WHERE id = ?";
    // const UPDATE_ADMIN_QUERY = "UPDATE `admins` SET name = ?, email = ?, username = ?, password_hash = ? WHERE id = ?";
    // const DELETE_ADMIN_QUERY = "DELETE FROM `admins` WHERE id = ?";
    // const GET_

    // const ADMIN_LOGIN_QUERY = "SELECT * FROM `admins` WHERE (email = ? OR username = ?) AND password_hash = ?";
    // const VISITORS_QUERY = "SELECT COUNT(*) as total FROM visitors";
    // const CONTACT_MESSAGES_QUERY = "SELECT COUNT(*) as total FROM contact_messages";
    // const ADMINS_QUERY = "SELECT COUNT(*) as total FROM admins";
    // const NEWSLETTER_SUBSCRIPTIONS_QUERY = "SELECT COUNT(*) as total FROM newsletter_subscriptions";
    // const BLOGS_QUERY = "SELECT COUNT(*) as total FROM blogs";
    // const LATEST_BLOGS_QUERY = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 10";
    // const LATEST_CONTACT_MESSAGES_QUERY = "SELECT * FROM contact_messages ORDER BY created_at DESC LIMIT 10";

    // Method to get admin details by email/username and hashed password
    // public function getAdminDetailsByEmailOrUsernameAndPassword($identifier, $hashedPassword)
    // {
    //     $query = self::ADMIN_LOGIN_QUERY;
    //     $params = [$identifier, $identifier, $hashedPassword];
    //     $result = $this->viewListItems($query, $params);

    //     return !empty($result) ? $result[0] : false;
    // }

    // Method to fetch total visitors
    public function getAllCategories()
    {
        return $this->viewListItems(self::GET_CATEGORIES_QUERY, []);
    }

    public function getAllList($query, $array){
        return $this->viewListItems($query, $array);
    }

    public function addCategory($query,$array)
    {
        return $this->update($query, $array);
    }
    public function getCategoryById($query,$array)
    {
        return $this->viewListItems($query, $array);
    }

}
