<?php
$config->debug        = true;  
$config->requestType  = 'GET';    // PATH_INFO or GET.
$config->requestFix   = '-';
$config->webRoot      = '/zentaophp/';

$config->db->host     = '10.1.72.154';
$config->db->port     = '3306';
$config->db->name     = 'novel_cn_new'; 
$config->db->user     = 'root'; 
$config->db->password = 'root';

/* To use master and slave database feature, uncomment this.
$config->slaveDB->host     = 'localhost';
$config->slaveDB->port     = '3306';
$config->slaveDB->name     = 'demo'; 
$config->slaveDB->user     = 'root'; 
$config->slaveDB->password = ''; */
