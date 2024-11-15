<?php

declare(ticks = 1);

function sig_handler($sig) {
	echo "Signal: $sig\n";
}

pcntl_signal(SIGINT,  "sig_handler");
pcntl_signal(SIGTERM, "sig_handler");
pcntl_signal(SIGHUP,  "sig_handler");
