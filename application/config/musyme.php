<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'encrypt_key' => 'fjdsjkfdskjfurew', 
	'cookie_salt' => 'fjsdijeihrewhbfsugfuyegwufewgwb',
//	'cookie_lifetime' => DATE::YEAR,
	'session_lifetime' => 0,
	'header' => array
	(
		'title' => 'Musy.me',
		'keyword' => 'Movies, songs, books',
	),
	
	'account'	=> array
	(
            'create'	=> array
            (
                    'username'	=> array
                    (
                            'min_length'	=> 2,
                            'max_length'	=> 12,
                            'format'		=> 'alpha_numeric', // alpha_dash, alpha
                    ),
                    'password'	=> array
                    (
                            'min_length'	=> 6,
                    )
            ),
	),
);

