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

    public function addCategory($query,$array)
    {
        return $this->update($query, $array);
    }
}
