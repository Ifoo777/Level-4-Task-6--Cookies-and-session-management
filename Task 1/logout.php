<?php

session_start();

//destroy the session
session_destroy();

echo '<h1>You are logged out</h1>';

echo '<button><a href="home.html">Go back to Home Pgae</a></button>';