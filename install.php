#!/usr/bin/php
<?php

function println($value = '') {
	echo $value;
	echo "\n";
}

println();
println("**************************************************");
println("    WELCOME TO WEBOS IMPLEMENTATION INSTALLER     ");
println("**************************************************");
println();
println("WebOS Framework for PHP by Salomón Córdova. (@salojc2006)" );
println("Create your own desktop applications ready for all os,"    );
println("simply and semantic coding, object driven, event driven."  );
println("If you love WebOS, please share your experience with mates");
println("or contribute on github and gitlab.");
println();
println("Initializing installation...");
println();

chdir(__DIR__ . '/private/lib/');

println("Cloning Webos repository");
println("============================================");
exec('git clone https://github.com/salojc2006/Webos.git');
println();
println("Cloning salodev repository");
println("============================================");
exec('git clone https://github.com/salojc2006/salodev.git');
println();

println("Completing instalation");
println("============================================");
println("creating directoy for 'Webos'...");
chdir(__DIR__ . '/private/lib/Webos');

println("pulling files...");
exec('git pull');

println("creating directoy for 'salodev'...");
chdir(__DIR__ . '/private/lib/salodev');

println("pulling files...");
exec('git pull');


println("creating implementation directories...");
chdir(__DIR__ . '/private/');
mkdir('workspaces');
mkdir('log');
mkdir('debug');

chdir(__DIR__);

$dirname = __DIR__ . '/public';
println();
println("INSTALLATION COMPLETE!");
println();
println();
println("You are ready to start! Type following command:");
println();
println("sudo php -S localhost:8080 {$dirname}/index.php");
println();
println("To login into implementation, use these credentials:");
println("user: root");
println("pass: root");
println();
println("Enjoy Webos!");
println();
println();