<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 21/11/13
 * Time: 10:11
 */


return array(

    'simpleauth.table_name' => 'frontusers',
    'driver' => array('Simpleauth'),
	'verify_multiple_logins' => true,
	'salt' => 'put_your_salt_here',
	'iterations' => 10000,

    /*
    'inspectors' => array(
        'author',
        'tag',
        'category',
        'date'
    ),
    */
    /*
    'query' => array(
        'model' => '{{namespace}}\Model_Post',
        'order_by' => array('post_created_at' => 'DESC'),
        'limit' => 20,
    ),
    */
);