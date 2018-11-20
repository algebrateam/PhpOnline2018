<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
unset($_SESSION);  // ovo ne radi
session_destroy();  // ovo uništava sve podatke iz sessiona
