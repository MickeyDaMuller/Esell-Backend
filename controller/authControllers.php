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
    const GET_SUB_BRAND_QUERY = "SELECT sub_brands.id, sub_brands.name, brand_logos.name as brandName, brand_logos.id as brandLogoId FROM `sub_brands` JOIN brand_logos ON sub_brands.brandLogoId = brand_logos.id ORDER BY sub_brands.id DESC";
    const ADD_SUB_BRAND_QUERY = "INSERT INTO `sub_brands` (name, brandLogoId) VALUES (?, ?)";
    const GET_SUB_BRAND_BY_ID_QUERY = "SELECT * FROM `sub_brands` WHERE id = ?";
    const UPDATE_SUB_BRAND_QUERY = "UPDATE `sub_brands` SET name = ?, brandLogoId = ? WHERE id = ?";
    const DELETE_SUB_BRAND_QUERY = "DELETE FROM `sub_brands` WHERE id = ?";


    // Method to fetch total visitors
    public function getAllCategories()
    {
        return $this->viewListItems(self::GET_CATEGORIES_QUERY, []);
    }

    public function getAllList($query, $array)
    {
        return $this->viewListItems($query, $array);
    }

    public function addCategory($query, $array)
    {
        return $this->update($query, $array);
    }
    public function getCategoryById($query, $array)
    {
        return $this->viewListItems($query, $array);
    }
}
