<?php
    const server = "localhost";
    // const db = "prestamos";
    // const db = "test_sgt_maestros";
    const db = "sgt";
    // const db = "tunel_pvn";
    const user = "root";
    const password = "";

    const dbSGTMantto = "mysql:host=".server.";dbname=".db;

    const Method = "AES-256-CBC";
    const secretKey = '$SGT@2025';
    const secretIV = '037970';
        
	// const METHOD="AES-256-CBC";
	// const SECRET_KEY='$PRESTAMOS@2020';
	// const SECRET_IV='037970';