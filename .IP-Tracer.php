<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mOmerta IPLocation\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mName Tool \033[01;37m:- \033[01;36mIP-Tracer
         \033[01;33mAuthor \033[01;37m:- \033[01;36ml'Omerta
         \033[01;33mPowered By \033[01;37m:- \033[01;36mAex Software's

 \033[01;33mIP-Tracer\033[01;32m is use \033[01;36mip-api \033[01;32mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $getact = readline('  IP-Tracer >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mMise à jour de IP-Tracer.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/ && sudo git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/IP-Tracer && sh install");
  logo();
  echo "\n\033[01;32m              IP-Tracer est mis à jour !\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mTracer une adresse IP.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mTracer ta propre IP.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mA propos de.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mAide.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mMis à jour IP-Tracer.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mQuitter \n\n\033[00m";
  $inp = readline('  IP-Tracer >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Déconnexion .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  Salut ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Commande invalide \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
