<?php

/* 
 * 1) query  raditi sa prepared metodom
 * 
 * 2) koristiti addslashes()
 * 
 * 3) validacija tri razine: browser(klijent)-> html, javascript 
 *                           server -> ctype_alnum()
 *                                     , ctype_digit()
 *                                     , trim()
 *                                     , addslashes()
 *                                     , htmlspecialchars()
 *                                     , htmlentities 
 *                           database -> triggers
 * 
 * 4) hashing pasworda MD5 ili SHA1
 * 
 * 5) najbolje i + SALT
 * 
 * 6) maskirati prikaz grešaka na production
 * 
 * 
 * 
 * 
 */

