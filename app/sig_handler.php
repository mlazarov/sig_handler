<?php

declare(ticks = 1);

function sig_handler($sig) {
	echo "Signal: $sig\n";
}


echo "Installing signal handler...\n";
pcntl_signal(SIGINT,  "sig_handler");
pcntl_signal(SIGTERM, "sig_handler");
pcntl_signal(SIGHUP,  "sig_handler");

while (1) {
	echo "[".date("r")."] Waiting for signal\n";
	sleep(1);
}
