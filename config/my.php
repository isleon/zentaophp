<?php
$config->debug        = true;  
$config->requestType  = 'GET';    // PATH_INFO or GET.
$config->requestFix   = '-';
$config->webRoot      = '/zentaophp/';

$config->db->host     = 'localhost';
$config->db->port     = '3306';
$config->db->name     = 'demo'; 
$config->db->user     = 'root'; 
$config->db->password = 'root';

/* To use master and slave database feature, uncomment this.
$config->slaveDB->host     = 'localhost';
$config->slaveDB->port     = '3306';
$config->slaveDB->name     = 'demo'; 
$config->slaveDB->user     = 'root'; 
$config->slaveDB->password = ''; */
